<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_IX.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(VIX)</small>
					</div>
					
					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="90">
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
				
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=9 />

						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12" for="sesiones">Prefieres sesiones en persona, virtuales, o ambas? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="sesiones" name="sesiones" required="required">
									<option value="">Seleccione</option>
									<option value=1 <?php if($information["sesiones"] == 1) { echo "selected"; }  ?>>Solo en persona</option>
									<option value=2 <?php if($information["sesiones"] == 2) { echo "selected"; }  ?>>Solo virtual (online)</option>
									<option value=3 <?php if($information["sesiones"] == 3) { echo "selected"; }  ?>>Ambas</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12" for="caracteristica_idioma">En que idioma desea tener las sesiones? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<select class="form-control" id="caracteristica_idioma" name="caracteristica_idioma" required="required">
									<option value="">Seleccione</option>
									<option value=1 <?php if($information["caracteristica_idioma"] == 1) { echo "selected"; }  ?>>Solo español</option>
									<option value=2 <?php if($information["caracteristica_idioma"] == 2) { echo "selected"; }  ?>>Español o inglés</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12" for="presupuesto">Cuál es tu presupuesto para cada sesión? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="presupuesto" name="presupuesto" required="required">
									<option value="">Seleccione</option>
									<option value=1 <?php if($information["presupuesto"] == 1) { echo "selected"; }  ?>>Menos de $90.000</option>
									<option value=2 <?php if($information["presupuesto"] == 2) { echo "selected"; }  ?>>Menos de $130.000</option>
									<option value=3 <?php if($information["presupuesto"] == 3) { echo "selected"; }  ?>>Menos de $200.000</option>
									<option value=4 <?php if($information["presupuesto"] == 4) { echo "selected"; }  ?>>No importa el valor de la sesión</option>
								</select>
							</div>
						</div>

						
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<a class="btn btn-default" href="<?php echo base_url() . 'paciente/form_8/' . $information["id_paciente"]; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
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