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
				while ( have_posts() ) : the_post(); ?>
					<header class="entry-header">
						<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="post-content">
						<article class="post">
							<?php the_content(); ?>
						</article>
						<div class="single-extras">
							asfda
						</div>
					</div>

				<?php endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
