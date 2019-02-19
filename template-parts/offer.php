<?php 
$offerTitle = get_field('offer_title', 'option');
$offer_description = get_field('offer_description', 'option');
$offer = get_field('offer', 'option');
$offer_button_text = get_field('offer_button_text', 'option');
 ?>
	<div class="side-widget">
		<h3><?php echo $offerTitle; ?></h3>
		<p><?php echo $offer_description; ?></p>
		<div class="button">
			<div class="action">
				<a class="inline" href="#leadmagnet">
					<div class="circle">
				      <span class="icon arrow"></span>
				    </div>
					<p class="button-text blue"><?php echo $offer_button_text; ?></p>
				</a>
			</div>
		</div>
	</div>

<div style="display: none;">
	<div id="leadmagnet">
		<h2><?php echo $offerTitle; ?></h2>
		<div class="form">
			<?php echo do_shortcode('[gravityform id="9" title="false" description="true"]'); ?>
		</div>
	</div>
</div>