<script type="text/javascript" src="<?php echo base_url("assets/js/validate/paciente/form_registro.js"); ?>"></script>

<script>
   $(document).ready(function()
   {
      $("#mostrarmodal").modal("show");
   });
</script>


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
						<strong>Completa el cuestionario TuApoyo y encuentra el mejor psicólogo para ti</strong>
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
																													
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
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


   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Encontrar mi psicólogo - TuApoyo</h3>
           </div>
           <div class="modal-body">
              <h4>Hola!</h4>
              Si estás acá es porque deseas cambiar o mejorar algún aspecto de tu vida, lo cual es una
decisión que requiere coraje. Por parte de TuApoyo, agradecemos tu iniciativa.
<p>Consejo: Entre más honestidad y sinceridad utilices para responder el cuestionario, habrá mayor
certeza de cuáles son los psicólogos adecuados para ti. Ten la tranquilidad que toda tu información
es confidencial y privada.  </p>
       </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-primary">Comenzar ya!</a>
           </div>
      </div>
   </div>
   </div>