<?php 
  session_start();
  include ('../layouts/header.php');
?>


    <div class="jumbotron">
      <div class="navbar navbar-inverse">
        <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Inicio</a>
              </div>
              
              
              <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Lista de Equipos</a></li>
                          <li><a href="#about">Calendario</a></li>
                          <li><a href="#contact">Resultados</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros <b class="caret"></b></a>
                          <ul class="list">
                            <li>
                                <a class= "btn btn-success various" data-fancybox-type="iframe" href="revista.html" role="button">Revista</a>
                            </li>
                   		 </ul>

                            
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li class="dropdown-header">Nav header</li>
                                  <li><a href="#">Separated link</a></li>
                                  <li><a href="#">One more separated link</a></li>
                                </ul>
                          </li>
                    </ul>
              </div><!--/.nav-collapse -->
        </div>
      </div>
      
        <label for="Nombre">Selecciona fecha</label>
                    <div class="form-group">
                	<div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
  </div>
  
  <div class="container">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-heart"></span>
                Revista</h1>
             </div>
            
            <div class="col-md-6">
                <!-------->
                
                <form class="registerForm">
                <div class="row">
               			<div class="form-group">
                            <label class="col-lg-3 control-label">Nombre</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="apellido" placeholder="Apellidos" />
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Portada</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="portada" placeholder="Portada" />
                            </div>
                        </div> 
                  </div> <br>
                  
                  <div class="row"> 
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Fecha</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="fecha" /> (YYYY/MM/DD)
                            </div>
                        </div>
                  </div> <br>
                  
                  <div class="row">                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Volumen</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="volumen" placeholder="Volumen..." />
                            </div>
                        </div>
                   </div> <br>
                        
                        
                   <div class="row">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="titulo" placeholder="Titulo" />
                            </div>
                        </div>
                    </div> <br>
                    
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Subtitulo</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="subtitulo" placeholder="Subtitulo" />
                            </div>
                        </div>  
                    </div> <br>
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Numero</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="numero" placeholder="Numero" />
                            </div>
                        </div>  
                    </div> <br>
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Clave</label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" name="clave" placeholder="Clave" />
                            </div>
                        </div>  
                    </div>   <br>
                    
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Directorio</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="directorio" placeholder="Directorio" />
                            </div>
                        </div>  
                    </div>  <br>
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Editorial</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="editorial" placeholder="Editorial" />
                            </div>
                        </div>  
                    </div>  <br>   
                    
                    
                    <div class="row">    
                        <div class="form-group">
                            <label for="idStatus" class="col-lg-3 control-label">Id Status </label>
                              <button class="btn btn-default dropdown-toggle" type="button" id="idStatus" name="idStatus" 		                                  data-toggle="dropdown">
                                Id Status
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">4</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">5</a></li>
                              </ul>
                        </div>  
                    </div>           
                </form>
                <!-------->
                
            </div>
        </div>
</div>
<?php include ('../layouts/footer.php'); ?>
