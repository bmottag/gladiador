<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_II.js"); ?>"></script>

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
						<strong>Info:</strong> Cuestionario para perfilar al paciente de acuerdo a las respuestas que da. <small>(II)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="20">
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=2 />

						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br><small>
							<ol>
								<li> Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes.</li>
								<li> Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta.</li> 
								<li> Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. </li>
								<li> Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. </li>
								<li> Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas.</li>
							</ol>
						</small>
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div id="gender" class="btn-group" data-toggle="buttons">
									<label class="btn btn-default <?php if($information && $information["ansiedad"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="ansiedad1" name="ansiedad" value=1 <?php if($information && $information["ansiedad"] == 1) { echo "checked"; }  ?>> 1. Levemente
									</label>
									<label class="btn btn-default <?php if($information && $information["ansiedad"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="ansiedad1" name="ansiedad" value=2 <?php if($information && $information["ansiedad"] == 2) { echo "checked"; }  ?>> 2. Moderadamente
									</label>
									<label class="btn btn-default <?php if($information && $information["ansiedad"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="ansiedad1" name="ansiedad" value=3 <?php if($information && $information["ansiedad"] == 3) { echo "checked"; }  ?>> 3. Seriamente
									</label>
									<label class="btn btn-default <?php if($information && $information["ansiedad"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="ansiedad1" name="ansiedad" value=4 <?php if($information && $information["ansiedad"] == 4) { echo "checked"; }  ?>> 4. Severamente
									</label>
									<label class="btn btn-default <?php if($information && $information["ansiedad"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="ansiedad1" name="ansiedad" value=5 <?php if($information && $information["ansiedad"] == 5) { echo "checked"; }  ?>> 5. Extremadamente
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