<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			// $wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			// if ( have_posts() ) : the_post(); 
			// 	get_template_part( 'template-parts/content', 'index' );
			// endif; ?>


			

			<section class="secondary-hero">
				<h2>Sed ut perspiciatis unde omnis.</h2>
				<h3>Quis autem vel eum iure reprehenderit.</h3>
			</section>


			<section class="services color-light-blue">
				<h2 class="home-service">Services</h2>
				<div class="service-wrap">
					<div class="third third-pad">
						
						
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'service',
							'posts_per_page' => 10,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'service_type', // your custom taxonomy
									'field' => 'slug',
									'terms' => array( 'web-design' ) // the terms (categories) you created
								)
							)
						));
						if ($wp_query->have_posts()) : ?>
						<h3>Web Design</h3>
						<div class="info">
							Whether a new or established business or organization, you can look to us to best articulate who you are, what you do, and most importantly, why any of it matters – beautifully.
						</div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="third third-pad  ">
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'service',
							'posts_per_page' => 10,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'service_type', // your custom taxonomy
									'field' => 'slug',
									'terms' => array( 'branding-strategy' ) // the terms (categories) you created
								)
							)
						));
						if ($wp_query->have_posts()) : ?>
						<h3>Branding &amp; Strategy</h3>
						<div class="info">
							Whether a new or established business or organization, you can look to us to best articulate who you are, what you do, and most importantly, why any of it matters – beautifully.
						</div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="third third-pad">
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'service',
							'posts_per_page' => 10,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'service_type', // your custom taxonomy
									'field' => 'slug',
									'terms' => array( 'custom-development' ) // the terms (categories) you created
								)
							)
						));
						if ($wp_query->have_posts()) : ?>
						<h3>Custom Development</h3>
						<div class="info">
							Whether a new or established business or organization, you can look to us to best articulate who you are, what you do, and most importantly, why any of it matters – beautifully.
						</div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
