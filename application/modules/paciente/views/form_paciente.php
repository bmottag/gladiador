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
						<strong>Info:</strong> Cuestionario para perfilar al paciente de acuerdo a las respuestas que da
					</div>
				
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_user"]:""; ?>"/>

						<div class="form-group">
							<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="email" name="email" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" type="text" value="<?php echo $information?$information[0]["email"]:""; ?>" maxlength=50 placeholder="Email">
								<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayudarte">¿Cuál es la razón por la que decides buscar apoyo? <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="ayudarte" name="ayudarte" placeholder="Por qué quiero ayudarte?" class="form-control" rows="3" required="required"><?php echo $information?$information[0]["description"]:""; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idioma">Eres... <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="idioma1" name="idioma"> Hombre
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="idioma2" name="idioma"> Mujer
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">En cuál rango de edad te encuentras? <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" id="edad" name="edad" required="required">
									<option value="">Seleccione</option>
									<option value=1>18-25</option>
									<option value=2>26-30</option>
									<option value=3>31-35</option>
									<option value=4>36-45</option>
									<option value=4>46-55</option>
									<option value=5>Mayor de 55</option>
								</select>
							</div>
						</div>
																		
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>¿Qué tan afectado(a) te has sentido por síntomas de ansiedad? (ataques de pánico, fobias, insomnio o pensamientos obsesivos)</strong> 
						<br>1. Levemente: Siento síntomas de ansiedad infrecuentes, insignificantes o inexistentes. 2. Moderadamente: Siento síntomas de ansiedad esporádicos, pasajeros y su intensidad no alcanza a afectar mis actividades ni mi conducta 3. Seriamente: Siento síntomas de ansiedad repetitivos y considerables. Debo esforzarme para que mis actividades y mi conducta no se vean afectadas. 4.Severamente: Siento síntomas de ansiedad frecuentes y graves. Pueden llegar a ser tan severos que mis actividades y mi conducta se ven afectadas. 5. Extremadamente: Siento síntomas de ansiedad que son abrumadores y paralizantes. Se me es muy difícil realizar actividades del día a día. Mis actividades y mi conducta se ven gravemente afectadas
					</div>
					
						<div class="form-group">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="optionsAnsiedad1" name="optionsAnsiedad"> 1. Levemente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="optionsAnsiedad2" name="optionsAnsiedad"> 2. Moderadamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="optionsAnsiedad3" name="optionsAnsiedad"> 3. Seriamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=4 id="optionsAnsiedad4" name="optionsAnsiedad"> 4. Severamente
									</label>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=5 id="optionsAnsiedad5" name="optionsAnsiedad"> 5. Extremadamente
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="consultas">Ofreces consultas en persona, virtuales, o ambas? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="consultas1" name="consultas"> No he tenido estos pensamientos
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="consultas2" name="consultas"> He tenido este tipo de pensamientos infrecuentemente y no me tomo estos pensamientos en serio.
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=3 id="consultas3" name="consultas"> He tenido este tipo de pensamientos y me siento confundido de por qué estoy pensando de esta forma
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="consultas1" name="consultas"> He tenido este tipo de pensamientos frecuentemente y considero que hacerme daño físicamente es una alternativa real
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="consultas1" name="consultas"> Actualmente estoy pensando y/o planeando en hacerme daño.
									</label>
								</div>								
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idioma">Prefieres sesiones en persona, virtuales, o ambas? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="radio">
									<label>
									  <input type="radio" value=1 id="idioma1" name="idioma"> Solo en persona
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="idioma2" name="idioma"> Solo virtual (online)
									</label>
								</div>
								<div class="radio">
									<label>
									  <input type="radio" value=2 id="idioma2" name="idioma"> Ambas
									</label>
								</div>
							</div>
						</div>						
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_contrato">Prefieres un psicólogo con algunas características particulares? <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-6">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Edad
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Enfoque
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat"> Idioma
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