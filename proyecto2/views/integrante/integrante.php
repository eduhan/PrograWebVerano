<?php 
	  session_start();
	  include ('../layouts/header.php');
	?>   
<div class="container">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-user"></span>
                Integrante</h1>
             </div>
            
            <div class="col-md-6" >
            	<form role="form" class="registerForm">
                	                 
                 
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre del jugador">
                      </div>
    
                      
                      <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escribe el primer apellido">
                      </div>
                      
                      <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" id="peso" name="peso" placeholder="Teclea el peso">
                      </div>
                      
                      <div class="form-group">
                        <label for="estatura">Estatura</label>
                        <input type="text" class="form-control" id="estatura" name="estatura" placeholder="Teclea estatura">
                      </div>
                      
                      <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" id="foto" name="foto">
                        <p class="help-block">Fotografia bandera</p>
                      </div>
                      
                      <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" placeholder="Escribe la edad">
                      </div>
                      
                      <div class="dropdown">
                      		<label for="idcontinente">Id Equipo</label> <br>
                              <button class="btn btn-default dropdown-toggle" type="button" id="idequipo" name="idequipo" 		                                  data-toggle="dropdown">
                                Selecciona..
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                              	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Holanda</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Argentina</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Gracia</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brasil</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Colombia</a></li>
                              </ul>
                        </div>
                        <br>
                      	<br>
                        
                      <button type="button" class="btn btn-default" id="bjugador">Jugador</button>
                      <button type="button" class="btn btn-default" id="bentrenador">Entrenador</button>
                      
                </form>
                
                
                <form role="form" id="fjugador">
                        
                        <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Escribe el numero ">
                      </div>
                      
                      <div class="dropdown">
                      		<label for="idintegrante">Id Integrante</label> <br>
                              <button class="btn btn-default dropdown-toggle" type="button" id="idintegrante" name="idintegrante" 		                                  data-toggle="dropdown">
                                Selecciona..
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                              	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">I1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">I2</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">I3</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">I4</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">I5</a></li>

                              </ul>
                        </div>
                        
                        <div class="dropdown">
                      		<label for="idposicion">Id Posicion</label> <br>
                              <button class="btn btn-default dropdown-toggle" type="button" id="idposicion" name="idposicion" 		                                  data-toggle="dropdown">
                                Selecciona..
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                              	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Del1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Medio1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Medio1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Por1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Por2</a></li>

                              </ul>
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
          </form>
          
          <form role="form" id="fentrenador">
          
          <div class="dropdown">
                      		<label for="idcontinente">Id Entrenador</label> <br>
                              <button class="btn btn-default dropdown-toggle" type="button" id="identrenador" name="identrenador" 		                                  data-toggle="dropdown">
                                Selecciona..
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">E1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">E2</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">E3</a></li>


                              </ul>
                        </div>
                        
                        <div class="dropdown">
                      		<label for="idcontinente">Id Pais</label> <br>
                              <button class="btn btn-default dropdown-toggle" type="button" id="idpais" name="idpais" 		                                  data-toggle="dropdown">
                                Selecciona..
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Holanda</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Argentina</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Gracia</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brasil</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Colombia</a></li>
                              

                              </ul>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Enviar</button>
          
          </form>
          
                
                
                
                
                
                
             </div>
        </div>
</div>
            
            <!------------Fin form------------->
            
     <?php include ('../layouts/footer.php'); ?>