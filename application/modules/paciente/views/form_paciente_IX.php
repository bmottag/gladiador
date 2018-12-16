<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_IX.js"); ?>"></script>

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
						<strong>Info:</strong> Cuestionario para perfilar al paciente de acuerdo a las respuestas que da. <small>(VIX)</small>
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="sesiones">Prefieres sesiones en persona, virtuales, o ambas? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="sesiones1" name="sesiones" <?php if($information && $information["sesiones"] == 1) { echo "checked"; }  ?>> Solo en persona
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="sesiones2" name="sesiones" <?php if($information && $information["sesiones"] == 2) { echo "checked"; }  ?>> Solo virtual (online)
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="sesiones3" name="sesiones" <?php if($information && $information["sesiones"] == 3) { echo "checked"; }  ?>> Ambas
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Prefieres un psicólogo con algunas características particulares? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="caracteristica_edad" value=1  name="caracteristica_edad" class="flat" <?php if($information && $information["caracteristica_edad"]){echo "checked";} ?>> Edad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="caracteristica_enfoque" value=1  name="caracteristica_enfoque" class="flat" <?php if($information && $information["caracteristica_enfoque"]){echo "checked";} ?>> Enfoque
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="caracteristica_idioma" value=1  name="caracteristica_idioma" class="flat" <?php if($information && $information["caracteristica_idioma"]){echo "checked";} ?>> Idioma
									</label>
								  </div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="presupuesto">Cuál es tu presupuesto para cada sesión? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="presupuesto1" name="presupuesto" <?php if($information && $information["presupuesto"] == 1) { echo "checked"; }  ?>> Menos de $90.000
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="presupuesto2" name="presupuesto" <?php if($information && $information["presupuesto"] == 2) { echo "checked"; }  ?>> Menos de $130.000
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="presupuesto3" name="presupuesto" <?php if($information && $information["presupuesto"] == 3) { echo "checked"; }  ?>> Menos de $200.000
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="presupuesto4" name="presupuesto" <?php if($information && $information["presupuesto"] == 4) { echo "checked"; }  ?>> No importa el valor de la sesión
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