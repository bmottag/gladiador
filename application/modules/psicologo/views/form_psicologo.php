<script type="text/javascript" src="<?php echo base_url("assets/js/validate/psicologo/form_psicologo.js"); ?>"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> Registrate como psicólogo asociado de TuApoyo</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong> Cuestionario Psicólogos TuApoyo</strong>
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
									<option value=1>23-27</option>
									<option value=2>28-35</option>
									<option value=3>36-45</option>
									<option value=4>45-55</option>
									<option value=5>Mayor de 55</option>
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
								<input type="text" id="experiencia" name="experiencia" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=100 placeholder="Cuántos años de experiencia en consulta tienes?">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pagina_web">Página web personal </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="pagina_web" name="pagina_web" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=100 placeholder="Página web personal">
								<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección de tu consultorio <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="direccion" name="direccion" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo $information?$information[0]["hora_contrato_cad"]:""; ?>" maxlength=100 placeholder="Dirección de tu consultorio">
								<span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
												
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tarifa">Cuál es tu tarifa por sesión? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="tarifa" name="tarifa" required="required">
									<option value="">Seleccione</option>
									<option value=1>Menos de $90.000</option>
									<option value=2>Menos de $130.000</option>
									<option value=3>Menos de $200.000</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Cuáles enfoques utilizas? <span class="required">*</span>
							<br><small>(mínimo 1, máximo 2) </small></label>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="cognitivo" name="cognitivo" value=1 class="flat"> Cognitivo Conductual
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="psicoanalisis" name="psicoanalisis" value=1 class="flat"> Psicoanálisis
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="sistemico" name="sistemico" value=1 class="flat"> Sistémico
									</label>
								  </div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="transpersonal" name="transpersonal" value=1 class="flat"> Transpersonal
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="humanista" name="humanista" value=1 class="flat"> Humanista
									</label>
								  </div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="hddEnfoques" name="hddEnfoques" value=0 >
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
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5
									</label>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="ansiedad" name="ansiedad" >
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Depresión</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsDepresion1" name="optionsDepresion"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsDepresion2" name="optionsDepresion"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsDepresion3" name="optionsDepresion"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsDepresion4" name="optionsDepresion"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsDepresion5" name="optionsDepresion"> 5
									</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="depresion" name="depresion" >
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Consumo de sustancias</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsSustancias1" name="optionsSustancias"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsSustancias2" name="optionsSustancias"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsSustancias3" name="optionsSustancias"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsSustancias4" name="optionsSustancias"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsSustancias5" name="optionsSustancias"> 5
									</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="sustancias" name="sustancias" >
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Salud y Bienestar Físico</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsSalud1" name="optionsSalud"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsSalud2" name="optionsSalud"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsSalud3" name="optionsSalud"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsSalud4" name="optionsSalud"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsSalud5" name="optionsSalud"> 5
									</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="salud" name="salud" >
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Autoestima</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAutoestima1" name="optionsAutoestima"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAutoestima2" name="optionsAutoestima"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAutoestima3" name="optionsAutoestima"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAutoestima4" name="optionsAutoestima"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAutoestima5" name="optionsAutoestima"> 5
									</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="autoestima" name="autoestima" >
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Conflictos de Pareja</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsPareja1" name="optionsPareja"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsPareja2" name="optionsPareja"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsPareja3" name="optionsPareja"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsPareja4" name="optionsPareja"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsPareja5" name="optionsPareja"> 5
									</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="pareja" name="pareja" >
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Autolesión/Suicidio</label>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsSuicidio1" name="optionsSuicidio"> 1
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsSuicidio2" name="optionsSuicidio"> 2
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsSuicidio3" name="optionsSuicidio"> 3
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsSuicidio4" name="optionsSuicidio"> 4
									</label>
								</div>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsSuicidio5" name="optionsSuicidio"> 5
									</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="radio">
									<label>
									  <input type="hidden" id="suicidio" name="suicidio" >
									</label>
								</div>
							</div>
						</div>
																		
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="consultas">Ofreces consultas en persona, virtuales, o ambas? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="consultas" name="consultas" required="required">
									<option value="">Seleccione</option>
									<option value=1>Ambas</option>
									<option value=2>Solo en persona</option>
									<option value=3>Solo virtual</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idioma">En qué idioma ofreces consultas? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="idioma" name="idioma" required="required">
									<option value="">Seleccione</option>
									<option value=1>Solo español</option>
									<option value=2>Español o inglés</option>
								</select>
							</div>
						</div>
												
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Por favor selecciona 6 valores que sean de alta importancia para ti, tanto en el ejercicio de tu profesión como en tu vida personal <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="autosuficiencia" name="autosuficiencia" value=1 class="flat"> Autosuficiencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="bondad" name="bondad" value=1 class="flat"> Bondad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="certidumbre" name="certidumbre" value=1 class="flat"> Certidumbre
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="coherencia" name="coherencia" value=1 class="flat"> Coherencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="compasivo" name="compasivo" value=1 class="flat"> Compasivo
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="confianza" name="confianza" value=1 class="flat"> Confianza
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="coperacion" name="coperacion" value=1 class="flat"> Coperación
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="coraje" name="coraje" value=1 class="flat"> Coraje
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="curiosidad" name="curiosidad" value=1 class="flat"> Curiosidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="equidad" name="equidad" value=1 class="flat"> Equidad
									</label>
								  </div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="generosidad" name="generosidad" value=1 class="flat"> Generosidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="gratitud" name="gratitud" value=1 class="flat"> Gratitud
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="honestidad" name="honestidad" value=1 class="flat"> Honestidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="humildad" name="humildad" value=1 class="flat"> Humildad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="independencia" name="independencia" value=1 class="flat"> Independencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="lealtad" name="lealtad" value=1 class="flat"> Lealtad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="libertad" name="libertad" value=1 class="flat"> Libertad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="mente_abierta" name="mente_abierta" value=1 class="flat"> Mente abierta
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="moderacion" name="moderacion" value=1 class="flat"> Moderación
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="paciencia" name="paciencia" value=1 class="flat"> Paciencia
									</label>
								  </div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="persistencia" name="persistencia" value=1 class="flat"> Persistencia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="proactividad" name="proactividad" value=1 class="flat"> Proactividad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="proposito" name="proposito" value=1 class="flat"> Propósito
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="respeto" name="respeto" value=1 class="flat"> Respeto
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="responsabilidad" name="responsabilidad" value=1 class="flat"> Responsabilidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="servicio" name="servicio" value=1 class="flat"> Servicio
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="solidaridad" name="solidaridad" value=1 class="flat"> Solidaridad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="sostenibilidad" name="sostenibilidad" value=1 class="flat"> Sostenibilidad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="tolerancia" name="tolerancia" value=1 class="flat"> Tolerancia
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" id="unidad" name="unidad" value=1 class="flat"> Unidad
									</label>
								  </div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="valores">
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="hddValores" name="hddValores" value=0 >
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