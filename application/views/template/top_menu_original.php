<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
	<nav>
	  <div class="nav toggle">
		<a id="menu_toggle"><i class="fa fa-bars"></i></a>
	  </div>

	  <ul class="nav navbar-nav navbar-right">	  
	  
		<li class="">
		  <a href="<?php echo base_url("menu/salir"); ?>" class="user-profile" aria-expanded="false">
			<i class="fa fa-sign-out"></i> Logout
		  </a>
		</li>

<?php
/**
 * Special MENU for ADMIN
 * @author BMOTTAG
 * @since  23/12/2018
 */
		$userRol = $this->session->rol;
		if($userRol != 3){ //If it is an ADMIN user, show an special menu
?>	
		
		<li class="">
		  <a href="<?php echo base_url("dashboard"); ?>" class="user-profile" aria-expanded="false">
			<i class="fa fa-home"></i> Home
		  </a>
		</li>
		
		
<?php
		}else{
?>

		<li class="">
		  <a href="<?php echo base_url("psicologo/info"); ?>" class="user-profile" aria-expanded="false">
			<i class="fa fa-user"></i> Perfil
		  </a>
		</li>
				
<?php
		}
?>

	  </ul>
	</nav>
  </div>
</div>
<!-- /top navigation -->