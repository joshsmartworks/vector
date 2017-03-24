<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vector
 */

?><!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.default.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">


        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
    <div class="top-bar">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#"><i class="fa fa-mobile"></i> + 1 (1800) 459 123 7</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> example@gmail.com</a></li>
            </ul>
        </div>
    </div>     

    <nav id="mainNav" class="navbar navbar-fixed-top navbar-default custom-navbar" role="navigation">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home" class="page-scroll">Vector</a>
        </div>
        
        <?php
        	wp_nav_menu(array(
        		'theme_location'	=> 'primary',
	    		'depth'				=> 2,
	    		'container'			=> 'div',
	    		'container_class'	=> 'navbar-offcanvas navmenu-fixed-left offcanvas',
	    		'menu_class'		=> 'nav navbar-nav',
	    		'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
	    		'walker'			=> new wp_bootstrap_navwalker()	
        		));
        ?>
      </div>
    </nav>




    