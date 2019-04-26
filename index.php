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
			$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			if ( have_posts() ) : the_post(); 
				
				// $hero = get_field('hero_text');
				// $hero_small = get_field('hero_small');
				$second_block_copy_lead = get_field('second_block_copy_lead');
				$second_block_copy = get_field('second_block_copy');
				$service_1_title = get_field('service_1_title');
				$service_1_copy = get_field('service_1_copy');
				$service_2_title = get_field('service_2_title');
				$service_2_copy = get_field('service_2_copy');
				$service_3_title = get_field('service_3_title');
				$service_3_copy = get_field('service_3_copy');

			endif; ?>


			

			<section class="secondary-hero fadeInUp wow">
				
				<section class="getitright">
					<h2><?php echo $second_block_copy_lead; ?></h2>
					<?php echo $second_block_copy; ?>
				</section>
			</section>


			
				
				<section class="offer">
					<div class="the-pitch">
						<div class="paper">
							<img src="<?php bloginfo('template_url'); ?>/images/a-great-website-starts-here.png">
						</div>
						<div class="copy">
							<?php get_template_part('template-parts/offer'); ?>
						</div>
					</div>
					
				</section>
			


			<section class="services color-light-blue">
				<h2 class="home-service">Services</h2>
				<div class="service-wrap">
					<div class="third third-pad digital">
						
						
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
						
						<h3><?php echo $service_1_title; ?></h3>
						<div class="info"><?php echo $service_1_copy; ?></div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="third third-pad  branding">
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
						<h3><?php echo $service_2_title; ?></h3>
						<div class="info"><?php echo $service_2_copy; ?></div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="third third-pad custom">
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
						<h3><?php echo $service_3_title; ?></h3>
						<div class="info"><?php echo $service_3_copy; ?></div>
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
