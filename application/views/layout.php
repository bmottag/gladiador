<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="baseurl" content="<?php echo base_url()?>" />
	<link rel="icon" href="<?php echo base_url("images/favicon.ico"); ?>" type="image/ico" />

    <title>EAP </title>

    <!-- Bootstrap -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- iCheck -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/iCheck/skins/flat/green.css"); ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"); ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css"); ?>" rel="stylesheet">
	<!-- bootstrap-datetimepicker -->
	<link href="<?php echo base_url("assets/bootstrap/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"); ?>" rel="stylesheet">	
	
    <!-- Datatables -->
    <link href="<?php echo base_url("assets/bootstrap/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
	<link href="<?php echo base_url("assets/bootstrap/build/css/custom.min.css"); ?>" rel="stylesheet">
	
    <!-- jQuery -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/jquery/dist/jquery.min.js"); ?>"></script>
	<!-- jQuery validate-->
	<script type="text/javascript" src="<?php echo base_url("assets/js/general/general.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/general/jquery.validate.js"); ?>"></script>
	
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
			
			<!-- left navigation -->
			<?php $this->load->view("template/left_menu"); ?>
			
			<!-- top navigation -->			
			<?php
				//consultar enlaces
				$ci = &get_instance();
				$ci->load->model("general_model");
			
				$menu = '';
				$rol = $this->session->userdata['rol'];

				$itemsMenu = $this->general_model->get_menu();
				
				foreach ($itemsMenu as $item):
					$menu .= '<li class="">';
					$menu .= '<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<i class="fa ' . $item['menu_icono'] . '"></i> ' . $item['menu_name']  . '
									<span class=" fa fa-angle-down"></span>
								</a>';
					$menu .= '<ul class="dropdown-menu dropdown-usermenu pull-right">';
					
					//enlaces del menu
					$enlaces = $this->general_model->get_enlaces($item['id_menu']);
					
					foreach ($enlaces as $list):						
						if($list['link_name'] == "DIVIDER"){
							$menu .= '<li class="divider"></li>';
						}else{
							$menu .= '<li><a href="' . base_url($list['link_url']) . '"><i class="fa ' . $list['link_icono'] . ' pull-right"></i> ' . $list['link_name'] . '</a></li>';
						}
					endforeach;
					
					$menu .= '</ul>';
					$menu .= '</li>';
				
				endforeach;

				
				$data["topMenu"] = $menu;
			?>
			
			<?php $this->load->view("template/top_menu", $data); ?>
			<!-- Start of content -->
			<?php
			if (isset($view) && ($view != '')) {
				$this->load->view($view);
			}
			?>
			<!-- End of content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            EAP APP - BMG</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
    <!-- FastClick -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/fastclick/lib/fastclick.js"); ?>"></script>
    <!-- NProgress -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/nprogress/nprogress.js"); ?>"></script>
    <!-- Chart.js -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/Chart.js/dist/Chart.min.js"); ?>"></script>
    <!-- gauge.js -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/gauge.js/dist/gauge.min.js"); ?>"></script>
    <!-- bootstrap-progressbar -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"); ?>"></script>
    <!-- iCheck -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/iCheck/icheck.min.js"); ?>"></script>
    <!-- Skycons -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/skycons/skycons.js"); ?>"></script>
    <!-- Flot -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/Flot/jquery.flot.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/Flot/jquery.flot.pie.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/Flot/jquery.flot.time.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/Flot/jquery.flot.stack.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/Flot/jquery.flot.resize.js"); ?>"></script>
    <!-- Flot plugins -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/flot.orderbars/js/jquery.flot.orderBars.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/flot-spline/js/jquery.flot.spline.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/flot.curvedlines/curvedLines.js"); ?>"></script>
    <!-- DateJS -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/DateJS/build/date.js"); ?>"></script>
    <!-- JQVMap -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/jqvmap/dist/jquery.vmap.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/jqvmap/dist/maps/jquery.vmap.world.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"); ?>"></script>
    <!-- bootstrap-daterangepicker -->
	<script src="<?php echo base_url("assets/bootstrap/vendors/moment/min/moment.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js"); ?>"></script>
	
    <!-- Datatables -->
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-buttons/js/buttons.flash.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-buttons/js/buttons.html5.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-buttons/js/buttons.print.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/jszip/dist/jszip.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/pdfmake/build/pdfmake.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/vendors/pdfmake/build/vfs_fonts.js"); ?>"></script>

    <!-- Custom Theme Scripts -->
	<script src="<?php echo base_url("assets/bootstrap/build/js/custom.min.js"); ?>"></script>
	
  </body>
</html>