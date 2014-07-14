<?php 
	  session_start();
	  include ('../layouts/header.php');
	?>
<div class="container">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-bullhorn"></span>
                Registro Estadio</h1>
             </div>
            
            <div class="col-md-6" >
            	<form role="form" class="registerForm">
                	                 
                 
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre del estadio">
                      </div>
                      
                       <div class="dropdown">
                      		<label for="idciudad">Ciudad</label> <br>
                              <button class="btn btn-default dropdown-toggle" type="button" id="idciudad" name="idciudad" 		                                  data-toggle="dropdown">
                                Id Ciudad
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rio de Janeiro</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Amazonas</a></li>
                              </ul>
                        </div>                     
                      
                      
                      <button type="submit" class="btn btn-default">Submit</button>
                </form>
             </div>
        </div>
</div>
            
            <!------------Fin form------------->
            
  <?php include ('../layouts/footer.php'); ?>