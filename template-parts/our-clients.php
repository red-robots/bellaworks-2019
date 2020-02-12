<section class="our-clients">
 	<h3>Businesses we've worked with.</h3>
 	<?php 
 	// specific post ID you want to pull
	$post = get_post(2325); 
	setup_postdata( $post );

		if( have_rows('clients') ) : while( have_rows('clients') ) : the_row();
			$client = get_sub_field('client');
			$clientLink = get_sub_field('link');
		?>
			<div class="client">
				<a href="<?php echo $clientLink; ?>">
				<img src="<?php echo $client['url']; ?>"  alt="<?php echo $client['alt']; ?>">
				</a>
			</div>
		<?php 
		endwhile;
		endif;
	wp_reset_postdata();
	?>
 </section>	