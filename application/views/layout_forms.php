<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>TuApoyo</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="<?php echo base_url("estilos_formularios/img/favicon.ico"); ?>" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url("estilos_formularios/img/apple-touch-icon-57x57-precomposed.png"); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url("estilos_formularios/img/apple-touch-icon-72x72-precomposed.png"); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url("estilos_formularios/img/apple-touch-icon-114x114-precomposed.png"); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url("estilos_formularios/img/apple-touch-icon-144x144-precomposed.png"); ?>">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="<?php echo base_url("estilos_formularios/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("estilos_formularios/css/style.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("estilos_formularios/css/responsive.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("estilos_formularios/css/menu.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("estilos_formularios/css/animate.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("estilos_formularios/css/icon_fonts/css/all_icons_min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("estilos_formularios/css/skins/square/grey.css"); ?>" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="<?php echo base_url("estilos_formularios/css/custom.css"); ?>" rel="stylesheet">

	<script src="<?php echo base_url("estilos_formularios/js/modernizr.js"); ?>"></script>
	<!-- Modernizr -->

	<!-- Jquery-->
	<script src="<?php echo base_url("estilos_formularios/js/jquery-3.2.1.min.js"); ?>"></script>	
	<script type="text/javascript" src="<?php echo base_url("assets/js/general/general.js"); ?>"></script>
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="index.html">MAVIA | Register, Reservation, Questionare, Reviews form wizard</a></h1>
                    </div>
                </div>
                <div class="col-9">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <nav>
                        <ul class="cd-primary-nav">
                            <li><a href="index.html" class="animated_link">Register Version</a></li>
                            <li><a href="reservation_version.html" class="animated_link">Reservation Version</a></li>
                            <li><a href="questionare_version.html" class="animated_link">Questionare Version</a></li>
                            <li><a href="review_version.html" class="animated_link">Review Version</a></li>
                            <li><a href="about.html" class="animated_link">About Us</a></li>
                            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>

 			<!-- Start of content -->
			<?php
			if (isset($view) && ($view != '')) {
				$this->load->view($view);
			}
			?>
			<!-- End of content -->	
	
	
	</main>
	
	<footer id="home" class="clearfix">
		<p>© 2018 Mavia</p>
		<ul>
			<li><a href="#0" class="animated_link">Purchase this template</a></li>
			<li><a href="#0" class="animated_link">Terms and conditions</a></li>
			<li><a href="#0" class="animated_link">Contacts</a></li>
		</ul>
	</footer>
	<!-- end footer-->
	
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->

	<!-- Common script -->
	<script src="<?php echo base_url("estilos_formularios/js/common_scripts_min.js"); ?>"></script>
	<!-- Wizard script -->
	<script src="<?php echo base_url("estilos_formularios/js/registration_wizard_func.js"); ?>"></script>
	<!-- Menu script -->
	<script src="<?php echo base_url("estilos_formularios/js/velocity.min.js"); ?>"></script>
	<script src="<?php echo base_url("estilos_formularios/js/main.js"); ?>"></script>
	<!-- Theme script -->
	<script src="<?php echo base_url("estilos_formularios/js/functions.js"); ?>"></script>

</body>
</html>