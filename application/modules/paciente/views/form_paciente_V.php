<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_V.js"); ?>"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> Cuestionario Paciente</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Info:</strong> Cuestionario para perfilar al paciente de acuerdo a las respuestas que da. <small>(V)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="40">
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=5 />

						<strong>¿Qué tan afectado(a) te has sentido por tu salud física? (hábitos alimenticios, enfermedades, condiciones físicas, niveles de energía)</strong> 
						<br><small>
							<ol>
								<li> Levemente: Mi salud y bienestar físico no son un problema para mí. </li>
								<li> Moderadamente: Tengo algunos inconvenientes que afectan mi salud física, pero son controlables y los puedo resolver. </li>
								<li> Seriamente: Tengo inconvenientes considerables con mi salud física, debo esforzarme para controlarlos aunque no siempre lo logro. </li>
								<li> Severamente: Tengo inconvenientes graves con mi salud física. Considero que estos inconvenientes no los puedo controlar y me afectan emocionalmente. </li>
								<li> Extremadamente: Tengo inconvenientes extremos con mi salud física. Estos inconvenientes no son controlables, amenazan mi supervivencia física y me afecta emocionalmente en forma extrema.</li>
							</ol>
						</small>
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div id="gender" class="btn-group" data-toggle="buttons">
									<label class="btn btn-default <?php if($information && $information["salud"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="salud1" name="salud" value=1 <?php if($information && $information["salud"] == 1) { echo "checked"; }  ?>> 1. Levemente
									</label>
									<label class="btn btn-default <?php if($information && $information["salud"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="salud1" name="salud" value=2 <?php if($information && $information["salud"] == 2) { echo "checked"; }  ?>> 2. Moderadamente
									</label>
									<label class="btn btn-default <?php if($information && $information["salud"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="salud1" name="salud" value=3 <?php if($information && $information["salud"] == 3) { echo "checked"; }  ?>> 3. Seriamente
									</label>
									<label class="btn btn-default <?php if($information && $information["salud"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="salud1" name="salud" value=4 <?php if($information && $information["salud"] == 4) { echo "checked"; }  ?>> 4. Severamente
									</label>
									<label class="btn btn-default <?php if($information && $information["salud"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="salud1" name="salud" value=5 <?php if($information && $information["salud"] == 5) { echo "checked"; }  ?>> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						

																	
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<button type="button" id="btnSubmit" name="btnSubmit" class='btn btn-success'>
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