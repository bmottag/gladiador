<script type="text/javascript" src="<?php echo base_url("assets/js/validate/psicologo/form_psicologo.js"); ?>"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> Registro</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Info:</strong> Cuestionario Psicólogos.
					</div>
				
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_user"]:""; ?>"/>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["first_name"]:""; ?>" maxlength=30 placeholder="Nombres">
								<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="apellidos" name="apellidos" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["last_name"]:""; ?>" maxlength=30 placeholder="Apellidos">
								<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="email" name="email" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" type="text" value="<?php echo $information?$information[0]["email"]:""; ?>" maxlength=50 placeholder="Email">
								<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="celular" class="control-label col-md-3 col-sm-3 col-xs-12">Número de contacto <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="celular" name="celular" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" type="text" value="<?php echo $information?$information[0]["movil"]:""; ?>" maxlength=12 placeholder="Número de contacto">
								<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">En cuál rango de edad te encuentras? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="edad" name="edad" required="required">
									<option value="">Seleccione</option>
									<option value="1">23-27</option>
									<option value="2">28-35</option>
									<option value="3">36-45</option>
									<option value="4">45-55</option>
									<option value="5">Mayor de 55</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayudarte">Por qué quiero ayudarte? <span class="required">*</span>
							<br><small>Respuesta personal sobre por qué quieren ayudar a las personas (no sobre formación, capacitación, experiencia)</small>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="ayudarte" name="ayudarte" placeholder="Por qué quiero ayudarte?" class="form-control" rows="3" required="required"><?php echo $information?$information[0]["description"]:""; ?></textarea>
							</div>
						</div>
												
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="formacion">Formación <span class="required">*</span>
							<br><small>Universidad - nivel de educación - Matrícula profesional (títulos)</small></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="formacion" name="formacion" placeholder="Formación" class="form-control" rows="3" required="required"><?php echo $information?$information[0]["description"]:""; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="experiencia">Cuántos años de experiencia en consulta tienes? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="experiencia" name="experiencia" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=5 placeholder="Cuántos años de experiencia en consulta tienes?">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pagina_web">Página web personal </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="pagina_web" name="pagina_web" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=5 placeholder="Página web personal">
								<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección de tu consultorio <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="direccion" name="direccion" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=5 placeholder="Dirección de tu consultorio">
								<span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tarifa">Cuál es tu tarifa por sesión? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="tarifa" name="tarifa" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=5 placeholder="Cuál es tu tarifa por sesión?">
								<span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Cuáles enfoques utilizas? <span class="required">*</span>
							<br><small>(mínimo 1, máximo 2) </small></label>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Cognitivo Conductual
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Psicoanálisis
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Sistémico
									</label>
								  </div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Transpersonal
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Humanista
									</label>
								  </div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Especialidades del psicólogo</strong> 
						<br>En una escala de 1 a 5, autocalificar su capacidad y experiencia frente a cada tema (7 temas). Hay un máximo de 25 puntos, por ende tienen que escoger cuáles dominan y cuáles no y distribuir los puntos de forma acorde.
					</div>
					
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Ansiedad</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsAnsiedad1" name="optionsAnsiedad"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsAnsiedad2" name="optionsAnsiedad"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsAnsiedad3" name="optionsAnsiedad"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsAnsiedad4" name="optionsAnsiedad"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsAnsiedad5" name="optionsAnsiedad"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Depresión</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Consumo de sustancias</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Salud y Bienestar Físico</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Autoestima</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Conflictos de Pareja</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Autolesión/Suicidio</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> 5
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="salud">Cómo manejas tu propia salud emocional para poder servirle a otros? <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="salud" name="salud" placeholder="Cómo manejas tu propia salud emocional para poder servirle a otros?"  class="form-control" rows="3" required="required"><?php echo $information?$information[0]["description"]:""; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="consultas">Ofreces consultas en persona, virtuales, o ambas? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="consultas1" name="consultas"> Ambas
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="consultas2" name="consultas"> Solo en persona
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="consultas3" name="consultas"> Solo virtual
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idioma">En qué idioma ofreces consultas? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="idioma1" name="idioma"> Solo español
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="idioma2" name="idioma"> Español o inglés
									</label>
								</div>
							</div>
						</div>						
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Por favor selecciona 6 valores que sean de alta importancia para ti, tanto en el ejercicio de tu profesión como en tu vida personal <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Autosuficiencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Bondad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Certidumbre
									</label>
								  </div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Compasión
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Confianza
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Coperación
									</label>
								  </div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Coraje
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Curiosidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Equidad
									</label>
								  </div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="horario">Cuáles son tus horarios de atención? <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="horario" name="horario" placeholder="Cuáles son tus horarios de atención?" class="form-control" rows="3" required="required"><?php echo $information?$information[0]["description"]:""; ?></textarea>
							</div>
						</div>
						
						
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<button type="button" id="btnSubmit" name="btnSubmit" class='btn btn-success'>
												Save <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
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