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
					
<?php
	switch ($information['tarifa']) {
		case 1:
			$tarifa = 'Menos de $90.000';
			break;
		case 2:
			$tarifa = 'Menos de $130.000';
			break;
		case 3:
			$tarifa = 'Menos de $200.000';
			break;
	}
	
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
										<td class="fs15 fw700 text-right"><?php echo $tarifa; ?></td>
									</tr>
									<tr>
										<td>Cuáles enfoques utilizas? </td>
										<td class="fs15 fw700 text-right">									
										<?php 
											echo $information['enfoque_cognitivo']?'Cognitivo Conductual<br>':''; 
											echo $information['enfoque_psicoanalisis']?'Psicoanálisis<br>':''; 
											echo $information['enfoque_sistemico']?'Sistémico<br>':''; 
											echo $information['enfoque_transpersonal']?'Transpersonal<br>':''; 
											echo $information['enfoque_humanista']?'Humanista':''; 
										?>
										</td>
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
										<td>6 valores que sean de alta importancia para ti, tanto en el ejercicio de tu profesión como en tu vida personal </td>
										<td class="fs15 fw700 text-right">									
										<?php 
											echo $information['valores_autosuficiencia']?' Autosuficiencia<br>':''; 
											echo $information['valores_bondad']?' Bondad                  <br>':''; 
											echo $information['valores_certidumbre']?' Certidumbre        <br>':''; 
											echo $information['valores_coherencia']?' Coherencia          <br>':''; 
											echo $information['valores_compasivo']?' Compasivo            <br>':''; 
											echo $information['valores_confianza']?' Confianza            <br>':''; 
											echo $information['valores_coperacion']?' Coperación          <br>':''; 
											echo $information['valores_coraje']?' Coraje                  <br>':''; 
											echo $information['valores_curiosidad']?' Curiosidad          <br>':''; 
											echo $information['valores_equidad']?' Equidad                <br>':''; 
											echo $information['valores_generosidad']?' Generosidad        <br>':''; 
											echo $information['valores_gratitud']?' Gratitud              <br>':''; 
											echo $information['valores_honestidad']?' Honestidad          <br>':''; 
											echo $information['valores_humildad']?' Humildad              <br>':''; 
											echo $information['valores_independencia']?' Independencia    <br>':''; 
											echo $information['valores_lealtad']?' Lealtad                <br>':''; 
											echo $information['valores_libertad']?' Libertad              <br>':''; 
											echo $information['valores_mente_abierta']?' Mente Abierta    <br>':''; 
											echo $information['valores_moderacion']?' Moderación          <br>':''; 
											echo $information['valores_paciencia']?' Paciencia            <br>':''; 
											echo $information['valores_persistencia']?' Persistencia      <br>':''; 
											echo $information['valores_proactividad']?' Proactividad      <br>':''; 
											echo $information['valores_proposito']?' Propósito            <br>':''; 
											echo $information['valores_respeto']?' Respeto                <br>':''; 
											echo $information['valores_responsabilidad']?' Responsabilidad<br>':''; 
											echo $information['valores_servicio']?' Servicio              <br>':''; 
											echo $information['valores_solidaridad']?' Solidaridad        <br>':''; 
											echo $information['valores_sostenibilidad']?' Sostenibilidad  <br>':''; 
											echo $information['valores_tolerancia']?' Tolerancia          <br>':''; 
											echo $information['valores_unidad']?' Unidad                  <br>':''; 
										?>
										</td>
									</tr>
									<tr>
										<td>Cuáles son tus horarios de atención?</td>
										<td class="fs15 fw700 text-right"><?php echo $information['horario']; ?></td>
									</tr>
									
								</tbody>
							</table>
					
						</div>

					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<strong>Especialidades del psicólogo</strong> 
						<br>En una escala de 1 a 5, autocalificar su capacidad y experiencia frente a cada tema (7 temas). Hay un máximo de 25 puntos, por ende tienen que escoger cuáles dominan y cuáles no y distribuir los puntos de forma acorde.
					</div>
					
						<div class="table-responsive">
							<table class="countries_list">
								<tbody>
									<tr>
										<td>Ansiedad</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_ansiedad']; ?></td>
									</tr>
									<tr>
										<td>Depresión</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_depresion']; ?></td>
									</tr>
									<tr>
										<td>Consumo de sustancias</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_sustancias']; ?></td>
									</tr>
									<tr>
										<td>Salud y Bienestar Físico</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_salud']; ?></td>
									</tr>
									<tr>
										<td>Autoestima</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_autoestima']; ?></td>
									</tr>
									<tr>
										<td>Conflictos de Pareja</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_pareja']; ?></td>
									</tr>
									<tr>
										<td>Autolesión/Suicidio</td>
										<td class="fs15 fw700 text-right"><?php echo $information['especialidad_suicidio']; ?></td>
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