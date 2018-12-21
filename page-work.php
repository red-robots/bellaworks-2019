<?php
/**
 * Template Name: Work
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'portfolio',
				'posts_per_page' => 12
			));
				if ($wp_query->have_posts()) :  ?>
				<section class="work">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	

					
						<a href="<?php the_permalink(); ?>" class="third">
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="cover">
								<?php the_post_thumbnail(); ?>
							</div>
							
						</a>
					

			<?php 
			endwhile;?>
			</section>
			<?php 
			endif;
			 ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
