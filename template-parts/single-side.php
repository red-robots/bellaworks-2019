<?php 
	$url = get_the_permalink();
 ?>
<div class="single-extras">
	<div class="side-widget">
		<section class="social-side">
			<h3>Shout it out.</h3>
			<ul class="side-social">
				<li>
					<a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>">
						<i class="fab fa-twitter-square"></i>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo $url; ?>">
						<i class="fab fa-linkedin"></i>
					</a>
				</li>
			</ul>
		</section>
	</div>
	<div class="side-widget">
		<div class="cta">
			<h3>Ready to start your project?</h3>
			<div class="button">
				<div class="action">
					<a href="<?php bloginfo('url'); ?>/lets-do-this">
						<div class="circle">
					      <span class="icon arrow"></span>
					    </div>
						<p class="button-text blue">Get a Quote.</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/offer'); ?>
</div>