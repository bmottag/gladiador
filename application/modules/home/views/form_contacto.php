<script type="text/javascript" src="<?php echo base_url("assets/js/validate/general/contacto.js"); ?>"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">

				<div class="x_content">

					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Diligenciar todos los campos del formulario de Contacto</strong>
					</div>

<?php
$retornoExito = $this->session->flashdata('retornoExito');
if ($retornoExito) {
    ?>
	<div class="alert alert-success alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		<strong>Ok!</strong> <?php echo $retornoExito ?>	
	</div>
    <?php
}

$retornoError = $this->session->flashdata('retornoError');
if ($retornoError) {
    ?>
	<div class="alert alert-danger alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		<strong>Error!</strong> <?php echo $retornoError ?>
	</div>	
    <?php
}
?> 

					
					<form id="form" data-parsley-validate class="form-horizontal form-label-left">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_user"]:""; ?>"/>

						<div class="form-group">
							<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" type="text" value="<?php echo $information?$information[0]["email"]:""; ?>" maxlength=50 placeholder="Nombre">
								<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="celular" class="control-label col-md-3 col-sm-3 col-xs-12">Número de contacto <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="celular" name="celular" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" type="text" value="<?php echo $information?$information["movil"]:""; ?>" maxlength=12 placeholder="Número de contacto">
								<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
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
							<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Mensaje <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="mensaje" name="mensaje" placeholder="Mensaje"  class="form-control" rows="3"></textarea>
							</div>
						</div>
																							
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<button type="button" id="btnSubmit" name="btnSubmit" class='btn btn-success'>
												Enviar <span class="glyphicon glyphicon-share-alt" aria-hidden="true">
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