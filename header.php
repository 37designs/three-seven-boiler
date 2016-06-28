<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <section id="content">
 *
 * @package 3.7 Boiler
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"><!--<![endif]-->

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!--[if lte IE 9]>
		<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/ie.css" />
	<![endif]-->
	<script>
	    document.documentElement.className = 
	    document.documentElement.className.replace("no-js","js");
	</script>
	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>
	
	<div class="page-wrapper">
		
		<header id="masthead" role="banner">
			<div class="container">
				<a id="nav-toggle" href="#mobile-navigation"><span></span></a>
				<h2 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="sr-only"><?php bloginfo('name'); ?><span></a></h2>
	
				<nav id="main-navigation" role="navigation">
					<?php 
					if(has_nav_menu('main_navigation')):
						wp_nav_menu(array('theme_location' => 'main_navigation', 'container' => '', 'menu_id' => 'main_navigation'));
					endif; ?>
				</nav> <!--/#main-navigation -->
				
				<nav id="utility-navigation" role="navigation">
					<?php
					if(has_nav_menu('utility_navigation')):
						wp_nav_menu(array('theme_location' => 'utility_navigation', 'container' => '', 'menu_id' => 'utility_navigation')); 
					endif; ?>
				</nav> <!--/#utility-navigation-->
			</div>		
		</header> <!--/#header-->