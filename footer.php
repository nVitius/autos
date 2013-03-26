   <div class="row-fluid">
     <footer class="span10 offset1">
        
        <div class="span4">
            <h4>Ubicacion</h4>
                  
                   <address>
                <p>Calle Mision de Loreto</p>
                <p>Ext. 2936, Int. i, Zona Rio, C.P. 22010</p>
                <p>Tijuana, Baja</p>
              </address>
        </div>

        <div class="span4">
            <h4>Contacto</h4>
           
               <p><i class="icon-phone"></i> (664) 634-3467</p>
               <p><a href="clientes@prestamos-tijuana.com">
                <i class="icon-envelope"></i> clients@prestamos-tijuana.com</a></p>
         

           
                
        </div>

        <div class="span4">
            <h4>Legal</h4>
            
                <!-- Button to trigger modal -->
    <a href="#myModal" role="button"  data-toggle="modal">Terminos Legales</a>
    <a href="#myModal2" role="button"  data-toggle="modal">Terminos de privacidad</a>
   
     
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Terminos Legales</h3>
    </div>
    <div class="modal-body">
      <?php include 'legales.php'; ?>
    </div><!-- modal-body -->
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
    </div>
    </div><!-- myModal -->

     <!-- Modal2 -->
    <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Terminos de privacidad</h3>
    </div>
    <div class="modal-body">
         <?php include 'privacidad.php'; ?>
    </div><!-- modal-body -->
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
    </div>
    </div><!-- myModal2 -->

    

    

    </div>


    <div class="row-fluid">
        <div class="span10 offset1">
           <?php include 'googlecompliance.php'; ?>
        </div>
    </div>

   

   </div>

	</div>
	</div>


</div><!-- dummy-back -->
	

   

</div><!-- end container_fluid -->


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(function() {

       

        $('#myCarousel').carousel({ interval : 5000 });
        $('a[class*="warning"]').tooltip();
        $('a[class*="success"]').tooltip();

        
        
    
    }); // document ready
</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>