<?php
/**
 * Template Name: Let's Do This
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

				endwhile; // End of the loop.
				?>
				<!-- <div class="typeform-widget" data-url="https://austincrane.typeform.com/to/hbdXi3" style="width: 100%; height: 500px;float: left;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>\
			</div> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
