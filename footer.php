<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer color-davy-grey" role="contentinfo">
		<div class="third third-pad color-davy-dark-grey  js-blocks">
			<h3>Are you ready?</h3>
			<p>Let's help you grow your buisness.</p>
			<div class="button">
				<a href="<?php bloginfo('url'); ?>">I'm Ready.</a>
			</div>
		</div>
		<div class="third third-pad js-blocks">
			<h3 class="title">Our Services</h3>
			<ul class="nice-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Website Design</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Web Development</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Search Engine Optimization (SEO)</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Branding &amp; Strategy</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Social</a>
				</li>
				<!-- <li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Website Design</a>
				</li> -->
			</ul>
		</div>
		<div class="third third-pad js-blocks">
			<div class="footer-logo">
				<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-white.png" alt="Bellaworks Web Design">
			</div>
			<section class="info">
				<b>Bellaworks Web Design</b><br>
				3120 North Davidson St, Unit 200<br>
				Charlotte, North Carolina 28205<br>
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
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
