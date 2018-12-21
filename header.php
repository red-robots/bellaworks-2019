<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ddx3hzt.css">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	

	<?php if( is_home() ) { ?>
		<div class="home-banner">
			<header id="masthead" class="site-header" role="banner">
				<div class="wrapper">
					<h1 class="logo">
			            <a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-white.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </h1>
				
					<?php get_template_part('inc/nav'); ?>
				</div><!-- wrapper -->
			</header><!-- #masthead -->
		</div>
	<?php } else { ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">
				<div class="logo">
	            	<a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-color.png" alt="<?php bloginfo('name'); ?>">
		            </a>
	            </div>
	    		<?php get_template_part('inc/nav'); ?>
			</div><!-- wrapper -->
		</header><!-- #masthead -->

			
	<?php } ?>
	<div id="content" class="site-content ">
