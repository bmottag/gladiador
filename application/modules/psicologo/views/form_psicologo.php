		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<figure><img src="<?php echo base_url("estilos_formularios/img/registration_bg.svg"); ?>" alt=""></figure>
						<h2>Registro</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-lg-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form name="example-1" id="wrapped" method="POST">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>Cuestionario Psicólogos</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="firstname" class="form-control required" placeholder="Nombres">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="lastname" class="form-control required" placeholder="Apellidos">
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" name="email" class="form-control required" placeholder="Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="telephone" id="telephone" class="form-control required" placeholder="Número de contacto">
											</div>
										</div>
									</div>
									<!-- /row -->
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="styled-select">
													<select class="required" name="edad">
														<option value="" selected>En cuál rango de edad te encuentras?</option>
														<option value="1">23-27</option>
														<option value="2">28-35</option>
														<option value="3">36-45</option>
														<option value="4">45-55</option>
														<option value="5">Mayor de 55</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<!-- /row -->

								</div>
								<!-- /step-->

								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>Por qué quiero ayudarte?</h3>Respuesta personal sobre por qué quieren ayudar a las personas (no sobre formación, capacitación, experiencia)
									<div class="form-group">
										<textarea name="ayudarte" class="form-control" style="height:80px;" placeholder=""></textarea>
									</div>
									
									<h3 class="main_question">Formación</h3>Universidad - nivel de educación - Matrícula profesional (títulos)
									<div class="form-group">
										<textarea name="formacion" class="form-control" style="height:80px;" placeholder=""></textarea>
									</div>
								</div>
								<!-- /step-->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Cuántos años de experiencia en consulta tienes?</h3>
									<div class="form-group">
										<textarea name="annios_experiencia" class="form-control" style="height:150px;" placeholder=""></textarea>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Atrás </button>
								<button type="button" name="forward" class="forward">Siguiente</button>
								<button type="submit" name="process" class="submit">Enviar</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->