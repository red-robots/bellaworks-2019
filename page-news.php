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
		<div class="wrapper">
		<?php
			while ( have_posts() ) : the_post(); 
				get_template_part('inc/title');
			endwhile; // End of the loop. 
			?>
		</div>
		<?php 
			$wp_query = new WP_Query();
			$wp_query->query(array(
			'post_type'=>'post',
			'posts_per_page' => 12,
			'paged' => $paged
		));
			if ($wp_query->have_posts()) :  ?>
				<section class="news">
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	
						<div class="third js-blocks blogpost">
							<div class="image">
								<a href="<?php the_permalink(); ?>" >
									<?php the_post_thumbnail('blog'); ?>
								</a>
							</div>
							<div class="content">
								<h2 class="js-titles">
									<a href="<?php the_permalink(); ?>" >
										<?php the_title(); ?>
									</a>
								</h2>
								<footer class="post">
									<div class="date">
										<?php the_date(); ?>
									</div>
									<div class="category">
										<?php the_category(); ?>
									</div>
								</footer>
							</div>	
						</div>
					<?php endwhile; ?>
						<?php pagi_posts_nav(); ?>
				</section>
			<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
