<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post(); 

				//get_template_part('inc/title');

				?>
					

					<header class="entry-header services">
						<span class="service-title">SERVICES</span>
						<h1 class="page-description">
							<?php the_title(); ?>
						</h1>
					</header><!-- .entry-header -->

					<?php if( has_post_thumbnail() ) { ?>
						<div class="featured-image">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php } ?>

					<div class="post-content">
						<section class="post">
							
							<article class="post">
								<?php the_content(); ?>
							</article>
							<?php get_template_part('template-parts/cta-service'); ?>
						</section>
						
						<?php get_template_part('template-parts/single-side-service'); ?>
					</div>

				<?php endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
