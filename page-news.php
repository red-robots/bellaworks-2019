<?php
/**
 * Template Name: News
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
				'post_type'=>'post',
				'posts_per_page' => 15
			));
				if ($wp_query->have_posts()) :  ?>
				<section class="news">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	

					

					<div class="third">
						<div class="image">
							<a href="<?php the_permalink(); ?>" >
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						
						<div class="content">
							<h2>
								<a href="<?php the_permalink(); ?>" >
									<?php the_title(); ?>
								</a>
							</h2>
						</div>	
					</div>
						
							
							
						
					

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
