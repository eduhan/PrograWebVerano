<?php 
	  session_start();
	  include ('../layouts/header.php');
	?>
<div class="container">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-globe"></span>
                Continente</h1>
             </div>
            
            <div class="col-md-6" >
            	<form role="form" class="registerForm">
                	                 
                 
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre del continente">
                      </div>
                                            
                      <button type="submit" class="btn btn-default">Submit</button>
                </form>
             </div>
        </div>
</div>
            
            <!------------Fin form------------->
 <?php include ('../layouts/footer.php'); ?>
