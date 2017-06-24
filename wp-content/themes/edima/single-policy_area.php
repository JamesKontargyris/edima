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

	<?php if(has_post_thumbnail()) : ?>
		<style>
			.policy-area__hero {
				background:
                        linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
                        linear-gradient(to bottom, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
                        /*url(<?php echo get_template_directory_uri(); ?>/img/bg_circuitry_small.png) top left repeat,*/
                        linear-gradient(to bottom right, #EDAE49 30%, #dc8d50 100%),
                        #EDAE49;
			}

            .policy-area__hero__title,
            .policy-area__hero__description {
                color:black;
            }

		</style>
	<?php else : ?>
		<style>
			.policy-area__hero {
				background: rgb(0, 59, 119);
			}
		</style>
	<?php endif; ?>

	<div id="#content" class="content-area">

        <div class="container">
            <div class="breadcrumbs">
		        <?php breadcrumbs(); ?>
            </div>
        </div>


        <div class="policy-area__hero">

            <div class="policy-area__hero__content">

                <div class="policy-area__hero__text">
                    <h6 class="text--upper with-line text--dark-orange">Key Policies</h6>
                    <h1 class="policy-area__hero__title"><?php the_title(); ?></h1>
                    <div class="policy-area__hero__description margin--none"><?php echo limit_text(get_the_excerpt(), 30); ?></div>
                </div>
                <div class="policy-area__hero__graphic">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ux_graphic.png" alt="">
                </div>

            </div>
        </div>

		<div id="primary" class="container--with-padding">
			<main id="main" class="site-main" role="main">

                <div class="policy-area__main structure--main-col structure--main-col--pull-right">

	                <?php the_content(); ?>

                    <div class="policy-area__related-info-block">
                        <h6 class="policy-area__related-info-block__title text--upper"><?php the_title(); ?> Links</h6>
                        <div class="policy-area__related-info-block__content">
                            <ul class="standard-list">
                                <li class="standard-list__item"><a class="standard-list__link" href="#">A related link</a></li>
                                <li class="standard-list__item"><a class="standard-list__link" href="#">A related link</a></li>
                                <li class="standard-list__item"><a class="standard-list__link" href="#">A related link</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="policy-area__related-info-block">
                        <h6 class="policy-area__related-info-block__title text--upper"><?php the_title(); ?> Documents</h6>
                        <div class="policy-area__related-info-block__content">
                            <div class="gallery gallery__row-of-2 margin--none">
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

                    <div class="policy-area__related-info-block">
                        <h6 class="policy-area__related-info-block__title text--upper"><?php the_title(); ?> News</h6>
                        <div class="policy-area__related-info-block__content">
                            <div class="related-news">
                                <a href="#" class="related-news__link">News</a>
                                <div class="related-news__meta"><?php echo get_the_date('d F Y'); ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories'), 'related-news__category', 'related-news__category-link'); ?></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="policy-area__sidebar structure--sidebar structure--sidebar--pull-left">
                    <hr class="hide--xl">
                    <div class="policy-area__sidebar-menu">
	                    <?php $policy_areas = get_policy_areas(); ?>
	                    <?php if($policy_areas->have_posts()) : ?>
                            <ul class="vertical-menu">
			                    <?php while($policy_areas->have_posts()) : $policy_areas->the_post(); ?>
                                    <li class="vertical-menu__item"><a href="<?php echo get_the_permalink(); ?>" class="vertical-menu__link <?php if(get_the_ID() == $policy_area_id) : ?> active <?php endif; ?>"><?php the_title(); ?></a></li>
			                    <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
	                    <?php endif; ?>
                    </div>
                </div>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php $policy_areas = get_policy_areas(3, 0); ?>
		<?php if($policy_areas->have_posts()) : ?>
            <hr>
            <div class="container container--narrow container--with-padding">
                <h3 class="text--center text--blue">More Policy Areas</h3>
                <div class="policy-area-tile__group">
                    <div class="gallery gallery__row-of-3">

						<?php while($policy_areas->have_posts()) : $policy_areas->the_post(); ?>
                            <div class="gallery__item">
                                <div class="policy-area-tile">
                                    <div class="policy-area-tile__bg" style="background:linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 30%), <?php if(has_post_thumbnail()) : ?> url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>) center no-repeat,<?php endif; ?> linear-gradient(to bottom right, #EDAE49 30%, #dc8d50 100%), #EDAE49; background-size: auto, contain, auto;"></div> <!--bg element for blurring on rollover-->
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
