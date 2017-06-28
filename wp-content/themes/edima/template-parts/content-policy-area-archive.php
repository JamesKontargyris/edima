<?php get_template_part('template-parts/partials/partial', 'policy-areas-sub-nav'); ?>

<div class="policy-area-archive__page-header stripe stripe--large-padding">
    <div class="stripe__content stripe__content--side-padding">
        <!--<img src="<?php /*echo get_template_directory_uri(); */?>/img/policy-area-temp-header-image.png" alt="" class="page-header__hero-image">-->
        <div class="page-header__content">

            <?php if(get_theme_mod('policy_area_banner_heading')) : ?>
                <h1 class="page-header__title"><?php echo get_theme_mod('policy_area_banner_heading', 'Policy Areas'); ?></h1>
	        <?php endif; ?>

	        <?php if(get_theme_mod('policy_area_banner_text')) : ?>
                <p class="page-header__intro text--page-intro text--page-intro--centered"><?php echo get_theme_mod('policy_area_banner_text'); ?></p>
	        <?php endif; ?>

        </div>
        <!--<div class="page-header__arrow"><i class="fa fa-caret-down"></i></div>-->
    </div>
</div>


<?php $policy_areas = get_policy_areas(); ?>
<?php if($policy_areas->have_posts()) : ?>
    <div class="container">
        <div class="policy-area-tile__group">
            <div class="gallery gallery__row-of-<?php echo get_theme_mod('policy_area_no_tiles_per_row', '3'); ?>">

                <?php while($policy_areas->have_posts()) : $policy_areas->the_post(); ?>
                    <div class="gallery__item">
                        <div class="policy-area-tile">
                            <!--bg element for blurring on rollover-->
                            <?php get_template_part('template-parts/partials/partial', 'policy-area-tile-bg'); ?>

                            <a class="policy-area-tile__full-size-link" href="<?php echo get_the_permalink(); ?>"></a> <!--full size link-->
                            <div class="policy-area-tile__content">
                                <div class="policy-area-tile__title"><?php the_title(); ?></div>
                                <div class="policy-area-tile__description"><?php echo limit_text(get_the_excerpt(), 20); ?></div>
                            </div>
                            <a href="<?php echo get_the_permalink(); ?>" class="button button--small policy-area-tile__link">Learn more</a>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
<?php endif; ?>
