<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-share-alt'></i> ALGORITMO</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				
<?php
	switch ($information['edad_paciente']) {
		case 1:
			$edad = '18-25';
			break;
		case 2:
			$edad = '26-30';
			break;
		case 3:
			$edad = '31-35';
			break;
		case 4:
			$edad = '36-45';
			break;
		case 5:
			$edad = '45-55';
			break;
		case 6:
			$edad = 'Mayor de 55';
			break;
	}
	
	switch ($information['genero']) {
		case 1:
			$genero = 'Hombre';
			break;
		case 2:
			$genero = 'Mujer';
			break;
	}
	
?>
				
				<div class="x_content">
				
					<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
										
						<ul class="list-unstyled user_data">

							<li>
								<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong><br> <?php echo $information['email_paciente']; ?>
							</li>
							
							<li>
								<i class="fa fa-phone user-profile-icon"></i> <strong>No. celular:</strong><br> <?php echo $information['movil_paciente']; ?>
							</li>
							
							<li>
								<i class="fa fa-birthday-cake user-profile-icon"></i> <strong>Rango de edad:</strong><br> <?php echo $edad; ?>
							</li>
							
							<li>
								<i class="fa fa-user user-profile-icon"></i> <strong>Género:</strong><br> <?php echo $genero; ?>
							</li>
							
							<li>
								<i class="fa fa-user user-profile-icon"></i> <strong>Razón:</strong><br> <?php echo $information['razon']; ?>
							</li>
							
						</ul>
						
					</div>
				
					<div class="col-md-9 col-sm-9 col-xs-12">
					
						<div class="table-responsive">
						
							<table id="dataTables" class="table table-striped jambo_table bulk_action dt-responsive nowrap" cellspacing="0" width="100%">

								<thead>
									<tr class="headings">
									<th class="column-title">Psicólogo </th>
									<th class="column-title">Puntaje Técnico</th>
									<th class="column-title">Puntaje Individual</th>
									<th class="column-title">Puntaje General</th>
									</tr>
								</thead>

								<tbody>
											
			<?php 
				if($infoAlgoritmo){
					foreach ($infoAlgoritmo as $data):
						echo "<tr>";
						echo "<td>" . $data['name'] . "</td>";
						echo "<td class='text-center'>" . $data['puntaje_tecnico'] . "</td>";
						echo "<td class='text-center'>" . $data['puntaje_individual'] . "</td>";
						echo "<td class='text-center'>" . $data['puntaje_general'] . "</td>";
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