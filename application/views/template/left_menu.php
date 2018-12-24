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
		if($userRol != 3){ //If it is an ADMIN user, show an special menu
?>	
			
				<li>
					<a href="<?php echo base_url("dashboard/listado_psicologos"); ?>"><i class="fa fa-user"></i> Listado Psicólogos</a>
				</li>
				<li>
					<a href="<?php echo base_url("dashboard/listado_pacientes"); ?>"><i class="fa fa-user"></i> Listado Pacientes</a>
				</li>
				
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
	  <a data-toggle="tooltip" data-placement="top" title="Home" href="<?php echo base_url("dashboard"); ?>">
		<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url("menu/salir"); ?>">
		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
	  </a>
	</div>
	<!-- /menu footer buttons -->
  </div>
</div>