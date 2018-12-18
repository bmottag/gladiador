<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_I.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(I)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="10">
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=1 />
						
						<div class="form-group">
							<label for="celular" class="control-label col-md-3 col-sm-3 col-xs-12">Ingresa tu número de contacto <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="celular" name="celular" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" type="text" value="<?php echo $information?$information["movil_paciente"]:""; ?>" maxlength=12 placeholder="Número de contacto">
								<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="razon">¿Cuál es la razón por la que decides buscar apoyo? <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="razon" name="razon" placeholder="¿Cuál es la razón por la que decides buscar apoyo?" class="form-control" rows="3" required="required"><?php echo $information?$information["razon"]:""; ?></textarea>
							</div>
						</div>
												
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Eres...</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div id="gender" class="btn-group" data-toggle="buttons">
									<label class="btn btn-default <?php if($information && $information["genero"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="genero1" name="genero" value=1 <?php if($information && $information["genero"] == 1) { echo "checked"; }  ?>> &nbsp; Hombre &nbsp;
									</label>
									<label class="btn btn-primary <?php if($information && $information["genero"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="genero1" name="genero" value=2 <?php if($information && $information["genero"] == 2) { echo "checked"; }  ?>> Mujer
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">En cuál rango de edad te encuentras? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="edad" name="edad" required="required">
									<option value="">Seleccione</option>
									<option value=1 <?php if($information["edad_paciente"] == 1) { echo "selected"; }  ?>>18-25</option>
									<option value=2 <?php if($information["edad_paciente"] == 2) { echo "selected"; }  ?>>26-30</option>
									<option value=3 <?php if($information["edad_paciente"] == 3) { echo "selected"; }  ?>>31-35</option>
									<option value=4 <?php if($information["edad_paciente"] == 4) { echo "selected"; }  ?>>36-45</option>
									<option value=4 <?php if($information["edad_paciente"] == 5) { echo "selected"; }  ?>>46-55</option>
									<option value=5 <?php if($information["edad_paciente"] == 6) { echo "selected"; }  ?>>Mayor de 55</option>
								</select>
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