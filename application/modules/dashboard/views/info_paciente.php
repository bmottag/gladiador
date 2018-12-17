<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-hand-o-up'></i> INFORMACIÓN PACIENTE</h2>
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
	
	switch ($information['sesiones']) {
		case 1:
			$sesiones = 'Solo en persona';
			break;
		case 2:
			$sesiones = 'Solo virtual (online)';
			break;
		case 3:
			$sesiones = 'Ambas';
			break;
	}
	
	switch ($information['presupuesto']) {
		case 1:
			$presupuesto = 'Menos de $90.000';
			break;
		case 2:
			$presupuesto = 'Menos de $130.000';
			break;
		case 3:
			$presupuesto = 'Menos de $200.000';
			break;
		case 4:
			$presupuesto = 'No importa el valor de la sesión';
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
							
						</ul>
						
					</div>
				
					<div class="col-md-9 col-sm-9 col-xs-12">
					
						<div class="table-responsive">
					
							<table class="countries_list">
								<tbody>
									<tr>
										<td>¿Cuál es la razón por la que decides buscar apoyo?</td>
										<td class="fs15 fw700 text-right"><?php echo $information['razon']; ?></td>
									</tr>
									<tr>
										<td>Prefieres sesiones en persona, virtuales, o ambas?</td>
										<td class="fs15 fw700 text-right"><?php echo $sesiones; ?></td>
									</tr>
									<tr>
										<td>Prefieres un psicólogo con algunas características particulares? </td>
										<td class="fs15 fw700 text-right">									
										<?php 
											echo $information['caracteristica_edad']?'Edad<br>':''; 
											echo $information['caracteristica_enfoque']?'Enfoque<br>':''; 
											echo $information['caracteristica_idioma']?'Idioma':''; 
										?>
										</td>
									</tr>
									<tr>
										<td>Cuál es tu presupuesto para cada sesión?</td>
										<td class="fs15 fw700 text-right"><?php echo $presupuesto; ?></td>
									</tr>
								</tbody>
							</table>
					
						</div>
					
						<div class="table-responsive">
							<table class="countries_list">
								<tbody>
									<tr>
										<td>Ansiedad</td>
										<td class="fs15 fw700 text-right"><?php echo $information['ansiedad']; ?></td>
									</tr>
									<tr>
										<td>Depresión</td>
										<td class="fs15 fw700 text-right"><?php echo $information['depresion']; ?></td>
									</tr>
									<tr>
										<td>Consumo de sustancias</td>
										<td class="fs15 fw700 text-right"><?php echo $information['sustancias']; ?></td>
									</tr>
									<tr>
										<td>Salud y Bienestar Físico</td>
										<td class="fs15 fw700 text-right"><?php echo $information['salud']; ?></td>
									</tr>
									<tr>
										<td>Autoestima</td>
										<td class="fs15 fw700 text-right"><?php echo $information['autoestima']; ?></td>
									</tr>
									<tr>
										<td>Conflictos de Pareja</td>
										<td class="fs15 fw700 text-right"><?php echo $information['pareja']; ?></td>
									</tr>
									<tr>
										<td>Autolesión/Suicidio</td>
										<td class="fs15 fw700 text-right"><?php echo $information['suicidio']; ?></td>
									</tr>
									
								</tbody>
							</table>
					
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	</div>
</div>