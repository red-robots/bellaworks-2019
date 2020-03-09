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
				<div class="half half-pad color-light-blue-dark contact1 js-blocks">
					
					<section class="info">
						<h3>Visit Us.</h3>
						Bellaworks Web Design<br>
						3120 North Davidson St, Unit 200<br>
						Charlotte, North Carolina 28205<br>
					</section>
					<section class="info">
						<h3>Call or Email.</h3>
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

				<div class="half half-pad-contact start js-blocks">
					<div class="footer-blocs">
						<div class="bloc">
							<h3>Ready to start a project?</h3>
							<div class="button">
								<div class="action">
									<a href="<?php bloginfo('url'); ?>/lets-do-this">	
										<div class="circle">
									      <span class="icon arrow"></span>
									    </div>
										<p class="button-text">Contact Us.</p>
									</a>
								</div>
							</div>
						</div>
						<div class="bloc">
							<h3>Existing Customer?</h3>
							<p>Need to submit a work order?</p>
							<div class="button">
								<div class="action">
								<a href="<?php bloginfo('url'); ?>/work-order-request">	
									<div class="circle">
								      <span class="icon arrow"></span>
								    </div>
									<p class="button-text">Submit order here.</p>
								</a>
								</div>
							</div>
						</div>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.3843657618336!2d-80.80797368477057!3d35.246692361287785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88569e16fbb217db%3A0xd29b466726585022!2sBellaworks!5e0!3m2!1sen!2sus!4v1556801421785!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					
				</div>
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
