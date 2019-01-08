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
			$consultas = 'Si';
			break;
		case 2:
			$consultas = 'No';
			break;
		case 3:
			$consultas = 'Si';
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

					<div class="col-md-6 col-sm-6 col-xs-12 profile_left">
												
						<h1><strong><?php echo $information['name']; ?></strong></h1>
<br>					
						<ul class="list-unstyled user_data">
							

							<li>
								 <strong>Por qué quiero ayudarte?</strong><br> <?php echo $information['ayudarte']; ?>
							</li>

							<li>
								 <strong>Especialidades del Psicólogo:</strong><br> 
								 
									<?php 									
										$valores = array(
											"ansiedad" => $information['especialidad_ansiedad'],
											"depresion" => $information['especialidad_depresion'],
											"sustancias" => $information['especialidad_sustancias'],//consumo de sustancias
											"salud" => $information['especialidad_salud'],//bienestar físico
											"autoestima" => $information['especialidad_autoestima'],
											"pareja" => $information['especialidad_pareja'],//conflictos de pareja
											"suicidio" => $information['especialidad_suicidio']//autolesiones
										);
										
										arsort($valores);//organizo especialidades por mejores puntajes 

										//creo un nuevo array para que quede con el nombre de la variable
										$nuevoArrary = array();
										$i = 0;
										foreach ($valores as $key => $val) {
											 $nuevoArrary[$i] = $key;
											 $i++;
										}

										//imprimo los tres primeros valores
										for($i=0; $i<3; $i++)
										{
											if($nuevoArrary[$i] == "ansiedad"){
												echo "Ansiedad<br>";
											}elseif($nuevoArrary[$i] == "depresion"){
												echo "Depresion<br>";
											}elseif($nuevoArrary[$i] == "sustancias"){
												echo "Consumo de sustancias<br>";
											}elseif($nuevoArrary[$i] == "salud"){
												echo "Salud y Bienestar Físico<br>";
											}elseif($nuevoArrary[$i] == "autoestima"){
												echo "Autoestima<br>";
											}elseif($nuevoArrary[$i] == "pareja"){
												echo "Conflictos de Pareja<br>";
											}elseif($nuevoArrary[$i] == "suicidio"){
												echo "Autolesión/Suicidio";
											}
										}
									?> 
								 
							</li>
							
							<li>
								 <strong>Formación del Psicólogo</strong><br> <?php echo $information['formacion']; ?>
							</li>
							
							<li>
								 <strong>Enfoques del Psicólogo</strong><br> 
								 <?php
									echo $information['enfoque_cognitivo']?'Cognitivo Conductual<br>':''; 
									echo $information['enfoque_psicoanalisis']?'Psicoanálisis<br>':''; 
									echo $information['enfoque_sistemico']?'Sistémico<br>':''; 
									echo $information['enfoque_transpersonal']?'Transpersonal<br>':''; 
									echo $information['enfoque_humanista']?'Humanista':''; 
								 ?>
							</li>
							
							<li>
								 <strong>Rango de edad del Psicólogo</strong><br> <?php echo $edad; ?>
							</li>

						</ul>
						
						<div class="col-md-12">
							<div class="btn-group">

								<a class="btn btn-default btn-lg" href="<?php echo base_url() . 'paciente/info/' . $idPaciente; ?>"><span class="fa fa-reply" aria-hidden="true"></span> Regresar </a>
								
								<a class="btn btn-success btn-lg" href="<?php echo base_url() . 'paciente/contactar/' . $idPsicologo . '/' . $idPaciente; ?>"><span class="fa fa-level-down" aria-hidden="true"></span> Contactar </a>

							</div>
						</div>
						
					</div>
					
					
					<div class="col-md-6 col-sm-6 col-xs-12 profile_left">
						
						<?php if($information['photo']){ ?>
						<div class="profile_img">
							<div id="crop-avatar">
							<!-- Current avatar -->
								<a href="<?php echo base_url() . 'general/foto'; ?>"> 
									<img class="img-responsive avatar-view" src="<?php echo base_url($information['photo']); ?>" alt="Avatar" title="Cambiar foto">
								</a>
							</div>
						</div>					
						<?php } ?>
						
						<h3><strong>Información general</strong></h3>
<br>					
						<ul class="list-unstyled user_data">
							

							<li>
								 <strong>Tarifa:</strong><br> <?php echo $tarifa; ?>
							</li>
							
							<li>
								 <strong>Consultas virtuales:</strong><br> <?php echo $consultas; ?>
							</li>

							<li>
								 <strong>Dirección del consultorio:</strong><br> <?php echo $information['direccion']; ?>
							</li>

							<li>
								 <strong>Horarios de atención:</strong><br> <?php echo $information['horario']; ?>
							</li>
							

						</ul>
						
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>