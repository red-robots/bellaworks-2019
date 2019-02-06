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
							<img src="<?php bloginfo('template_url'); ?>/images/icon_mock5.png">	
						</div>
						<h2>Digital Services</h2>
						<p>
							Growing online isn’t simply about a good-looking website. That’s a great start, but there’s more work to do if you want to set yourself up for success. Fortunately, we can take care of everything.
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
							<img src="<?php bloginfo('template_url'); ?>/images/icon_idea.png">
						</div>
						<h2>Branding &amp; Strategy</h2>
						<p>
							In an increasingly competitive world, it’s important to pause before rushing online. We’ll help you discover who you are, what you do, and how you should look—plus why it all matters.
						</p>
						<ul>
							<li>
								<a href="">Logo Design</a>
							</li>
							<li>
								<a href="">Brand Positioning</a>
							</li>
							<li>
								<a href="">Strategy</a>
							</li>
							<li>
								<a href="">Social Media</a>
							</li>
						</ul>
					</div>
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_onlinecart.png">
						</div>
						<h2>Custom Development</h2>
						<p>
							Sometimes you need more than just a beautiful website to compete online. That’s why we build custom web apps, WordPress plugins, applications that talk to other services via API, and more.
						</p>
						<ul>
							<li>
								<a href="">Custom WordPress Solutions</a>
							</li>
							<li>
								<a href="">Content Management Systems</a>
							</li>
							<li>
								<a href="">Front End Development</a>
							</li>
							<li>
								<a href="">Custom Plugin Development</a>
							</li>
						</ul>
					</div>
				</section>
			</div>

			<section class="about-journey">
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_blurb.png">
						</div>
					</div>
					<div class="two-third">
						<h3>Open and transparent.</h3>
						<p class="title">Clear Communication</p>
						<p class="desc">
							<!-- We educate you on how to approach difficult problems. What strategies work and which don't. We will let you know how to and why. -->
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. 
						</p>
					</div>
				</div>
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_directions.png">
						</div>
					</div>
					<div class="two-third">
						<h3>We will guide you.</h3>
						<p class="title">Manage your project from start to finish.</p>
						<p class="desc">
							<!-- We will make sure you're informed at every stage of the process. Our communication is always open ensuring you know what you need to do and what to expect next. -->
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. 
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="third">
						<div class="icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_network2.png">
						</div>
					</div>
					<div class="two-third">
						<h3>A partnership.</h3>
						<p class="title">An expert to show you the way</p>
						<p class="desc">
							<!-- Every project has it's own set of goals. We will bring the right skills for the right goal.  -->
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. 
						</p>
					</div>
				</div>
			</section>

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'staff',
				'posts_per_page' => -1
				
			));
			if ($wp_query->have_posts()) : ?>
				<section class="our-staff">
					<div class="wrapper flex">
					<h2>Our <!-- <strike>Robots</strike> --> Staff</h2>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post();

						$superpower = get_field('superpower');
						$imgRobot = get_field('image_robot');
						$imgReal = get_field('photo');

					 ?>

					 	<div class="person">
					 		<div class="pic">
					 			<div class="robot">
					 				<img src="<?php echo $imgReal['url']; ?>"  alt="<?php echo $imgReal['alt']; ?>">
					 			</div>
					 			<div class="real">
					 				<img src="<?php echo $imgReal['url']; ?>"  alt="<?php echo $imgReal['alt']; ?>">
					 			</div>
					 		</div>
					 		<div class="info">
					 			<h3><?php the_title(); ?></h3>
					 			<?php if( $superpower ) { ?>
						 			<div class="superpower">
						 				<span class="superpower">Superpower</span>
						 				<?php echo $superpower; ?>
						 			</div>
					 			<?php } ?>
					 		</div>
					 	</div>

					<?php endwhile; ?>
					</div>
				</section>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
