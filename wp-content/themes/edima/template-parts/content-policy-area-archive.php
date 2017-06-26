<style>
    .page-header {
       background:
                url(<?php echo get_template_directory_uri(); ?>/img/bg_circuitry_small.png),
                #d4e9ef;
        background-attachment: fixed;
        background-position: center;
        background-repeat: repeat;
        background-size:auto;
    }
</style>

<div class="page-header stripe stripe--large-padding parallax">
    <div class="stripe__content stripe__content--side-padding">
        <!--<img src="<?php /*echo get_template_directory_uri(); */?>/img/policy-area-temp-header-image.png" alt="" class="page-header__hero-image">-->
        <div class="page-header__content">
            <h1 class="page-header__title text--center text--blue">Policy Areas</h1>
            <p class="page-header__intro text--center text--page-intro text--page-intro--centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipisicing elit.</p>
        </div>
        <!--<div class="page-header__arrow"><i class="fa fa-caret-down"></i></div>-->
    </div>
</div>


<?php $policy_areas = get_policy_areas(); ?>
<?php if($policy_areas->have_posts()) : ?>
    <div class="container container--narrow">
        <div class="policy-area-tile__group">
            <div class="gallery gallery__row-of-2">

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