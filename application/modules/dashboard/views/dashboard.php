<script type="text/javascript" src="<?php echo base_url("assets/js/validate/solicitud/solicitud.js"); ?>"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-list'></i> LISTADO DE PSICOLOGOS
					</h2> 
					
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
						<table id="dataTables" class="table table-striped jambo_table bulk_action dt-responsive nowrap" cellspacing="0" width="100%">

							<thead>
								<tr class="headings">
									<th class="column-title" style="width: 12%"><small>Nombre</small></th>
									<th class="column-title" style="width: 8%"><small>Correo</small></th>
									<th class="column-title" style="width: 8%"><small>Celular</small></th>
									<th class="column-title" style="width: 1%"><small>ID</small></th>
								</tr>
							</thead>

							<tbody>
										
		<?php
			if($information){
				foreach ($information as $data):
					echo "<tr>";
					echo "<td>" . $data['first_name'] . " " . $data['last_name'] . "</td>";
					echo "<td class='text-center'><small>" . $data['email'] . "</small></td>";
					echo "<td class='text-center'><small>" . $data['movil'] . "</small></td>";
					echo "<td class='text-center'><small>" . $data['id_user'] . "</small></td>";
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

<!-- Tables -->
<script>
$(document).ready(function() {
    $('#dataTables').DataTable( {
        "pageLength": 50,
        "ordering": false,
        "info":     true
    } );
	
    $('#dataTablesHistorico').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
		"searching": false
    } );
	
	
} );
</script>