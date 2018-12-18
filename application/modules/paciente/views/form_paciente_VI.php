<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_paciente_VI.js"); ?>"></script>

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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong> <small>(VI)</small>
					</div>

					<div class="progress progress-striped progress_wide">
						<div class="progress-bar progress-bar-info" data-transitiongoal="60">
							<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong> <?php echo $information['email_paciente']; ?>
						</div>
					</div>
					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information["id_paciente"]:""; ?>"/>
						<input type="hidden" id="formulario" name="formulario" value=6 />

						<strong>¿En cuál nivel de autoestima consideras que estás?</strong> 
						<br><small>
							<ol>
								<li> Sana: Me acepto incondicionalmente sin importar las circunstancias. Sé que mi valor intrínseco no depende de la situación externa. </li>
								<li> Estable: Sé que tengo fortalezas y debilidades. No busco ser perfecto(a) y trato de no juzgar mis errores. No necesito la aprobación externa para sentirme tranquilo(a). </li>
								<li> Condicional: Acepto mis fortalezas pero trato en lo posible de ocultar mis debilidades. Estoy orgulloso de mis fortalezas pero juzgo mis errores y los de los demás. La aprobación externa es importante para mí. </li>
								<li> Inestable: No acepto mis errores e imperfecciones. Mi comportamiento es defensivo la mayoría del tiempo. La aprobación externa es necesaria para sentirme bien. </li>
								<li> Baja: Me siento avergonzado(a) de mí. Creo que no soy suficiente y me juzgo constantemente. Mi comportamiento es retraido y aislado.</li>
							</ol>
						</small>
												
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div id="gender" class="btn-group" data-toggle="buttons">
									<label class="btn btn-default <?php if($information && $information["autoestima"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="autoestima1" name="autoestima" value=1 <?php if($information && $information["autoestima"] == 1) { echo "checked"; }  ?>> 1. Sana
									</label>
									<label class="btn btn-default <?php if($information && $information["autoestima"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="autoestima1" name="autoestima" value=2 <?php if($information && $information["autoestima"] == 2) { echo "checked"; }  ?>> 2. Estable
									</label>
									<label class="btn btn-default <?php if($information && $information["autoestima"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="autoestima1" name="autoestima" value=3 <?php if($information && $information["autoestima"] == 3) { echo "checked"; }  ?>> 3. Condicional
									</label>
									<label class="btn btn-default <?php if($information && $information["autoestima"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="autoestima1" name="autoestima" value=4 <?php if($information && $information["autoestima"] == 4) { echo "checked"; }  ?>> 4. Inestable
									</label>
									<label class="btn btn-default <?php if($information && $information["autoestima"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="autoestima1" name="autoestima" value=5 <?php if($information && $information["autoestima"] == 5) { echo "checked"; }  ?>> 5. Baja
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