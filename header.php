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

<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">




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
					<h1 class="logo bounce ">
			            <a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-white.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </h1>
				
					<?php get_template_part('inc/nav'); ?>
				</div><!-- wrapper -->
			</header><!-- #masthead -->
			<div class="herowrap colflex">
				<div class="home-flex">
					<section class="hero   js-blocks">
					<?php $post = get_post(36); 
							setup_postdata( $post );
 
								$herotext = get_field('hero_text');
								$herosmall = get_field('hero_small');
 
							wp_reset_postdata(); ?>
						<h2><?php echo $herotext; ?></h2>
						<h3><?php echo $herosmall; ?></h3>
						<div class="button">
							<div class="action">
							<a href="<?php bloginfo('url'); ?>/lets-do-this">	
								<div class="circle hero wow bounceInLeft" data-wow-delay="1s">
							      <span class="icon arrow"></span>
							    </div>
								<p class="button-text">Start Now.</p>
							</a>
							</div>
						</div>
					</section>
					<section class="image  wow fadeIn js-blocks">
						<img src="<?php bloginfo('template_url'); ?>/images/web-rocket.png">
					</section>
				</div>
			</div>
			<div class="hinter">
				<div class="icon wow bounceInUp" data-wow-delay="1.5s" >
					<i class="fas fa-chevron-down"></i>
				</div>
			</div>
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
