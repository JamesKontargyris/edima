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
<?php get_template_part('template-parts/partials/partial', 'policy-areas-sub-nav'); ?>

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

		<div id="primary" class="container--with-padding full-width">
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

	                <?php $documents = get_documents_by_policy_area(get_the_ID()); ?>
	                <?php if($documents->have_posts()) : ?>

                        <div class="policy-area__related-info-block">
                            <h6 class="policy-area__related-info-block__title policy-area__related-info-block__title--<?php echo get_field('colour_scheme'); ?> text--upper text--<?php echo get_field('banner_text_colour'); ?>"><i class="policy-area__related-info-block__title__icon fa fa-file-text-o"></i> <?php the_title(); ?> Documents</h6>
                            <div class="policy-area__related-info-block__content">

                                <div class="document-group margin--none">
                                    <div class="gallery margin--none gallery__row-of-1">
				                        <?php while($documents->have_posts()) : $documents->the_post(); ?>
                                            <div class="document document--policy-area-document gallery__item">
                                                <div class="document__details">
                                                    <div class="document__title"><?php the_title(); ?></div>
                                                    <div class="document__meta margin--bottom">
                                                        <?php echo get_field('file_type'); ?> | <?php echo get_field('file_size'); ?> | <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'document_categories')); ?>
                                                        <div class="document__button-group--standard">
                                                            <a href="#" id="document-more-info-button" data-modal-id="#modal-<?php the_ID(); ?>" class="button button--primary button--small modal-trigger"><?php echo get_theme_mod('document_more_info_button_text', 'More Info'); ?></a>
		                                                    <?php $file = get_field('file'); ?>
                                                            <a href="<?php echo $file['url']; ?>" class="button button--primary button--small" download><?php echo get_theme_mod('document_download_button_text', 'Download'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="modal-<?php the_ID(); ?>" class="modal">
                                                <div class="modal__content">
                                                    <div class="document__description">
                                                        <h3><?php the_title(); ?></h3>
								                        <?php if(has_post_thumbnail()) : ?>
									                        <?php
									                        $image_id = get_id_from_img_url(get_the_post_thumbnail_url());
									                        $member_logo = wp_get_attachment_image_src($image_id, 'document-cover')[0];
									                        ?>
                                                            <div class="document__description__cover-image"><img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></div>
								                        <?php endif; ?>
								                        <?php if(get_field('description')) : ?>
									                        <?php echo get_field('description'); ?>
								                        <?php else : ?>
                                                            <em>No further information available.</em>
								                        <?php endif; ?>
                                                    </div>
                                                    <div class="modal__close" data-modal-id="#modal-<?php the_ID(); ?>"></div>
                                                </div>
                                            </div>

				                        <?php endwhile; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
	                <?php endif; wp_reset_postdata(); ?>

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

		<?php $more_policy_areas = get_policy_areas(3, 0, [get_the_ID()], true); ?>
		<?php if($more_policy_areas->have_posts()) : ?>
            <div class="container container--with-padding">
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
