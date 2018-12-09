<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><i class='fa fa-hand-o-up'></i> INFORMACIÓN PSICÓLOGO</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
				
					<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					
						<h4><strong><?php echo $information['name']; ?></strong></h4>
					
						<ul class="list-unstyled user_data">

							<li>
								<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong><br> <?php echo $information['email']; ?>
							</li>
							
							<li>
								<i class="fa fa-phone user-profile-icon"></i> <strong>No. celular:</strong><br> <?php echo $information['movil']; ?>
							</li>
							
							<li>
								<i class="fa fa-home user-profile-icon"></i> <strong>Dirección consultorio:</strong><br> <?php echo $information['direccion']; ?>
							</li>
							
							<li>
								<i class="fa fa-globe user-profile-icon"></i> <strong>Página web:</strong><br> <?php echo $information['pagina_web']; ?>
							</li>
						</ul>
						
					</div>
				
					<div class="col-md-9 col-sm-9 col-xs-12">
					
					<div class="table-responsive">
					
<?php
	switch ($information['edad']) {
		case 1:
			$edad = '23-27';
			break;
		case 2:
			$edad = '28-35';
			break;
		case 3:
			$edad = '36-45';
			break;
		case 4:
			$edad = '45-55';
			break;
		case 5:
			$edad = 'Mayor de 55';
			break;
	}
	
	switch ($information['consultas']) {
		case 1:
			$consultas = 'Ambas';
			break;
		case 2:
			$consultas = 'Solo en persona';
			break;
		case 3:
			$consultas = 'Solo virtual';
			break;
	}
	
	switch ($information['idioma']) {
		case 1:
			$idioma = 'Solo español ';
			break;
		case 2:
			$idioma = 'Español o inglés';
			break;
	}
?>
								<table class="countries_list">
									<tbody>
										<tr>
											<td>Rango de edad</td>
											<td class="fs15 fw700 text-right"><?php echo $edad; ?></td>
										</tr>
										<tr>
											<td>Por qué quiero ayudarte?</td>
											<td class="fs15 fw700 text-right"><?php echo $information['ayudarte']; ?></td>
										</tr>
										<tr>
											<td>Formación</td>
											<td class="fs15 fw700 text-right"><?php echo $information['formacion']; ?></td>
										</tr>
										<tr>
											<td>Cuántos años de experiencia en consulta tienes?</td>
											<td class="fs15 fw700 text-right"><?php echo $information['experiencia']; ?></td>
										</tr>
										<tr>
											<td>Cuál es tu tarifa por sesión?</td>
											<td class="fs15 fw700 text-right"><?php echo $information['tarifa']; ?></td>
										</tr>
										<tr>
											<td>Cómo manejas tu propia salud emocional para poder servirle a otros?</td>
											<td class="fs15 fw700 text-right"><?php echo $information['salud']; ?></td>
										</tr>
										<tr>
											<td>Ofreces consultas en persona, virtuales, o ambas?</td>
											<td class="fs15 fw700 text-right"><?php echo $consultas; ?></td>
										</tr>
										<tr>
											<td>En qué idioma ofreces consultas?</td>
											<td class="fs15 fw700 text-right"><?php echo $idioma; ?></td>
										</tr>
										<tr>
											<td>Cuáles son tus horarios de atención?</td>
											<td class="fs15 fw700 text-right"><?php echo $information['horario']; ?></td>
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