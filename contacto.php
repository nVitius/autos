<?php 
include 'header.php'; 
$errors = array();
$missing = array();
// check if the form has been submitted
if (isset($_POST['send'])) {
  $to = 'clientes@prestamos-tijuana.com';
  $subject = 'Nuevo Cliente';
  
  // list expected fields
  $expected = array('name', 'tel', 'cel', 'nextel', 'email', 'cantidad', 'plazo', 'medio', 'nacionalidad', 'year', 'marca', 'modelo', 'transmision', 'millaje');
  
  // set required fields
  $required = array('name', 'tel');
  
  // set default values for variables that might not exist
  if (!isset($_POST['nacionalidad'])) {
	$_POST['nacionalidad'] = '';
  }
  if (!isset($_POST['transmision'])) {
	$_POST['transmision'] = '';
  }
  
  // create additional headers
  $headers = "From: Autopawn<clientes@prestamos-tijuana.com>\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  require('./processmail.inc.php');
  
  // TODO: Add a thank you page
  if ($mailSent) {
	header('Location: index.php');
	exit;
  }
  
}
?>

	<div class="row-fluid">
		<div class="span12" id="mainContent">
	

    <div class="row-fluid">
    <article class="span10 offset1">
    	


            <h3 id="salud"> <i class="icon-globe"></i> Solicitud de contacto</h3>

            <div class="row-fluid">
            <div id="contactForm" class="span12">
              <form id="contacto" method="post" action="">
               
              <div class="span4">
                 
                  <label>Nombre</label>
                  <input type="text" name="name" required
					<?php if ($missing || $errors) { 
					echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';
					} ?>>
                  <label>Telefono</label>
                  <input type="tel" name="tel" required>
                  <label>Celular</label>
                  <input type="tel" name="cel">
                  <label>Nextel</label>
                  <input type="tel" name="nextel">
				  
              </div>

              <div class="span4">
                 
                    <label>Correo Electronico</label>
                  <input type="email" name="email">
                   <label>Cantidad Solicitada</label>
                  <input type="text" name="cantidad">
                   <label>Plazo</label>
                  <input type="text" name="plazo">
                  <label>Porque medio se entero de nosotros</label>
                  <select name="medio">
                    <option value="google">Google</option>
                    <option value="seccion amarilla">Website de Seccion Amarilla</option>
                    <option value="el mexicano">Periodico El Mexicano</option>
                    <option value="volante">Flyer/Volante</option>
                    <option value="recomendacion">Recomendación</option>
                  </select>

              </div>
              <div class="span4">
              
                  <table class="table">
                    <tr>
                      <td><input type="radio" name="nacionalidad" value=""> Nacional<br></td>
                      <td><input type="radio" name="nacionalidad" value=""> Frontera<br></td>
                      <td><input type="radio" name="nacionalidad" value=""> Americano<br></td>
                    </tr>
                  </table>
                 
                   <label>Año</label>
                   <input type="text" name="year">
                   <label>Marca</label>
                   <input type="text" name="marca">
                   <label>Modelo</label>
                   <input type="text" name="modelo">

                   <table class="table">
                    <tr>
                      <td><input type="radio" name="transmision" value="automatico"> Automatico<br></td>
                      <td><input type="radio" name="transmision" value="estandar"> Estandar<br></td>
                    </tr>
                  </table>

                  <label>Kilometraje/Millaje</label>
                  <input type="text" name="millaje">

  
             </div><div class="clearfix"></div>
              <div class="row-fluid">
                <div class="span4 offset8">
                 <input type="submit" name ="send" value="Enviar" class="btn-primary">
                  <input type="reset" value="Limpiar" class="btn-primary">
              </div>
            </div>
         
           </form>
              
            <div class="clearfix"></div>

          
		  
            </div><!-- mainCopy -->
        </div>
       

    		
    </article>
	</div>


		</div><!-- mainContent -->
	</div><!-- row-fluid -->

 <?php include 'footer.php' ?>