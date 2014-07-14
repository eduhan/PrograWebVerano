
    <?php 
	  session_start();
	  include ('../layouts/header.php');
	?>

	<div class="container">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-flag"></span>
                Registro Pa&iacute;s</h1>
             </div>
            
            <div class="col-md-6" >
            	<form role="form" class="registerForm">
						  <div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre del pais">
						  </div>
                      
						  <div class="form-group">
							<label for="exampleInputFile">Bandera</label>
							<input type="file" id="bandera" name="bandera">
							<p class="help-block">Fotografia bandera</p>
						  </div>
                      
						  <div class="dropdown">
								<label for="idcontinente">Continente</label> <br>
								  <button class="btn btn-default dropdown-toggle" type="button" id="idcontinente" name="idcontinente" 		                                  data-toggle="dropdown">
									Id Continente
									<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Asia</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Am&eacute;rica</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Africa</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Europa</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ocean&iacute;a</a></li>
								  </ul>
							</div>
                      
                      
							  <div class="checkbox">
								<label>
								  <input type="checkbox"> Check me out
								</label>
							  </div>
							  <button type="submit" class="btn btn-default">Submit</button>
					</form>
            </div>
        </div>
	</div>
            
            <!------------Fin form------------->

    <?php include ('../layouts/footer.php'); ?>


