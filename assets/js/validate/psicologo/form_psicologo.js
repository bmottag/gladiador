$( document ).ready( function () {
			
	$("#nombres").convertirMayuscula().maxlength(25);
	$("#apellidos").convertirMayuscula().maxlength(25);
	$("#celular").bloquearTexto().maxlength(12);
			
	$( "#form" ).validate( {
		rules: {
			nombres:			{ required: true, minlength: 3, maxlength:25 },
			apellidos: 			{ required: true, minlength: 3, maxlength:25 },
			email: 				{ required: true, email: true, maxlength:50 },
			celular:	 		{ required: true, number: true, maxlength:12 },
			edad:		 		{ required: true },
			ayudarte:		 	{ required: true },
			formacion:		 	{ required: true },
			experiencia:		{ required: true, maxlength:200 },
			pagina_web:	 		{ maxlength:100 },
			direccion:	 		{ required: true, maxlength:100 },
			tarifa:		 		{ required: true, maxlength:20 },
			consultas:			{ required: true },
			idioma:			 	{ required: true },
			horario:		 	{ required: true }
			
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
			// Add the `help-block` class to the error element
			error.addClass( "help-block" );
			error.insertAfter( element );

		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".col-sm-6" ).addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parents( ".col-sm-6" ).addClass( "has-success" ).removeClass( "has-error" );
		},
		submitHandler: function (form) {
			return true;
		}
	});
	
	$("#btnSubmit").click(function(){		
	
		if ($("#form").valid() == true){
		
				//Activa icono guardando
				$('#btnSubmit').attr('disabled','-1');
				$("#div_error").css("display", "none");
				$("#div_load").css("display", "inline");
			
				$.ajax({
					type: "POST",	
					url: base_url + "psicologo/save_psicologo",	
					data: $("#form").serialize(),
					dataType: "json",
					contentType: "application/x-www-form-urlencoded;charset=UTF-8",
					cache: false,
					
					success: function(data){
                                            
						if( data.result == "error" )
						{
							alert(data.mensaje);
							$("#div_load").css("display", "none");
							$("#div_error").css("display", "inline");
							$("#span_msj").html(data.mensaje);
							$('#btnSubmit').removeAttr('disabled');							
							return false;
						} 

						if( data.result )//true
						{	                                                        
							$("#div_load").css("display", "none");
							$('#btnSubmit').removeAttr('disabled');
							var url = base_url + "psicologo/info/" + data.idRecord;
							$(location).attr("href", url);
						}
						else
						{
							alert('Error. Reload the web page.');
							$("#div_load").css("display", "none");
							$("#div_error").css("display", "inline");
							$('#btnSubmit').removeAttr('disabled');
						}	
					},
					error: function(result) {
						alert('Error. Reload the web page.');
						$("#div_load").css("display", "none");
						$("#div_error").css("display", "inline");
						$('#btnSubmit').removeAttr('disabled');
					}
					
		
				});	
		
		}//if			
	});

});