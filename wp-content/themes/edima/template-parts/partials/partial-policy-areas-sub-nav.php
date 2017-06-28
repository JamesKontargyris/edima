<div class="page-nav page-nav--green page-nav--center hide--xl">
	<div class="page-nav__content">
		<ul class="page-nav__menu">
			<li class="page-nav__menu__mobile-toggle">Policy Areas</li>
			<?php
                $policy_areas = get_policy_areas();
                while( $policy_areas->have_posts()) : $policy_areas->the_post(); ?>
				<li><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>