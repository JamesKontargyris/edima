<div class="policy-area-tile__bg" style="background:
	linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 30%),
	<?php if(get_field('graphic')) : ?> url(<?php echo get_field('graphic'); ?>) center no-repeat,<?php endif; ?>

	<?php get_template_part('template-parts/partials/partial', 'policy-area-bg-colours'); ?>


	background-size: auto, contain, auto;"></div>