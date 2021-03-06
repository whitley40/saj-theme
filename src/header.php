<!doctype html>

<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="S·A·J Transport Consultants" />
	<meta name="keywords" content="Transport, Assessment, Travel, Plan" />
	<meta name="description" content="Transport Assessment & Travel Plan Solutions" />
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?></title>
	<link href="https://file.myfontastic.com/weQBB68MahQFqMymzFuyXn/icons.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/imgs/favicon.png" />
	<?php wp_head(); ?>

</head>

<body>

<div class="wrapper">

<!-- LOGO AND NAV HEAD BAR  -->
	<header class="nav-header">
		
		<h1><a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/imgs/logo.svg"></a></h1>
		
		<nav class="nav" role="nav">

		<div class="bun">
			<div class="burger icon-align-justify">
		  </div>
	  </div>

	    <?php
	    	$defaults = array(
	    		'container' => false,
	    		'theme_location' => 'primary-menu',
	    		'menu-class' => ''
	    		);

	    	wp_nav_menu( $defaults );
	    ?>
		
		</nav>

	</header>

	<!-- TAGLINE 
	<section class="main-tagline">
		 <p>Sustainable transport solutions. Travel Planning, Strategic Masterplanning, Transport Assessment and more. <a href="<?php bloginfo('url'); ?>/contact/">Contact us today!</a></p>
	</section>-->