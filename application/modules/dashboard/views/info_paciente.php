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
	
	switch ($information['caracteristica_idioma']) {
		case 1:
			$idioma = 'Solo español';
			break;
		case 2:
			$idioma = 'Español o inglés';
			break;
	}	

	
?>
				
				<div class="x_content">
				
					<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					
						<h4><strong><?php echo $information['nombre_paciente']; ?></strong></h4>
						<br>
						<ul class="list-unstyled user_data">

							<li>
								<i class="fa fa-envelope user-profile-icon"></i> <strong>Correo:</strong><br> <?php echo $information['email_paciente']; ?>
							</li>
							
							<li>
								<i class="fa fa-phone user-profile-icon"></i> <strong>Celular:</strong><br> <?php echo $information['movil_paciente']; ?>
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
										<td>En que idioma desea tener las sesiones? </td>
										<td class="fs15 fw700 text-right"><?php echo $idioma; ?></td>
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
									
									<tr>
										<td>4 valores personales que para tu vida sean de gran importancia </td>
										<td class="fs15 fw700 text-right">									
										<?php 
											echo $information['autosuficiencia']?' Autosuficiencia<br>':''; 
											echo $information['bondad']?' Bondad                  <br>':''; 
											echo $information['certidumbre']?' Certidumbre        <br>':''; 
											echo $information['coherencia']?' Coherencia          <br>':''; 
											echo $information['compasivo']?' Compasivo            <br>':''; 
											echo $information['confianza']?' Confianza            <br>':''; 
											echo $information['coperacion']?' Coperación          <br>':''; 
											echo $information['coraje']?' Coraje                  <br>':''; 
											echo $information['curiosidad']?' Curiosidad          <br>':''; 
											echo $information['equidad']?' Equidad                <br>':''; 
											echo $information['generosidad']?' Generosidad        <br>':''; 
											echo $information['gratitud']?' Gratitud              <br>':''; 
											echo $information['honestidad']?' Honestidad          <br>':''; 
											echo $information['humildad']?' Humildad              <br>':''; 
											echo $information['independencia']?' Independencia    <br>':''; 
											echo $information['lealtad']?' Lealtad                <br>':''; 
											echo $information['libertad']?' Libertad              <br>':''; 
											echo $information['mente_abierta']?' Mente Abierta    <br>':''; 
											echo $information['moderacion']?' Moderación          <br>':''; 
											echo $information['paciencia']?' Paciencia            <br>':''; 
											echo $information['persistencia']?' Persistencia      <br>':''; 
											echo $information['proactividad']?' Proactividad      <br>':''; 
											echo $information['proposito']?' Propósito            <br>':''; 
											echo $information['respeto']?' Respeto                <br>':''; 
											echo $information['responsabilidad']?' Responsabilidad<br>':''; 
											echo $information['servicio']?' Servicio              <br>':''; 
											echo $information['solidaridad']?' Solidaridad        <br>':''; 
											echo $information['sostenibilidad']?' Sostenibilidad  <br>':''; 
											echo $information['tolerancia']?' Tolerancia          <br>':''; 
											echo $information['unidad']?' Unidad                  <br>':''; 
										?>
										</td>
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