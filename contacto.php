<?php include 'header.php'; ?>



	<div class="row-fluid">
		<div class="span12" id="mainContent">
	

    <div class="row-fluid">
    <article class="span10 offset1">
    	


            <h3 id="salud"> <i class="icon-globe"></i> Solicitud de contacto</h3>

            <div class="row-fluid">
            <div id="contactForm" class="span12">
              <form>
               

              <div class="span4">
                 
                  <label>Nombre</label>
                  <input type="text" name="name" required>
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
                    <option value="">Google</option>
                    <option value="">Website de Seccion Amarilla</option>
                    <option value="">Periodico El Mexicano</option>
                    <option value="">Flyer/Volante</option>
                    <option value="">Recomendacion</option>
                  </select>

              </div>
              <div class="span4">
              
                  <table class="table">
                    <tr>
                      <td><input type="checkbox" name="" value=""> Nacional<br></td>
                      <td><input type="checkbox" name="" value=""> Frontera<br></td>
                      <td> <input type="checkbox" name="" value=""> Americano<br></td>
                    </tr>
                  </table>
                 
                   <label>Ano</label>
                   <input type="text" name="">
                   <label>Marca</label>
                   <input type="text" name="">
                   <label>Modelo</label>
                   <input type="text" name="">

                   <table class="table">
                    <tr>
                      <td><input type="checkbox" name="" value=""> Automatico<br></td>
                      <td><input type="checkbox" name="" value=""> Estandar<br></td>
                    </tr>
                  </table>

                  <label>Kilometraje/Milaje</label>
                  <input type="text" name="">

  
             </div><div class="clearfix"></div>
              <div class="row-fluid">
                <div class="span4 offset8">
                 <input type="submit" value="Enviar" class="btn-primary">
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