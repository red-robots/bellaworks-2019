<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$block_1_title = get_field('block_1_title');
$block_1_subtitle = get_field('block_1_subtitle');
$block_1_text = get_field('block_1_text');
$block_2_title = get_field('block_2_title');
$block_2_subtitle = get_field('block_2_subtitle');
$block_2_text = get_field('block_2_text');
$block_3_title = get_field('block_3_title');
$block_3_subtitle = get_field('block_3_subtitle');
$block_3_text = get_field('block_3_text');

?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post(); 

					get_template_part('inc/title');


				endwhile; // End of the loop.
				?>

			

			<section class="about-journey">
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_blurb.png">
						</div>
					</div>
					<div class="two-third">
						<h3><?php echo $block_1_title; ?></h3>
						<p class="title"><?php echo $block_1_subtitle; ?></p>
						<p class="desc">
							<?php echo $block_1_text; ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_directions.png">
						</div>
					</div>
					<div class="two-third">
						<h3><?php echo $block_2_title; ?></h3>
						<p class="title"><?php echo $block_2_subtitle; ?></p>
						<p class="desc">
							<?php echo $block_2_text; ?>
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_network2.png">
						</div>
					</div>
					<div class="two-third">
						<h3><?php echo $block_3_title; ?></h3>
						<p class="title"><?php echo $block_3_subtitle; ?></p>
						<p class="desc">
							<?php echo $block_3_text; ?>
						</p>
					</div>
				</div>
			</section>

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'staff',
				'posts_per_page' => -1
				
			));
			if ($wp_query->have_posts()) : ?>
				<section class="our-staff">
					<div class="wrapper flex">
					<h2>Our <!-- <strike>Robots</strike> --> Staff</h2>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post();

						$superpower = get_field('superpower');
						$imgRobot = get_field('image_robot');
						$imgReal = get_field('photo');
						$do = get_field('what_they_do');

					 ?>

					 	<div class="person">
					 		<a href="<?php the_permalink(); ?>">
						 		<div class="pic">
						 			<div class="robot">
						 				<img src="<?php echo $imgReal['url']; ?>"  alt="<?php echo $imgReal['alt']; ?>">
						 			</div>
						 			<div class="real">
						 				<img src="<?php echo $imgReal['url']; ?>"  alt="<?php echo $imgReal['alt']; ?>">
						 			</div>
						 		</div>
						 		<div class="info">
						 			<h3><?php the_title(); ?></h3>
						 			<?php if( $do ) { ?>
							 			<div class="superpower">
							 				<?php echo $do; ?>
							 			</div>
						 			<?php } ?>
						 			<?php if( $superpower ) { ?>
							 			<div class="superpower">
							 				<span class="superpower">Superpower</span>
							 				<?php echo $superpower; ?>
							 			</div>
						 			<?php } ?>
						 		</div>
					 		</a>
					 	</div>

					<?php endwhile; ?>
					</div>
				</section>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
