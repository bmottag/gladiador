<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_X.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(X)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="100">
							
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=10 />

						<strong>Por favor selecciona 4 valores personales que para tu vida sean de gran importancia</strong> 

						<div class="form-group">
							<div class="col-md-4 col-sm-4 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="autosuficiencia" name="autosuficiencia" value=1 class="flat" <?php if($information && $information["autosuficiencia"] == 1) { echo "checked"; }  ?>> Autosuficiencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="bondad" name="bondad" value=1 class="flat" <?php if($information && $information["bondad"] == 1) { echo "checked"; }  ?>> Bondad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="certidumbre" name="certidumbre" value=1 class="flat" <?php if($information && $information["certidumbre"] == 1) { echo "checked"; }  ?>> Certidumbre
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="coherencia" name="coherencia" value=1 class="flat" <?php if($information && $information["coherencia"] == 1) { echo "checked"; }  ?>> Coherencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="compasivo" name="compasivo" value=1 class="flat" <?php if($information && $information["compasivo"] == 1) { echo "checked"; }  ?>> Compasivo
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="confianza" name="confianza" value=1 class="flat" <?php if($information && $information["confianza"] == 1) { echo "checked"; }  ?>> Confianza
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="coperacion" name="coperacion" value=1 class="flat" <?php if($information && $information["coperacion"] == 1) { echo "checked"; }  ?>> Coperación
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="coraje" name="coraje" value=1 class="flat" <?php if($information && $information["coraje"] == 1) { echo "checked"; }  ?>> Coraje
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="curiosidad" name="curiosidad" value=1 class="flat" <?php if($information && $information["curiosidad"] == 1) { echo "checked"; }  ?>> Curiosidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="equidad" name="equidad" value=1 class="flat" <?php if($information && $information["equidad"] == 1) { echo "checked"; }  ?>> Equidad
									</label>
								  </div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="generosidad" name="generosidad" value=1 class="flat" <?php if($information && $information["generosidad"] == 1) { echo "checked"; }  ?>> Generosidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="gratitud" name="gratitud" value=1 class="flat" <?php if($information && $information["gratitud"] == 1) { echo "checked"; }  ?>> Gratitud
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="honestidad" name="honestidad" value=1 class="flat" <?php if($information && $information["honestidad"] == 1) { echo "checked"; }  ?>> Honestidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="humildad" name="humildad" value=1 class="flat" <?php if($information && $information["humildad"] == 1) { echo "checked"; }  ?>> Humildad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="independencia" name="independencia" value=1 class="flat" <?php if($information && $information["independencia"] == 1) { echo "checked"; }  ?>> Independencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="lealtad" name="lealtad" value=1 class="flat" <?php if($information && $information["lealtad"] == 1) { echo "checked"; }  ?>> Lealtad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="libertad" name="libertad" value=1 class="flat" <?php if($information && $information["libertad"] == 1) { echo "checked"; }  ?>> Libertad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="mente_abierta" name="mente_abierta" value=1 class="flat" <?php if($information && $information["mente_abierta"] == 1) { echo "checked"; }  ?>> Mente abierta
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="moderacion" name="moderacion" value=1 class="flat" <?php if($information && $information["moderacion"] == 1) { echo "checked"; }  ?>> Moderación
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="paciencia" name="paciencia" value=1 class="flat" <?php if($information && $information["paciencia"] == 1) { echo "checked"; }  ?>> Paciencia
									</label>
								  </div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="persistencia" name="persistencia" value=1 class="flat" <?php if($information && $information["persistencia"] == 1) { echo "checked"; }  ?>> Persistencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="proactividad" name="proactividad" value=1 class="flat" <?php if($information && $information["proactividad"] == 1) { echo "checked"; }  ?>> Proactividad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="proposito" name="proposito" value=1 class="flat" <?php if($information && $information["proposito"] == 1) { echo "checked"; }  ?>> Propósito
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="respeto" name="respeto" value=1 class="flat" <?php if($information && $information["respeto"] == 1) { echo "checked"; }  ?>> Respeto
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="responsabilidad" name="responsabilidad" value=1 class="flat" <?php if($information && $information["responsabilidad"] == 1) { echo "checked"; }  ?>> Responsabilidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="servicio" name="servicio" value=1 class="flat" <?php if($information && $information["servicio"] == 1) { echo "checked"; }  ?>> Servicio
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="solidaridad" name="solidaridad" value=1 class="flat" <?php if($information && $information["solidaridad"] == 1) { echo "checked"; }  ?>> Solidaridad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="sostenibilidad" name="sostenibilidad" value=1 class="flat" <?php if($information && $information["sostenibilidad"] == 1) { echo "checked"; }  ?>> Sostenibilidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="tolerancia" name="tolerancia" value=1 class="flat" <?php if($information && $information["tolerancia"] == 1) { echo "checked"; }  ?>> Tolerancia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="unidad" name="unidad" value=1 class="flat" <?php if($information && $information["unidad"] == 1) { echo "checked"; }  ?>> Unidad
									</label>
								  </div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="hddValores" name="hddValores" >
							</div>
						</div>
						
																	
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<a class="btn btn-default" href="<?php echo base_url() . 'paciente/form_9/' . $information["id_paciente"]; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
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