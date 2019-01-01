<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
<title>TuApoyo</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="<?php echo base_url("images/faviocn.png"); ?>">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto:100,300,400,700,900">
<link href="<?php echo base_url("estilos/css/bootstrap.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("estilos/css/style.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("estilos/css/custom.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("estilos/css/novi.css"); ?>" rel="stylesheet">
<!--[if lt IE 10]><div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div><script src="js/html5shiv.min.js"></script><![endif]-->
</head>
<body>
<div class="page-loader">
  <div class="brand-name"><img src="<?php echo base_url("images/logo.png"); ?>" alt="" width="100" height="28"></div>
  <div class="page-loader-body">
    <div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>
  </div>
</div>
<div class="page text-center">
  <section class="section">
    <header class="page-header">
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default novi-background" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="true" data-md-stick-up-offset="190px" data-lg-stick-up-offset="190px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
          <div class="rd-navbar-inner">
            <div class="rd-navbar-panel">
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
			  <div class="rd-navbar-brand"><a class="brand-name" href="<?php echo base_url(); ?>"><img src="<?php echo base_url("images/logo.png"); ?>" alt="" width="250" height="55"></a></div>
            </div>
            <div class="rd-navbar-nav-wrap">
              <ul class="rd-navbar-nav">
			  
				<?php $this->load->view("template/top_menu"); ?>
			  
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
			

		
  </section>

<iframe src="<?php echo base_url($ruta); ?>" style="border:none; height:<?php echo $alto; ?>;width:100%;"></iframe> 
  
  <footer class="page-footer">
    <section class="section pre-footer-minimal bg-style-1 novi-background bg-image">
      <div class="pre-footer-minimal-inner">
        <div class="container text-center text-sm-left">
          <div class="row justify-content-sm-center spacing-55">
            <div class="col-sm-12 col-lg-4">
              <div class="footer-links style-2">
                <h6>Contact Us</h6>
                <hr class="divider-sm divider-left divider-purple" data-caption-animate="fadeInLeftSmall" data-caption-delay="50">
                <p>Let's make the sed odio sit amet a curabitur pulvinar luctus malesuada fames odio your complete solution partner.</p>
                <ul class="addresss-info mar-top-2">
                  <li><i class="fa fa-map-marker"></i>
                    <p>5353 S Lake Ave #789, Los Angeles, CA 91152, USA</p>
                  </li>
                  <li><i class="fa fa-phone"></i> <a href="callto:#">+1 (123) 456 7890</a></li>
                  <li><i class="fa fa-envelope-o"></i> <a href="mailto:#">info@yourdomain.com</a></li>
                </ul>
                <ul class="inline-list-xxs mar-top-2">
                  <li> <a class="icon novi-icon icon-xxs icon-circle icon-gray-outline icon-effect-1 fa fa-instagram" href="#"></a> </li>
                  <li> <a class="icon novi-icon icon-xxs icon-circle icon-gray-outline icon-effect-1 fa fa-facebook" href="#"></a> </li>
                  <li> <a class="icon novi-icon icon-xxs icon-circle icon-gray-outline icon-effect-1 fa fa-twitter" href="#"></a> </li>
                  <li> <a class="icon novi-icon icon-xxs icon-circle icon-gray-outline icon-effect-1 fa fa-google-plus" href="#"></a> </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="footer-links style-2">
                <h6>Recent Posts</h6>
                <hr class="divider-sm divider-left divider-purple" data-caption-animate="fadeInLeftSmall" data-caption-delay="50">
                <ul class="recent-posts">
                  <li>
                    <div class="mini-post-img"><a href="#"><img src="<?php echo base_url("images/site-img25-1-4.jpg"); ?>" alt=""></a></div>
                    <div class="post-content"><a href="#">The reasons lorem ipsum dolor</a>
                      <time class="text-secondary">Aug 16, 2018</time>
                    </div>
                  </li>
                  <li>
                    <div class="mini-post-img"><a href="#"><img src="<?php echo base_url("images/site-img26-4.jpg"); ?>" alt=""></a></div>
                    <div class="post-content"><a href="#">The reasons lorem ipsum dolor</a>
                      <time class="text-secondary">Aug 16, 2018</time>
                    </div>
                  </li>
                  <li>
                    <div class="mini-post-img"><a href="#"><img src="<?php echo base_url("images/site-img27-1.jpg"); ?>" alt=""></a></div>
                    <div class="post-content"><a href="#">The reasons lorem ipsum dolor</a>
                      <time class="text-secondary">Aug 16, 2018</time>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-lg-2">
              <div class="footer-links style-2">
                <h6>Navigation</h6>
                <hr class="divider-sm divider-left divider-purple" data-caption-animate="fadeInLeftSmall" data-caption-delay="50">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-lg-2">
              <div class="footer-links style-2">
                <h6>More Links</h6>
                <hr class="divider-sm divider-left divider-purple" data-caption-animate="fadeInLeftSmall" data-caption-delay="50">
                <ul>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Marketing</a></li>
                  <li><a href="#">Programming</a></li>
                  <li><a href="#">Inspired by clouds</a></li>
                  <li><a href="#">Whitepaper</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <hr class="gray">
      </div>
    </section>
    <section class="page-footer-default bg-style-1 copyright novi-background bg-image">
      <div class="container">
        <div class="row copyright style-1">
          <div class="col-lg-6 text-xl-left">
            <div class="brand-sm"> <a href="index-11.html"> <img src="<?php echo base_url("images/logo-white-small.png"); ?>" alt=""> </a> </div>
          </div>
          <div class="col-lg-6 text-xl-right">
            <p class="rights">© 2018 yourdomian.com - All rights reserved.</p>
          </div>
        </div>
      </div>
    </section>
  </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script async src="https://www.youtube.com/iframe_api"></script>
<script src="<?php echo base_url("estilos/js/core.min.js"); ?>"></script>
<script src="<?php echo base_url("estilos/js/script.js"); ?>"></script>
</body>
</html>