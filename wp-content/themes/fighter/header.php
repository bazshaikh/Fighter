<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fighter
 */

?>

<!DOCTYPE html>

<!--[if IE 6]>

<html id="ie6" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7]>

<html id="ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html id="ie8" <?php language_attributes(); ?>>

<![endif]-->
<!--[if IE 9]>

<html id="ie9" <?php language_attributes(); ?>>

<![endif]-->
<!--[if IE 10]>

<html id="ie10" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)| !(IE 9)| !(IE 10)  ]><!-->

<html <?php language_attributes(); ?>>
<html lang="en">
<head>

<!-- Meta Tags -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Fighter League- for Karate Academy & Martial Arts Training" />
<meta name="keywords" content="Fighter League,karate,training" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Fighter League Academy | Learn our Culture</title>

<!-- Favicon and Touch Icons -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
<link href="images/favicon.png" rel="shortcut icon" type="image/png">


<!-- Stylesheet -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php bloginfo('template_url'); ?>/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php bloginfo('template_url'); ?>/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php bloginfo('template_url'); ?>/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php bloginfo('template_url'); ?>/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php bloginfo('template_url'); ?>/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php bloginfo('template_url'); ?>/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php bloginfo('template_url'); ?>/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php bloginfo('template_url'); ?>/css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="<?php bloginfo('template_url'); ?>/images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-blue-111 sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border m-0"> <?php dynamic_sidebar('contact-details-widget'); ?>
              <!--<ul class="list-inline xs-text-center text-white mt-5">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-theme-colored"></i> 022-255-9885</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-theme-colored"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored"></i> contact@fighterleague.com</a> </li>
              </ul>-->
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget no-border m-0"><?php dynamic_sidebar('social-media-widget'); ?>
              <!--<ul class="styled-icons icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>-->
            </div>
          </div>
          <div class="col-md-2">
            <a class="btn btn-colored btn-flat btn-theme-colored " href="index.html#register">Free Consulting</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord">
            <a class="menuzord-brand pull-left flip" href="<?php echo get_site_url();?>">
              <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/05/logo-wide.png" alt="">
            </a>
			<?php

				wp_nav_menu( array(

					'theme_location' => 'menu-1',

					'menu_id'        => 'primary-menu',

					'container'      => 'ul',

                    'menu_class'     => 'nav navbar-nav  menuzord-menu',

					

				) );

			?>
           <!-- <ul class="menuzord-menu">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About us</a></li>
              <li><a href="trainers.html">Trainers</a></li>
              <li><a href="classes.html">Classes</a></li>
			  <li><a href="awards.html">Awards</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact-us.html">Contact us</a></li>
            </ul>-->
			
          </nav>
        </div>
      </div>
    </div>
    <?php wp_head(); ?>
  </header>