<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_VII.js"); ?>"></script>

<script>
$(document).ready(function () {
		
    $("#btnDescripcion").on("click", function() {

		var descripcion = $('#descripcion').val();
	
		if(descripcion == 1){
			$("#div_descripcion").css("display", "inline");
			$('#descripcion').val(2);
		}else{
			$("#div_descripcion").css("display", "none");
			$('#descripcion').val(1);
		}
		
    });
	
});
</script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> Encontrar mi psicólogo</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(VII)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="70">
							
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=7 />

						<strong>¿Qué tan afectado(a) te has sentido en cuanto a tu relación de pareja?</strong> 
						
<!-- Button trigger modal -->
<button type="button" id="btnDescripcion" name="btnDescripcion" class="btn btn-dark btn-xs">
  Ver descripción
</button>
<input type="hidden" id="descripcion" name="descripcion" value=1 />

						<div class="form-group" id="div_descripcion" style="display: none">
							<div class="col-sm-12">
							<ol>
								<li> Levemente: Mi relación de pareja no es un problema o no aplica para mí.</li>
								<li> Moderadamente: Ocasionalmente tengo problemas con mi pareja pero los podemos resolver entre nosotros a través de buena comunicación.</li>
								<li> Seriamente: Tengo problemas considerables con mi pareja. Intentamos pero nos cuesta poder resolver los problemas entre nosotros. </li>
								<li> Severamente: Tengo problemas graves con mi pareja. No podemos resolver los problemas entre nosotros debido a la mala comunicación o falta de interés en resolver los problemas. </li>
								<li> Extremadamente: Tengo problemas extremos y constantes con mi pareja. Cualquier intento de comunicar y solucionar los problemas agrava más la situación.</li>
							</ol>
							</div>
						</div>

<br><br>
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row" align="center">
									<div style="width:90%;" align="center">
									
									<label class="btn btn-primary <?php if($information && $information["pareja"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsPareja1" name="optionsPareja" value=1 <?php if($information && $information["pareja"] == 1) { echo "checked"; }  ?>> 1. Levemente
									</label>
									<label class="btn btn-primary <?php if($information && $information["pareja"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsPareja2" name="optionsPareja" value=2 <?php if($information && $information["pareja"] == 2) { echo "checked"; }  ?>> 2. Moderadamente
									</label>
									<label class="btn btn-primary <?php if($information && $information["pareja"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsPareja3" name="optionsPareja" value=3 <?php if($information && $information["pareja"] == 3) { echo "checked"; }  ?>> 3. Seriamente
									</label>
									<label class="btn btn-primary <?php if($information && $information["pareja"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsPareja4" name="optionsPareja" value=4 <?php if($information && $information["pareja"] == 4) { echo "checked"; }  ?>> 4. Severamente
									</label>
									<label class="btn btn-primary <?php if($information && $information["pareja"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsPareja5" name="optionsPareja" value=5 <?php if($information && $information["pareja"] == 5) { echo "checked"; }  ?>> 5. Extremadamente
									</label>
									
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row" align="center">
									<div style="width:80%;" align="center">						
										<label>
										  <input type="hidden" id="pareja" name="pareja" value="<?php echo $information?$information["pareja"]:""; ?>">
										</label>
									</div>
								</div>
							</div>
						</div>
																	
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<a class="btn btn-default" href="<?php echo base_url() . 'paciente/form_6/' . $information["id_paciente"]; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
										<button type="button" id="btnSubmit" name="btnSubmit" class='btn btn-primary'>
												Continuar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
										</button>								
									</div>
								</div>
							</div>
						</div>
												
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								
								<div id="div_load" style="display:none">		
									<div class="progress progress-striped active">
										<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
											<span class="sr-only">45% completado</span>
										</div>
									</div>
								</div>
								<div id="div_error" style="display:none">			
									<div class="alert alert-danger"><span class="glyphicon glyphicon-remove" id="span_msj"> &nbsp;</span></div>
								</div>	
								
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>