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


<?php the_field('google_analtyics','option'); ?>

<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1107124109368587');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1107124109368587&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Bellaworks Web Design",
  "image" : "https://bellaworksweb.com/bw/wp-content/themes/bellaworks2017/images/logo-new.png",
  "telephone" : "(704) 375-0831",
  "email" : "info@bellaworksweb.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "220 East Blvd #200a",
    "addressLocality" : "Charlotte",
    "addressRegion" : "North Carolina",
    "addressCountry" : "United States",
    "postalCode" : "28203"
  },
  "url" : "https://bellaworksweb.com/",
  "sameAs": [
    "http://www.facebook.com/bellaworks",
    "https://www.linkedin.com/company/1060900",
    "https://www.pinterest.com/bellaworksweb/pins/"
  ]
  
}
</script>

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
								$videoLink = get_field('vid_link');
 
							wp_reset_postdata(); ?>
						<h2><?php echo $herotext; ?></h2>
						<h3><?php echo $herosmall; ?></h3>
						<div class="button">
							<div class="action">
							<a href="<?php bloginfo('url'); ?>/lets-do-this">	
								<div class="circle hero wow bounceIn" data-wow-delay="1s">
							      <span class="icon arrow"></span>
							    </div>
								<p class="button-text">Get a Quote</p>
							</a>
							</div>
						</div>
					</section>
					<!-- <section class="image  wow fadeIn js-blocks">
						<img src="<?php bloginfo('template_url'); ?>/images/web-rocket-new.png">
						<?php if( $videoLink ) { ?>
							<div class="video-click">
								<a href="<?php echo $videoLink; ?>">i</a>
							</div>
						<?php } ?>
					</section> -->
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
