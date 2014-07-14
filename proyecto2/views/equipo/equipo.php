<?php 
	  session_start();
	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/siteController/EquipoController.php');
      include ('../../libs/Er.php');
	  
	  
	  
	  include ('../layouts/header.php');
	  if(isset($_POST['nombre']))
	  {
		echo "<pre>";
	  	print_r($_POST);
		echo "</pre>";
	  }
	?>   
<div class="container">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-user"></span>
                Equipo</h1>
             </div>
            
            <div class="col-md-6" >
            	<form role="form" class="registerForm" method="post">
                	                 
                 
                      <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre del equipo">
                      </div>
                      
                      <div class="dropdown">
                      		<label for="idpais">Id Pais</label> <br>
                            <select class="form-control" id="idpais" name="idpais">
                            	<option  value="1">1</option>
                                <option  value="2">2</option>
                            </select>
                              
                        </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Escudo</label>
                        <input type="file" id="escudo" name="escudo">
                        <p class="help-block">Fotografia bandera</p>
                      </div>
                      
                                           
                      
                      <button type="submit" class="btn btn-default">Guardar</button>
                </form>
             </div>
        </div>
</div>
            
            <!------------Fin form------------->
            
     <?php include ('../layouts/footer.php'); ?>