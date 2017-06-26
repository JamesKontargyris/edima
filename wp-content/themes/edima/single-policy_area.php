<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

get_header(); ?>

<?php
    $policy_area_id = get_the_ID();
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part('template-parts/partials/partial', 'policy-area-hero'); ?>

	<div id="#content" class="content-area">

        <div class="container">
            <div class="breadcrumbs">
		        <?php breadcrumbs(); ?>
            </div>
        </div>


        <div class="policy-area__hero">

            <div class="policy-area__hero__content">

                <div class="policy-area__hero__text">
                    <h6 class="text--upper with-line policy-area__hero__mini-title">Key Policies</h6>
                    <h1 class="policy-area__hero__title"><?php the_title(); ?></h1>
                    <div class="policy-area__hero__description margin--none"><?php echo limit_text(get_the_excerpt(), 30); ?></div>
                </div>
                <div class="policy-area__hero__graphic">
                    <?php if(get_field('graphic')) : ?>
                        <img src="<?php echo get_field('graphic'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>

            </div>
        </div>

		<div id="primary" class="container--with-padding">
			<main id="main" class="site-main" role="main">

                <div class="policy-area__main structure--main-col structure--main-col--pull-right">

	                <?php the_content(); ?>

	                <?php if ( have_rows( 'links') ): ?>

                        <div class="policy-area__related-info-block">
                            <h6 class="policy-area__related-info-block__title policy-area__related-info-block__title--<?php echo get_field('colour_scheme'); ?> text--upper text--<?php echo get_field('banner_text_colour'); ?>"><i class="policy-area__related-info-block__title__icon fa fa-link"></i> <?php the_title(); ?> Links</h6>
                            <div class="policy-area__related-info-block__content">
                                <ul class="standard-list">

                                    <?php while ( have_rows('links') ) : the_row(); ?>
                                        <li class="standard-list__item"><a class="standard-list__link" href="<?php the_sub_field('link_url'); ?>" target="_blank"><?php  the_sub_field('link_text'); ?></a></li>
                                    <?php endwhile; ?>

                                </ul>
                            </div>
                        </div>

                    <?php endif; ?>

                    <div class="policy-area__related-info-block">
                        <h6 class="policy-area__related-info-block__title policy-area__related-info-block__title--<?php echo get_field('colour_scheme'); ?> text--upper text--<?php echo get_field('banner_text_colour'); ?>"><i class="policy-area__related-info-block__title__icon fa fa-file-text-o"></i> <?php the_title(); ?> Documents</h6>
                        <div class="policy-area__related-info-block__content">
                            <div class="gallery gallery__row-of-1 margin--none">
                                <div class="gallery__item margin--bottom-none">
                                    <div class="related-doc">
                                        <img class="related-doc__cover-image" src="http://lorempixel.com/80/112">
                                        <div class="related-doc__details">
                                            <div class="related-doc__title">A Digital Single Market for Users</div>
                                            <div class="related-doc__meta"><strong class="text--upper">Report</strong> &bull; 348kb &bull; PDF</div>
                                            <div class="related-doc__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit pariatur sed.</div>
                                            <a href="#" class="button button--primary button--small">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $news = get_news_by_policy_area($policy_area_id);
                        if($news->have_posts()) :?>
                        <div class="policy-area__related-info-block">
                            <h6 class="policy-area__related-info-block__title policy-area__related-info-block__title--<?php echo get_field('colour_scheme'); ?> text--upper text--<?php echo get_field('banner_text_colour'); ?>"><i class="policy-area__related-info-block__title__icon fa fa-newspaper-o"></i> <?php the_title(); ?> News</h6>
                            <div class="policy-area__related-info-block__content">
                                <?php while($news->have_posts()) : $news->the_post(); ?>
                                    <div class="related-news">
                                        <a href="<?php echo get_the_permalink(); ?>" class="related-news__link"><?php the_title(); ?></a>
                                        <div class="related-news__meta"><?php echo get_the_date('d F Y'); ?></div>
                                    </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="policy-area__sidebar structure--sidebar structure--sidebar--pull-left">
                    <hr class="hide--xl">
                    <div class="policy-area__sidebar-menu">
	                    <?php $policy_areas = get_policy_areas(); ?>
	                    <?php if($policy_areas->have_posts()) : ?>
                            <ul class="vertical-menu">
			                    <?php while($policy_areas->have_posts()) : $policy_areas->the_post(); ?>
                                    <li class="vertical-menu__item vertical-menu__item--large-spacing"><a href="<?php echo get_the_permalink(); ?>" class="vertical-menu__link <?php if(get_the_ID() == $policy_area_id) : ?> active <?php endif; ?>"><?php the_title(); ?></a></li>
			                    <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
	                    <?php endif; ?>
                    </div>
                </div>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php $more_policy_areas = get_policy_areas(3, 0, [get_the_ID()]); ?>
		<?php if($more_policy_areas->have_posts()) : ?>
            <div class="container container--narrow container--with-padding">
                <hr class="large-spacing">
                <h4 class="text--center">More Policy Areas</h4>
                <div class="policy-area-tile__group">
                    <div class="gallery gallery__row-of-3">

						<?php while($more_policy_areas->have_posts()) : $more_policy_areas->the_post(); ?>
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
	</div>

<?php endwhile; endif; ?>

<?php
get_footer();
