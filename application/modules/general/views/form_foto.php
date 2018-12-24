<script type="text/javascript" src="<?php echo base_url("assets/js/validate/general/password.js"); ?>"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-file-image-o fa-fw'></i>FOTO </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
				
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Info:</strong> Subir su foto de perfil
					</div>
				

					<form  name="form" id="form" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url("general/do_upload"); ?>">
						<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_user"]:""; ?>"/>
						<input type="hidden" id="hddUser" name="hddUser" value="<?php echo $information[0]["log_user"]; ?>"/>
				
						<?php if($error){ ?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<?php 
								echo "<strong>Error :</strong>";
								pr($error); 
							?><!--$ERROR MUESTRA LOS ERRORES QUE PUEDAN HABER AL SUBIR LA IMAGEN-->
						</div>
						<?php } ?>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Foto: <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<input type="file" name="userfile" capture="camera" accept="image/*">
							</div>
							
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="alert alert-danger">
									<strong>Formato permitido:</strong> jpg - png<br>
									<strong>Peso máximo:</strong> 3000 KB<br>						
									<strong>Ancho máximo:</strong> 3200 pixeles<br>
									<strong>Altura máxima:</strong> 2400 pixeles
								</div>
							</div>
						</div>
												
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<div class="row" align="center">
									<div style="width:50%;" align="center">
										<button type="submit" id="btnSubmit" name="btnSubmit" class='btn btn-success'>
												Guardar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
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