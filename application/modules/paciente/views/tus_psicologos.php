<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> Encontrar mi psicólogo</h2>
					<div class="clearfix"></div>
				</div>
				
				<div class="x_content">
				
					<div class="col-md-12 col-sm-12 col-xs-12">

						<div class="alert alert-success alert-dismissible fade in" role="alert">
							<strong>Los 3 Psicólogos más adecuados para ti son:</strong>
						</div>
					</div>

					<div class="clearfix"></div>

			<?php 
				if($infoPsicologos){
					foreach ($infoPsicologos as $data):
			?>
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
						<div class="well profile_view">
							<div class="col-sm-12">
								<div class="left col-xs-7">
									<h2><?php echo $data['name']; ?></h2>
									<p><strong>Por qué quiero ayudarte? </strong> <?php echo $data['ayudarte']; ?> </p>
								</div>
								<div class="right col-xs-5 text-center">
			<?php 
				if($data['photo']){ 
					$rutaImagen = base_url($data['photo']);
				}else{
					$rutaImagen = base_url('images/user.png');
				}
			?>
									<img src="<?php echo $rutaImagen; ?>" alt="" class="img-circle img-responsive">
								</div>
							</div>
							<div class="col-xs-12 bottom text-center">
								<div class="col-xs-12 col-sm-12 emphasis">
									<button type="button" class="btn btn-success btn-xs"> 
										<i class="fa fa-comments-o"></i> Contactar
									</button>

									
<a class="btn btn-xs btn-primary" href="<?php echo base_url() . 'paciente/infoPsicologo/' . $data['id_user'] . '/' . $idPaciente; ?>"><span class="fa fa-user" aria-hidden="true"></span> Ver Perfil </a>
									
									
								</div>
							</div>
						</div>
					</div>
			
			<?
					endforeach;
				}else{
			?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<strong>No hay Psicólogos que cumplan con tus requerimientos.</strong>
						</div>
			<?php	
				}
			?>
					


					

				</div>
			</div>
		</div>
	</div>
</div>