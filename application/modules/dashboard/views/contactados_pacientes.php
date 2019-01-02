<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-random'></i> LISTA DE PACIENTES QUE CONTACTARON EL PSICÓLOGO</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				
				<div class="x_content">
				
					<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
						
						<?php if($information['photo']){ ?>
						<div class="profile_img">
							<div id="crop-avatar">
							<!-- Current avatar -->
								<img class="img-responsive avatar-view" src="<?php echo base_url($information['photo']); ?>" alt="Avatar" title="Cambiar foto">
							</div>
						</div>					
						<?php } ?>
						
						<h4><strong><?php echo $information['name']; ?></strong></h4>
					
						<ul class="list-unstyled user_data">

							<li>
								<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong><br> <?php echo $information['email']; ?>
							</li>
							
							<li>
								<i class="fa fa-phone user-profile-icon"></i> <strong>No. celular:</strong><br> <?php echo $information['movil']; ?>
							</li>
							
							<li>
								<i class="fa fa-map-marker user-profile-icon"></i> <strong>Dirección consultorio:</strong><br> <?php echo $information['direccion']; ?>
							</li>
							
							<li>
								<i class="fa fa-globe user-profile-icon"></i> <strong>Página web:</strong><br> <?php echo $information['pagina_web']; ?>
							</li>
						</ul>
						
					</div>
				
					<div class="col-md-9 col-sm-9 col-xs-12">
					
						<div class="table-responsive">
						
							<table id="dataTables" class="table table-striped jambo_table bulk_action dt-responsive nowrap" cellspacing="0" width="100%">

								<thead>
									<tr class="headings">
									<th class="column-title">Correo</th>
									<th class="column-title">No. Celular</th>
									<th class="column-title">Enlace</th>
									</tr>
								</thead>

								<tbody>
											
			<?php 
				if($infoContactados){
					foreach ($infoContactados as $data):
						echo "<tr>";
						echo "<td>" . $data['email_paciente'] . "</td>";
						echo "<td>" . $data['movil_paciente'] . "</td>";
						echo "<td class='text-center'>";
						echo "<a href='" . base_url("dashboard/ver_paciente/" . $data['id_paciente']) . "' class='btn btn-success btn-xs'><i class='fa fa-eye'></i> Ver </a>";
						echo "</td>";
						echo "</tr>";
					endforeach;
				}
			?>

								</tbody>
							</table>
						</div>
											
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tables -->
<script>
$(document).ready(function() {
    $('#dataTables').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
		"searching": false		
    } );
} );
</script>