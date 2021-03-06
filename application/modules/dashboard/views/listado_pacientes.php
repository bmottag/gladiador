<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> LISTADO DE PACIENTES </h2>
					
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>

					</ul>
					<div class="clearfix"></div>
				</div>

				<div class="x_content">
					
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
				
					<div class="table-responsive">
					
						<table id="datatable" class="table table-striped jambo_table bulk_action">

							<thead>
								<tr class="headings">
								<th class="column-title">Nombre</th>
								<th class="column-title">Correo</th>
								<th class="column-title">Celular</th>
								<th class="column-title">Fecha registro</th>
								<th class="column-title">Enlaces</th>
								</tr>
							</thead>

							<tbody>
										
		<?php 
			if($information){
				foreach ($information as $data):
					echo "<tr>";
					echo "<td>" . $data['nombre_paciente'] . "</td>";
					echo "<td>" . $data['email_paciente'] . "</td>";
					echo "<td>" . $data['movil_paciente'] . "</td>";
					
					echo "<td class='text-center'>";
					echo date('j-m-Y', strtotime($data['fecha_registro']));
					echo "</td>";
					
					echo "<td class='text-center'>";
					echo "<a href='" . base_url("dashboard/ver_paciente/" . $data['id_paciente']) . "' class='btn btn-success btn-xs'><i class='fa fa-eye'></i> Ver </a>";
					echo "<a href='" . base_url("dashboard/match/" . $data['id_paciente']) . "' class='btn btn-danger btn-xs'><i class='fa fa-share-alt'></i> Match </a>";
					echo "<a href='" . base_url("dashboard/contactados/" . $data['id_paciente']) . "' class='btn btn-warning btn-xs'><i class='fa fa-random'></i> Psicólogos contactados </a>";
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