<?php
/**
 * Template Name: Work
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
			</div>
			<div class="work-video">
				<div class="embed-container">
	            <?php 
					// specific post ID you want to pull
	                $post = get_post(36); 
	                setup_postdata( $post );
		 				//the_field('our_work_video'); 
	            	wp_reset_postdata();
	            ?>
	        	</div>
        	</div>

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'portfolio',
				'posts_per_page' => 9
			));
				if ($wp_query->have_posts()) :  ?>
				<section class="work">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	

					
						<a href="<?php the_permalink(); ?>" class="third">
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="cover">
								<?php the_post_thumbnail(); ?>
							</div>
							
						</a>
					

			<?php 
			endwhile;?>
			</section>
			<?php 
			endif;
			 ?>

			 <section class="our-clients">
			 	<h3>Some of our clients.</h3>
			 	<?php 
			 	// specific post ID you want to pull
				$post = get_post(2325); 
				setup_postdata( $post );

					if( have_rows('clients') ) : while( have_rows('clients') ) : the_row();
						$client = get_sub_field('client');
					?>
						<div class="client">
							<img src="<?php echo $client['url']; ?>"  alt="<?php echo $client['alt']; ?>">
						</div>
					<?php 
					endwhile;
					endif;
				wp_reset_postdata();
				?>
			 </section>	

			 <?php get_template_part('template-parts/are-you-ready'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
