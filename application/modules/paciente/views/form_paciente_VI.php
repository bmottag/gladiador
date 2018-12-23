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
						
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  !
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
							<ol>
								<li> Sana: Me acepto incondicionalmente sin importar las circunstancias. Sé que mi valor intrínseco no depende de la situación externa. </li>
								<li> Estable: Sé que tengo fortalezas y debilidades. No busco ser perfecto(a) y trato de no juzgar mis errores. No necesito la aprobación externa para sentirme tranquilo(a). </li>
								<li> Condicional: Acepto mis fortalezas pero trato en lo posible de ocultar mis debilidades. Estoy orgulloso de mis fortalezas pero juzgo mis errores y los de los demás. La aprobación externa es importante para mí. </li>
								<li> Inestable: No acepto mis errores e imperfecciones. Mi comportamiento es defensivo la mayoría del tiempo. La aprobación externa es necesaria para sentirme bien. </li>
								<li> Baja: Me siento avergonzado(a) de mí. Creo que no soy suficiente y me juzgo constantemente. Mi comportamiento es retraido y aislado.</li>
							</ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<br><br>
				
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row" align="center">
									<div style="width:80%;" align="center">
									
									<label class="btn btn-primary <?php if($information && $information["autoestima"] == 1) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsAutoestima1" name="optionsAutoestima" value=1 <?php if($information && $information["autoestima"] == 1) { echo "checked"; }  ?>> 1. Sana
									</label>
									<label class="btn btn-primary <?php if($information && $information["autoestima"] == 2) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsAutoestima2" name="optionsAutoestima" value=2 <?php if($information && $information["autoestima"] == 2) { echo "checked"; }  ?>> 2. Estable
									</label>
									<label class="btn btn-primary <?php if($information && $information["autoestima"] == 3) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsAutoestima3" name="optionsAutoestima" value=3 <?php if($information && $information["autoestima"] == 3) { echo "checked"; }  ?>> 3. Condicional
									</label>
									<label class="btn btn-primary <?php if($information && $information["autoestima"] == 4) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsAutoestima4" name="optionsAutoestima" value=4 <?php if($information && $information["autoestima"] == 4) { echo "checked"; }  ?>> 4. Inestable
									</label>
									<label class="btn btn-primary <?php if($information && $information["autoestima"] == 5) { echo "active"; }  ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										<input type="radio" id="optionsAutoestima5" name="optionsAutoestima" value=5 <?php if($information && $information["autoestima"] == 5) { echo "checked"; }  ?>> 5. Baja
									</label>
									
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row" align="center">
									<div style="width:80%;" align="center">						
										<label>
										  <input type="hidden" id="autoestima" name="autoestima" value="<?php echo $information?$information["autoestima"]:""; ?>">
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
										<a class="btn btn-default" href="<?php echo base_url() . 'paciente/form_5/' . $information["id_paciente"]; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
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