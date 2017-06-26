	<style>
		.policy-area__hero {
			background:
				linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
				linear-gradient(to bottom, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
                url(<?php echo get_template_directory_uri(); ?>/img/bg_icons.png) center no-repeat,

				<?php get_template_part('template-parts/partials/partial', 'policy-area-bg-colours'); ?>

            background-size:auto, auto, cover, auto;
		}

		.policy-area__hero__title,
		.policy-area__hero__description {
			color:<?php echo get_field('banner_text_colour'); ?>
		}

        .policy-area__hero__mini-title {
            color:rgba(<?php echo get_field('banner_text_colour') == 'black' ? '0,0,0' : '255,255,255'; ?>, 0.4);
            border-bottom-color:rgba(<?php echo get_field('banner_text_colour') == 'black' ? '0,0,0' : '255,255,255'; ?>, 0.4) !important;
        }

	</style>