<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
	<div class="navbar nav_title" style="border: 0;">
	  <a class="site_title" href="<?php echo base_url("dashboard"); ?>"><img src="<?php echo base_url("images/logo.png"); ?>" class="img-rounded" width="160" height="60" /></a>
	</div>

	<div class="clearfix"></div>

	<!-- menu profile quick info -->
	<div class="profile clearfix">

	  <div class="profile_info">
	  	  
		<?php if($this->session->photo){ ?>
		<img src="<?php echo base_url($this->session->photo); ?>" class="img-rounded" width="45" height="45" />
		<?php }?>
	  
		<span>Bienvenido,</span>
		<h2>
		<?php
			if($this->session->name)
			echo $userRol = $this->session->name; 
		?>
		</h2>
	  </div>
	</div>
	<!-- /menu profile quick info -->

	<!-- sidebar menu -->
	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
		<div class="menu_section">

			<ul class="nav side-menu">
			
<?php
/**
 * Special MENU for ADMIN
 * @author BMOTTAG
 * @since  23/12/2018
 */
		$userRol = $this->session->rol;
		$userID = $this->session->id;
		if($userRol != 3){ //If it is an ADMIN user, show an special menu
?>	

                  <li><a><i class="fa fa-list"></i> Registros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url("dashboard/listado_psicologos"); ?>">Listado Psicólogo</a></li>
                      <li><a href="<?php echo base_url("dashboard/listado_pacientes"); ?>">Listado Pacientes</a></li>
                    </ul>
                  </li>
				  
                  <li><a href="<?php echo base_url("dashboard/psicologos_nuevos"); ?>"><i class="fa fa-star"></i> Psicólogo nuevos <span class="label label-success pull-right"><?php echo $psicologosNuevos; ?></span></a></li>
				  
				  <li><a href="<?php echo base_url("dashboard/psicologos_desaprobados"); ?>"><i class="fa fa-times"></i> Psicólogo desaprobados </a></li>

<?php
		}else{
?>
				<li><a href="<?php echo base_url("dashboard/contactados_pacientes/" . $userID); ?>"><i class="fa fa-random"></i> Listado Pacientes </a></li>
<?php
		}
?>

                  <li><a><i class="fa fa-gear"></i> Configuración <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url("general/foto"); ?>">Subir foto</a></li>
                      <li><a href="<?php echo base_url("general"); ?>">Cambiar contraseña</a></li>
                    </ul>
                  </li>
				

				
			</ul>
		</div>

	</div>
	<!-- /sidebar menu -->

	<!-- /menu footer buttons -->
	<div class="sidebar-footer hidden-small">
	  <a data-toggle="tooltip" data-placement="top" title="Settings">
		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
		<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="Home" href="<?php echo base_url(); ?>">
		<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url("menu/salir"); ?>">
		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
	  </a>
	</div>
	<!-- /menu footer buttons -->
  </div>
</div>