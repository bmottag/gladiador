<!-- page content -->
<div class="right_col" role="main">
	<!-- top tiles -->
	<div class="row tile_count">
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Psicólogos</span>
			<div class="count"><?php echo $noPsicologos; ?></div>
			<span class="count_bottom"><a href="<?php echo base_url("dashboard/listado_psicologos");?>" >Ver listado</a></span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Pacientes</span>
			<div class="count green"><?php echo $noPacientes; ?></div>
			<span class="count_bottom"><a href="<?php echo base_url("dashboard/listado_pacientes");?>" >Ver listado</a></span>
		</div>
	</div>
	<!-- /top tiles -->
</div>