$( document ).ready( function () {


    $("input[name=optionsAnsiedad]").on("click", function() {
		$('#ansiedad').val("ok");
		
    });
	
    $("input[name=optionsDepresion]").on("click", function() {
		$('#depresion').val("ok");
		
    });
	
    $("input[name=optionsSustancias]").on("click", function() {
		$('#sustancias').val("ok");
		
    });
	
    $("input[name=optionsSalud]").on("click", function() {
		$('#salud').val("ok");
		
    });
	
    $("input[name=optionsAutoestima]").on("click", function() {
		$('#autoestima').val("ok");
		
    });
	
    $("input[name=optionsPareja]").on("click", function() {
		$('#pareja').val("ok");
		
    });
	
    $("input[name=optionsSuicidio]").on("click", function() {
		$('#suicidio').val("ok");
		
    });

//para la pregunta de enfoque
jQuery.validator.addMethod("enfoque", function(e) {
	formulario = document.getElementById("form");
					
	var cont = 0; 
	
	for(var i=12; i<17; i++) {
		var elemento = formulario.elements[i];
		if(elemento.type == "checkbox") {
			if(elemento.checked) {
				cont = cont + 1;
				
			}
		}
	}
	if(cont==2 || cont==1 ){
		return true;
	}else{
		return false;
	}
}, "Mínimo 1, máximo 2");

//para la pregunta de valores
jQuery.validator.addMethod("valores", function(e) {
	formulario = document.getElementById("form");

		//var nn = formulario.elements[92];
		//alert(nn.value);
	var contx = 0; 
	
	for(var i=60; i<92; i++) {
		var elemento = formulario.elements[i];
		if(elemento.type == "checkbox") {
			if(elemento.checked) {
				contx = contx + 1;
			}
		}
	}
	if(contx==6){
		return true;
	}else{
		return false;
	}
}, "Por favor selecciona 6 valores.");

			
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
			horario:		 	{ required: true },
			hddEnfoques:		{ enfoque: true },
			ansiedad:			{ required: true },
			depresion:			{ required: true },
			sustancias:			{ required: true },
			salud:				{ required: true },
			autoestima:			{ required: true },
			pareja:				{ required: true },
			suicidio:			{ required: true },
			hddValores:			{ valores: true }
			
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
							var url = base_url + "psicologo/ingreso/" + data.idRecord;
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
		
		}else{
			alert('Los campos con * son obligatorios.');
		}			
	});

});