<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			if ( have_posts() ) : the_post(); 
				
				// $hero = get_field('hero_text');
				// $hero_small = get_field('hero_small');
				$second_block_copy_lead = get_field('second_block_copy_lead');
				$second_block_copy = get_field('second_block_copy');
				$service_1_title = get_field('service_1_title');
				$service_1_copy = get_field('service_1_copy');
				$service_2_title = get_field('service_2_title');
				$service_2_copy = get_field('service_2_copy');
				$service_3_title = get_field('service_3_title');
				$service_3_copy = get_field('service_3_copy');

			endif; ?>



			<section class="benefits">
				<h2>Why Bellaworks?<br><span class="smaller">Because you want:</span></h2>
				
				<div class="bene even js-blocks">
					<h3>A Strategic Partner</h3>
					<ul>
						<li>
							Before we talk about design, we will talk about your company - your unique value, your audiences, and goals.  An understanding of “the big picture” will guide our work.
						</li>
						<li>
							We will offer solutions to address your challenges and opportunities, saving you time and money.
						</li>
					</ul>
				</div>
				<div class="bene odd js-blocks">
					<h3>Custom Digital Solutions</h3>
					<ul>
						<li>
							Bring out the best in your business and your brand with a custom website.
						</li>
						<li>
							Implement digital solutions that save time and money.
						</li>
						<li>
							Allow flexibility for the future by building on a WordPress platform.
						</li>
					</ul>
				</div>
				<div class="bene odd js-blocks">
					<h3>A Smooth Process</h3>
					<ul>
						<li>
							You know your business, and we know websites.  Let’s collaborate and create your best website.
						</li>
						<li>
							Our small but mighty team works directly with you.  No layers of agency management here. 
						</li>
						<li>
							All work is done in-house.  We control the process and ensure quality.
						</li>
					</ul>
				</div>
				<div class="bene even js-blocks">
					<h3>Flexibility WIth Maintenance</h3>
					<ul>
						<li>
							Want to make your own website content updates?  Super, we will train you.
						</li>
						<li>
							Want control over your website files?  You will own your files. 
						</li>
						<li>
							Need a website partner to handle hosting?  Got you covered.
						</li>
						<li>
							We have been in business over ten years and will be here to serve you long after your project wraps up.
						</li>
					</ul>
				</div>
				
			</section>


			

			<section class="secondary-hero fadeInUp wow">
				
				<!-- <section class="getitright"> -->
					<section class="secret">
					<!-- <h2><?php echo $second_block_copy_lead; ?></h2>
					<?php echo $second_block_copy; ?> -->
					<h2>The secret to a great website?</h2>
					  <span class="q">
					  	It starts by answering…</span> <br>
						<span class="a">What are you insanely proud of that your company does really well? What’s your unique value and who is it valuable to?</span>
					  
						<!-- <span class="a"></span> -->
						<p>
							We know you know the answer.  Putting this into words, logo, branding, and design in order to connect with your audiences the challenge. We’re here to help.
						</p>
						<p>
							A website project begins with getting to the very core of your business and understanding your unique value.
						</p>
						<p>
							Your unique value is where “the good stuff is.”  Pinpointing your value will set you apart from your competitors and will drive your brand.
						</p>

 


				</section>
			</section>


			
				
				<section class="offer">
					<div class="the-pitch">
						<div class="paper">
							<img src="<?php bloginfo('template_url'); ?>/images/a-great-website-starts-here.png">
						</div>
						<div class="copy downloadsec">
							<?php //get_template_part('template-parts/offer'); ?>
							<p class="co">Learn more about how your content is the key to your best website.</p>
							<p class="co">Download Content That Connects</p>
							<div class="button">
								<div class="action">
									<a class="inline cboxElement" href="#leadmagnet"></a>
									<div class="circle">
										<span class="icon arrow"></span>
									</div>
									<p class="button-text blue">Get It Now</p>
								</div>

							</div>
							
							<p class="co">
							And Let’s Build Your Best Website
							</p>
						</div>
					</div>
					
				</section>

				<?php get_template_part('template-parts/our-clients'); ?>


				<?php get_template_part('template-parts/testimonials'); ?>
			
			<section class="latest-news">
				<h2 class="home-service">Latest News</h2>
				<div class="newswrap">
				<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'post',
							'posts_per_page' => 3,
							'paged' => $paged,
							// 'tax_query' => array(
							// 	array(
							// 		'taxonomy' => 'service_type', // your custom taxonomy
							// 		'field' => 'slug',
							// 		'terms' => array( 'web-design' ) // the terms (categories) you created
							// 	)
							// )
						));
						if ($wp_query->have_posts()) : 
							while ($wp_query->have_posts()) : $wp_query->the_post() ?>
						<div class="newsblock">
							<a href="<?php the_permalink(); ?>">
							<?php 
								if( has_post_thumbnail() ) {
									the_post_thumbnail('blog');
								}
							?>
							<h2><?php the_title(); ?></h2>

							</a>
						</div>
					<?php endwhile; endif; ?>
					</div>
			</section>

			<section class="services color-light-blue">
				<h2 class="home-service">Services</h2>
				<div class="service-wrap">
					<div class="third third-pad digital">
						
						
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'service',
							'posts_per_page' => 10,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'service_type', // your custom taxonomy
									'field' => 'slug',
									'terms' => array( 'web-design' ) // the terms (categories) you created
								)
							)
						));
						if ($wp_query->have_posts()) : ?>
						
						<h3><?php echo $service_1_title; ?></h3>
						<div class="info"><?php echo $service_1_copy; ?></div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="third third-pad  branding">
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'service',
							'posts_per_page' => 10,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'service_type', // your custom taxonomy
									'field' => 'slug',
									'terms' => array( 'branding-strategy' ) // the terms (categories) you created
								)
							)
						));
						if ($wp_query->have_posts()) : ?>
						<h3><?php echo $service_2_title; ?></h3>
						<div class="info"><?php echo $service_2_copy; ?></div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="third third-pad custom">
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'service',
							'posts_per_page' => 10,
							'paged' => $paged,
							'tax_query' => array(
								array(
									'taxonomy' => 'service_type', // your custom taxonomy
									'field' => 'slug',
									'terms' => array( 'custom-development' ) // the terms (categories) you created
								)
							)
						));
						if ($wp_query->have_posts()) : ?>
						<h3><?php echo $service_3_title; ?></h3>
						<div class="info"><?php echo $service_3_copy; ?></div>
							<ul>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
