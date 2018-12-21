<?php
/**
 * Template Name: About
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

				<section class="about-what-we-do">
					<div class="third">
						<div class="icon">
							
						</div>
						<h2>Web Design &amp; Development</h2>
						<p>
							The most impressive websites and app experiences are rooted in smart design, embody clear vision, and are backed by the right technology.
						</p>
						<ul>
							<li>
								<a href="">Website Design</a>
							</li>
							<li>
								<a href="">Digital Strategy</a>
							</li>
							<li>
								<a href="">Copywriting</a>
							</li>
							<li>
								<a href="">Search Engine Optimization (SEO)</a>
							</li>
						</ul>
					</div>
					<div class="third">
						<div class="icon">
							
						</div>
						<h2>Web Design &amp; Development</h2>
						<p>
							The most impressive websites and app experiences are rooted in smart design, embody clear vision, and are backed by the right technology.
						</p>
						<ul>
							<li>
								<a href="">Website Design</a>
							</li>
							<li>
								<a href="">Digital Strategy</a>
							</li>
							<li>
								<a href="">Copywriting</a>
							</li>
							<li>
								<a href="">Search Engine Optimization (SEO)</a>
							</li>
						</ul>
					</div>
					<div class="third">
						<div class="icon">
							
						</div>
						<h2>Web Design &amp; Development</h2>
						<p>
							The most impressive websites and app experiences are rooted in smart design, embody clear vision, and are backed by the right technology.
						</p>
						<ul>
							<li>
								<a href="">Website Design</a>
							</li>
							<li>
								<a href="">Digital Strategy</a>
							</li>
							<li>
								<a href="">Copywriting</a>
							</li>
							<li>
								<a href="">Search Engine Optimization (SEO)</a>
							</li>
						</ul>
					</div>
				</section>
			</div>

			<section class="about-journey">
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php  ?>">
						</div>
					</div>
					<div class="two-third">
						<h3>Honestly open.</h3>
						<p class="title">Transparent Communication</p>
						<p class="desc">
							We keep the lines of communication wide open and reciprocal. You’ll be informed and empowered from inception to project review and beyond. We think that’s key to a happy, productive relationship and to the best results.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php  ?>">
						</div>
					</div>
					<div class="two-third">
						<h3>Honestly open.</h3>
						<p class="title">Transparent Communication</p>
						<p class="desc">
							We keep the lines of communication wide open and reciprocal. You’ll be informed and empowered from inception to project review and beyond. We think that’s key to a happy, productive relationship and to the best results.
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php  ?>">
						</div>
					</div>
					<div class="two-third">
						<h3>Honestly open.</h3>
						<p class="title">Transparent Communication</p>
						<p class="desc">
							We keep the lines of communication wide open and reciprocal. You’ll be informed and empowered from inception to project review and beyond. We think that’s key to a happy, productive relationship and to the best results.
						</p>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
