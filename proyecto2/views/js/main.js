

 
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    pickTime: false,
					language: 'es'
					
                })
            });
			
		$(document).ready(
	function(){	
		$('#fjugador').hide();
		$('#fentrenador').hide();
		$('#bjugador').click(
			function(){
				$('#fjugador').show();
				$('#fentrenador').hide();
				
		}
		);
		
		$('#bentrenador').click(
			function(){
				$('#fentrenador').show();
				$('#fjugador').hide();
				

			}
		);

		
		});
			
			
			
			
			
			
			
			

        
        
        $(document).ready(function() {
			$(".various").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
		
		
  
    
    
    
    
        
			$(document).ready(function(){
			$('.registerForm').bootstrapValidator({
				message: 'This value is not valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre:
					{
						message: 'Nombre no valido',
						validators:
						{
							notEmpty:
							{
								message: 'El nombre no puede estar vacio'
							},
							stringLength:
							{
								min: 6,
								max: 500,
								message: 'El nombre debe tener minimo 6 caracteres y maximo 500'
							},
							regexp:
							{
								regexp: /^[a-zA-Z_]+$/,
								message: 'El nombre solo puede contener letras, no numeros'
							}
						}
					},
					//--------------------------------------------------------------------------------------
					apellido: {
						validators: {
							notEmpty: {
								message: 'El apellido no puede estar vacio'
							}
						}
					},
					
					//--------------------------------------------------------------------------------------
					portada:
					{
						message: 'Portada invalida',
						validators:
						{
							notEmpty:
							{
								message: 'El campo de portada no puede estar vacio'
							},
							stringLength:
							{
								min: 1,
								max: 100,
								message: 'La portada debe tener una longitud de entre 1 y 100 caracteres'
							},
							regexp:
							{
								regexp: /^[a-zA-Z_]+$/,
								message: 'La portada solo puede contener letras, no numeros'
							}
						}
					},
					//--------------------------------------------------------------------------------------
					 fecha: {
						validators: {
							date: {
								format: 'YYYY/MM/DD',
								message: 'The birthday is not valid'
							}
						}
					},
					
					//---------------------------------------------------------------------------------------
					volumen: {
						validators: {
							notEmpty: {
								message: 'El volumen no puede estar vacio'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					abreviatura: {
						validators: {
							notEmpty: {
								message: 'La abreviatura no puede estar vacia'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					titulo: {
						validators: {
							notEmpty: {
								message: 'El titulo no puede estar vacio'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					peso: {
						validators: {
							notEmpty: {
								message: 'El titulo no puede estar vacio'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					estatura: {
						validators: {
							notEmpty: {
								message: 'Llene el campo estaura'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					edad: {
						validators: {
							notEmpty: {
								message: 'Llene el campo edad'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					subtitulo: {
						validators: {
							notEmpty: {
								message: 'El subtitulo no puede estar vacio'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					numero: {
						validators: {
							notEmpty: {
								message: 'El numero no puede estar vacio'
							},
							regexp:
							{
								regexp: /^[0-9]+$/,
								message: 'El numero solo puede contener numeros'
							}
							
						}
					},
					//---------------------------------------------------------------------------------------
					clave: {
						validators: {
							notEmpty: {
								message: 'La clave no puede estar vacia'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					directorio: {
						validators: {
							notEmpty: {
								message: 'El directorio no puede estar vacio'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					editorial: {
						validators: {
							notEmpty: {
								message: 'La editorial no puede estar vacia'
							}
						}
					},
					//---------------------------------------------------------------------------------------
					idStatus: {
						validators: {
							notEmpty: {
								message: 'El estatus no puede estar vacio'
							}
						}
					},
				}
			});
		});
