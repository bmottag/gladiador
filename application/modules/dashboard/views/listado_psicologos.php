<script>
$(function(){ 
			
	$(".btn-info").click(function () {	
			var oID = $(this).attr("id");
            $.ajax ({
                type: 'POST',
				url: base_url + 'dashboard/cargarModalEstado',
                data: {'idUser': oID},
                cache: false,
                success: function (data) {
                    $('#tablaDatos').html(data);
                }
            });
	});

});
</script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-users'></i> LISTADO DE PSICOLOGOS </h2>
					
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
								<th class="column-title">Nombre </th>
								<th class="column-title">Correo</th>
								<th class="column-title">No. Celular</th>
								<th class="column-title">Estado</th>
								<th class="column-title">Enlaces</th>
								</tr>
							</thead>

							<tbody>
										
		<?php 
			if($information){
				foreach ($information as $data):
					echo "<tr>";
					echo "<td>" . $data['name'] . "</td>";
					echo "<td>" . $data['email'] . "</td>";
					echo "<td>" . $data['movil'] . "</td>";
					
					echo "<td class='text-center'>";
						switch ($data['state']) {
							case 1:
								$valor = 'Activo';
								$clase = "text-success";
								break;
							case 2:
								$valor = 'Inactivo';
								$clase = "text-danger";
								break;
							default:
								$valor = 'Nuevo';
								$clase = "text-warning";
								break;
						}
						echo '<p class="' . $clase . '"><strong>' . $valor . '</strong></p>';
					echo "</td>";
					echo "<td class='text-center'>";
?>
				<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal" id="<?php echo $data['id_user']; ?>" >
					Estado <span class="glyphicon glyphicon-edit" aria-hidden="true">
				</button>				
<?php
					echo "<a href='" . base_url("general/edicion_psicologo/" . $data['id_user']) . "' class='btn btn-danger btn-xs'><i class='fa fa-pencil'></i> Editar </a>";
					echo "<a href='" . base_url("dashboard/ver_psicologo/" . $data['id_user']) . "' class='btn btn-success btn-xs'><i class='fa fa-eye'></i> Ver </a>";					
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

<!--INICIO Modal-->
<div class="modal fade text-center" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">    
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="tablaDatos">

		</div>
	</div>
</div>                       
<!--FIN Modal-->


<!-- Tables -->
<script>
$(document).ready(function() {
    $('#dataTables').DataTable( {
        "pageLength": 50
    } );
} );
</script>