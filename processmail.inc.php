﻿<?php
$flag = false;

// create a pattern to locate suspcious phrases
$pattern = '/Content-Type:|Bcc:|Cc:/i';

// function to check for suspcious phrases
function isSuspect($val, $pattern, &$flag) {
  // if the variable is an array, loop through each element
  // and pass it recursively back to the same function
  if (is_array($val)) {
	foreach ($val as $item) {
	  isSuspect($item, $pattern, $flag);
	}
  } else {
	// if one of the suspcious phrases is found, set Boolean to true
	if (preg_match($pattern, $val)) {
	  $flag = true;
	} else {
	  if ($val)
	    htmlspecialchars($val);
  }
}

// check the $_POST array and any subarrays for suspcious content
isSuspect($_POST, $pattern, $flag);

if (!$flag) {
  foreach ($_POST as $key => $value) {
	// assign to temporary variable and strip whitespace if not an array
	$temp = is_array($value) ? $value : trim($value);
	// if empty and required, add to $missing array
	if (empty($temp) && in_array($key, $required)) {
	  $missing[] = $key;
	} elseif (in_array($key, $expected)) {
	  // otherwise, assign to a variable of the same name as $key
	  ${$key} = $temp;
	}
  }
}

// validate the user's email
if (!$flag && !empty($email)) {
  $validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if ($validemail) {
	$headers .= "\r\nReply-To: $validemail";
  } else {
	$errors['email'] = true;
  }
}

$mailSent = false;

// go ahead only if not suspcious and all required fields OK
if (!$flag && !$missing && !$errors) {

   // initialize the $message variable
   $message = '';
   // loop through the $expected array
   foreach($expected as $item) {
	 // assign the value of the current item to $val
	 if (isset(${$item}) && !empty(${$item})) {
	   $val = ${$item};
	 } else {
	   // if it has no value, assign 'Not selected'
	   $val = 'Not selected';
	 }
	 // if an array, expand as comma-separated string
	 if (is_array($val)) {
	   $val = implode(', ', $val);
	 }
     // replace underscores and hyphens in the label with spaces
     $item = str_replace(array('_', '-'), ' ', $item);
	 // add label and value to the message body
	 $message .= ucfirst($item).": $val\r\n\r\n";
   }

  // limit line length to 70 characters
  $message = wordwrap($message, 70);
  $mailSent = mail($to, $subject, $message, $headers);
  if (!$mailSent) {
    $errors['mailfail'] = true;
  }
}
