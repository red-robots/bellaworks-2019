<?php
/**
 * Template Name: Sitemap
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

					get_template_part( 'inc/title');

					the_content();

					wp_nav_menu( array( 'theme_location' => 'sitemap', 'menu_id' => 'primary-menu' ) ); 

				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
