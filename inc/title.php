<?php 

	$pDesc = get_field('sub_title');

	if($pDesc == ''){$pDesc = 'A little about us.';}

 ?>
<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<p class="page-description">
		<?php echo $pDesc; ?>
	</p>
</header><!-- .entry-header -->