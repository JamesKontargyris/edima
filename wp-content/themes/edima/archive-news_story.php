<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

get_header(); ?>

<?php get_template_part('template-parts/partials/partial', 'news-sub-nav'); ?>
<?php get_template_part('template-parts/partials/partial', 'news-filters'); ?>

<?php if ( have_posts() ) : ?>

    <div id="#content" class="content-area">

        <!-- Latest News Story Hero-->
        <div class="news-archive__hero-story stripe stripe--large-padding stripe--border-bottom">
            <div class="stripe__content">
                <div class="news-archive">
                    <?php $latest_news_story = get_latest_news(1, 0); ?>
                    <?php if($latest_news_story->have_posts()) : while($latest_news_story->have_posts()) : $latest_news_story->the_post(); ?>

                        <?php get_template_part('template-parts/partials/partial', 'news-archive-style'); // styling ?>

                        <?php if(has_post_thumbnail()) : ?>
                            <div class="news-archive__hero-story__image">
                                <img src="<?php the_post_thumbnail_url('news-extract'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            </div>
                        <?php endif; ?>

                        <div class="news-archive__hero-story__content">
                            <h5 class="text--upper text--red margin--small-bottom">Latest News</h5>
                            <h2 class="news-archive__hero-story__headline"><?php the_title(); ?></h2>
                            <div class="news-archive__hero-story__meta text--upper">
                                <?php echo the_date('d F Y'); ?>
                                <?php if(wp_get_post_terms(get_the_ID(), 'news_categories')) : ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories')); endif; ?>
                            </div>
                            <div class="news-archive__hero-story__extract"><?php the_excerpt(); ?></div>
                            <a href="<?php echo get_the_permalink(); ?>" class="button button--primary">Read More</a>
                            <?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?>
                        </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
        <!-- /Latest News Story Hero-->

        <!-- Featured stories -->
        <?php $featured_stories = get_latest_news(3, 1); ?>
        <?php if($featured_stories->have_posts()) : ?>
            <div class="news-archive__feature-stories container margin--bottom">
                <div class="gallery gallery__row-of-3">
                    <?php while($featured_stories->have_posts()) : $featured_stories->the_post(); ?>
                        <div class="gallery__item news-archive__feature-story">
                            <div class="news-extract">
                                <h6 class="text--upper margin--small-bottom">
	                                <?php if(wp_get_post_terms(get_the_ID(), 'news_categories')) : echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories')); endif; ?>
                                </h6>
                                <a href="<?php echo get_the_permalink(); ?>">
	                                <?php if(has_post_thumbnail()) : ?>
                                        <img class="news-extract__image" src="<?php the_post_thumbnail_url('news-extract'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
	                                <?php endif; ?>
                                    <span class="news-extract__headline"><?php the_title(); ?></span>
                                </a>
                                <div class="news-extract__meta text--upper"><?php echo the_date('d F Y'); ?></div>
                                <div class="news-extract__extract margin--small-bottom"><?php the_excerpt(); ?></div>
                                <a href="<?php echo get_the_permalink(); ?>" class="button button--primary button--small">Read More</a>
	                            <?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; wp_reset_postdata(); ?>
        <!-- /Featured stories -->


        <div class="stripe stripe--no-margin stripe--light-grey">
            <div class="stripe__content">
                <div class="news-footer__news">
				    <?php get_template_part('template-parts/partials/partial', 'more-news'); ?>
                </div> <!-- / news-footer__news -->

                <hr class="hide--xl">

                <div class="news-footer__tweets">
				    <?php get_template_part('template-parts/partials/partial', 'tweets'); ?>
                </div> <!-- / news-footer__tweets -->
            </div>
        </div>

    </div>

<?php else : get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php
get_footer();
