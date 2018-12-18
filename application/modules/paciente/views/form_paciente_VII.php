<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_VII.js"); ?>"></script>

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
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=7 />

						<strong>¿Qué tan afectado(a) te has sentido en cuanto a tu relación de pareja?</strong> 
						<br><small>
							<ol>
								<li> Levemente: Mi relación de pareja no es un problema o no aplica para mí.</li>
								<li> Moderadamente: Ocasionalmente tengo problemas con mi pareja pero los podemos resolver entre nosotros a través de buena comunicación.</li>
								<li> Seriamente: Tengo problemas considerables con mi pareja. Intentamos pero nos cuesta poder resolver los problemas entre nosotros. </li>
								<li> Severamente: Tengo problemas graves con mi pareja. No podemos resolver los problemas entre nosotros debido a la mala comunicación o falta de interés en resolver los problemas. </li>
								<li> Extremadamente: Tengo problemas extremos y constantes con mi pareja. Cualquier intento de comunicar y solucionar los problemas agrava más la situación.</li>
							</ol>
						</small>
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div id="gender" class="btn-group" data-toggle="buttons">
									<label class="btn btn-default <?php if($information && $information["pareja"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="pareja1" name="pareja" value=1 <?php if($information && $information["pareja"] == 1) { echo "checked"; }  ?>> 1. Levemente
									</label>
									<label class="btn btn-default <?php if($information && $information["pareja"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="pareja1" name="pareja" value=2 <?php if($information && $information["pareja"] == 2) { echo "checked"; }  ?>> 2. Moderadamente
									</label>
									<label class="btn btn-default <?php if($information && $information["pareja"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="pareja1" name="pareja" value=3 <?php if($information && $information["pareja"] == 3) { echo "checked"; }  ?>> 3. Seriamente
									</label>
									<label class="btn btn-default <?php if($information && $information["pareja"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="pareja1" name="pareja" value=4 <?php if($information && $information["pareja"] == 4) { echo "checked"; }  ?>> 4. Severamente
									</label>
									<label class="btn btn-default <?php if($information && $information["pareja"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="pareja1" name="pareja" value=5 <?php if($information && $information["pareja"] == 5) { echo "checked"; }  ?>> 5. Extremadamente
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