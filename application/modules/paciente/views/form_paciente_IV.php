<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_IV.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(IV)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="40">
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=4 />

						<strong>¿Cómo ha sido tu consumo de sustancias (alcohol/drogas) durante el último mes?</strong> 
						<br><small>
							<ol>
								<li> Insignificante: Mi consumo es infrecuente (0-2 veces al mes) y las cantidades consumidas son insignificantes.</li>
								<li> Esporádico: Mi consumo es periódico (2-4 veces al mes) y las cantidades consumidas están bajo mi control. </li>
								<li> Repetitivo: Mi consumo es recurrente (1-3 veces por semana) y no siempre logro controlar las cantidades que consumo, lo cual puede llegar a afectar mi calidad de vida. </li>
								<li> Habitual: Mi consumo es habitual (más de 3 veces por semana) y no logro controlar la cantidad que consumo. Mi calidad de vida se ve afectada negativamente. </li>
								<li> Adictivo: Mi consumo es necesario, incontrolable y evidente. Esto impacta gravemente mi calidad de vida.</li>
							</ol>
						</small>
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div id="gender" class="btn-group" data-toggle="buttons">
									<label class="btn btn-default <?php if($information && $information["sustancias"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="sustancias1" name="sustancias" value=1 <?php if($information && $information["sustancias"] == 1) { echo "checked"; }  ?>> 1. Insignificante
									</label>
									<label class="btn btn-default <?php if($information && $information["sustancias"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="sustancias1" name="sustancias" value=2 <?php if($information && $information["sustancias"] == 2) { echo "checked"; }  ?>> 2. Esporádico
									</label>
									<label class="btn btn-default <?php if($information && $information["sustancias"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="sustancias1" name="sustancias" value=3 <?php if($information && $information["sustancias"] == 3) { echo "checked"; }  ?>> 3. Repetitivo
									</label>
									<label class="btn btn-default <?php if($information && $information["sustancias"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="sustancias1" name="sustancias" value=4 <?php if($information && $information["sustancias"] == 4) { echo "checked"; }  ?>> 4. Habitual
									</label>
									<label class="btn btn-default <?php if($information && $information["sustancias"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="sustancias1" name="sustancias" value=5 <?php if($information && $information["sustancias"] == 5) { echo "checked"; }  ?>> 5. Adictivo
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