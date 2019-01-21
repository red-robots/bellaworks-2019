<?php
/**
 * Template Name: Contact
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

				endwhile; // End of the loop.
				?>
			</div>


			<section class="contact">
				<div class="half half-pad azu-white contact1">
					
					<section class="info">
						<h3>Stop by.</h3>
						Bellaworks Web Design<br>
						3120 North Davidson St, Unit 200<br>
						Charlotte, North Carolina 28205<br>
					</section>
					<section class="info">
						<h3>How to contact.</h3>
						<b>P</b> 704.375.0831<br>
						<b>M </b>info@bellaworksweb.com
					</section>
					<section class="social">
						<ul class="footer-social">
							<li>
								<a href="http://www.facebook.com/bellaworks">
									<i class="fab fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/bellaworksweb/pins/">
									<i class="fab fa-pinterest-square"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/1060900">
									<i class="fab fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</section>
				</div>
				<div class="half half-pad start">
					<h3>Ready to start a project?</h3>
					<div class="button">
				<div class="action">
				<a href="<?php bloginfo('url'); ?>">	
					<div class="circle">
				      <span class="icon arrow"></span>
				    </div>
					<p class="button-text">Get Started.</p>
				</a>
				</div>
			</div>
				</div>
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
