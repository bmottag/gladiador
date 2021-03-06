<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_VIII.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(VIII)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="80">
							
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=8 />

						<strong>Has pensado que hacerte daño físico o morir mejoraría algo?</strong> 
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsSuicidio1" name="optionsSuicidio" <?php if($information && $information["suicidio"] == 1) { echo "checked"; }  ?>> No he tenido estos pensamientos
									</label>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsSuicidio2" name="optionsSuicidio" <?php if($information && $information["suicidio"] == 2) { echo "checked"; }  ?>> He tenido este tipo de pensamientos infrecuentemente y no me tomo estos pensamientos en serio.
									</label>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsSuicidio3" name="optionsSuicidio" <?php if($information && $information["suicidio"] == 3) { echo "checked"; }  ?>> He tenido este tipo de pensamientos y me siento confundido de por qué estoy pensando de esta forma
									</label>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsSuicidio4" name="optionsSuicidio" <?php if($information && $information["suicidio"] == 4) { echo "checked"; }  ?>> He tenido este tipo de pensamientos frecuentemente y considero que hacerme daño físicamente es una alternativa real
									</label>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsSuicidio5" name="optionsSuicidio" <?php if($information && $information["suicidio"] == 5) { echo "checked"; }  ?>> Actualmente estoy pensando y/o planeando en hacerme daño.
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row" align="center">
									<div style="width:80%;" align="center">						
										<label>
										  <input type="hidden" id="suicidio" name="suicidio" value="<?php echo $information?$information["suicidio"]:""; ?>">
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
										<a class="btn btn-default" href="<?php echo base_url() . 'paciente/form_7/' . $information["id_paciente"]; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
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