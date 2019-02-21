<?php
/**
 * Template Name: Lead Magnet Thanks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'inc/title');

					if (isset($_GET['firstname'])) {
					    echo "<h2>Here's your download," . $_GET['firstname'].'.</h2>';
					} else {
					    echo "<h2>Here's your download.</h2>";
					}

					the_content();

				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
