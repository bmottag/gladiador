<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_V.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(V)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="50">
							
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=5 />

						<strong>¿Qué tan afectado(a) te has sentido por tu salud física? (hábitos alimenticios, enfermedades, condiciones físicas, niveles de energía)</strong> 

<!-- Button trigger modal -->
<button type="button" id="btnDescripcion" name="btnDescripcion" class="btn btn-dark btn-xs">
  Ver descripción
</button>
<input type="hidden" id="descripcion" name="descripcion" value=1 />

						<div class="form-group" id="div_descripcion" style="display: none">
							<div class="col-sm-12">
							<ol>
								<li> Levemente: Mi salud y bienestar físico no son un problema para mí. </li>
								<li> Moderadamente: Tengo algunos inconvenientes que afectan mi salud física, pero son controlables y los puedo resolver. </li>
								<li> Seriamente: Tengo inconvenientes considerables con mi salud física, debo esforzarme para controlarlos aunque no siempre lo logro. </li>
								<li> Severamente: Tengo inconvenientes graves con mi salud física. Considero que estos inconvenientes no los puedo controlar y me afectan emocionalmente. </li>
								<li> Extremadamente: Tengo inconvenientes extremos con mi salud física. Estos inconvenientes no son controlables, amenazan mi supervivencia física y me afecta emocionalmente en forma extrema.</li>
							</ol>
							</div>
						</div>

<br><br>
				
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row" align="center">
									<div style="width:90%;" align="center">
								
									<label class="btn btn-primary <?php if($information && $information["salud"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsSalud1" name="optionsSalud" value=1 <?php if($information && $information["salud"] == 1) { echo "checked"; }  ?>> 1. Levemente
									</label>
									<label class="btn btn-primary <?php if($information && $information["salud"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsSalud2" name="optionsSalud" value=2 <?php if($information && $information["salud"] == 2) { echo "checked"; }  ?>> 2. Moderadamente
									</label>
									<label class="btn btn-primary <?php if($information && $information["salud"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsSalud3" name="optionsSalud" value=3 <?php if($information && $information["salud"] == 3) { echo "checked"; }  ?>> 3. Seriamente
									</label>
									<label class="btn btn-primary <?php if($information && $information["salud"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsSalud4" name="optionsSalud" value=4 <?php if($information && $information["salud"] == 4) { echo "checked"; }  ?>> 4. Severamente
									</label>
									<label class="btn btn-primary <?php if($information && $information["salud"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsSalud5" name="optionsSalud" value=5 <?php if($information && $information["salud"] == 5) { echo "checked"; }  ?>> 5. Extremadamente
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
										  <input type="hidden" id="salud" name="salud" value="<?php echo $information?$information["salud"]:""; ?>">
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
										<a class="btn btn-default" href="<?php echo base_url() . 'paciente/form_4/' . $information["id_paciente"]; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
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