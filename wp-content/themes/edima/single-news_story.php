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

<?php get_template_part('template-parts/partials/partial', 'news-sub-nav'); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php if(has_post_thumbnail()) : ?>
        <style>
            .news-story__hero {
                background: linear-gradient(to right, rgba(0,0,0, 0.6) 25%, rgba(0,0,0, 0.1) 100%), url(<?php the_post_thumbnail_url('hero') ?>) center, rgb(0, 59, 119);
                background-size: cover;
            }
        </style>
    <?php else : ?>
        <style>
            .news-story__hero {
                background: rgb(0, 59, 119);
            }
        </style>
    <?php endif; ?>

<div class="news-story">
    <div class="news-story__hero">
        <div class="news-story__hero__content">
            <div class="news-story__breadcrumbs breadcrumbs">
                <?php breadcrumbs(); ?>
            </div>
            <h5 class="news-story__category-headline text--upper">
	            <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories')); ?>

            </h5>
            <h1 class="news-story__headline"><?php the_title(); ?></h1>
            <div class="news-story__meta">
                <?php if(get_field('author')) : ?>By <?php echo get_field('author'); ?><span class="text--divider">|</span><?php endif; ?><?php echo the_date('d F Y'); ?><span class="hide--s"><span class="text--divider">|</span> Share: <?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?></span>
            </div>
        </div>
    </div>

    <div id="#content" class="content-area">
        <div id="primary" class="container--with-padding">
            <main id="main" class="site-main" role="main">

                <div class="news-story__content">

				    <?php the_content(); ?>

                    <?php get_template_part('template-parts/partials/partial', 'news-tags'); ?>

                    <div class="margin--bottom-large">
                        <span class="text--blue"><i class="fa fa-share"></i> Share:</span> <?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?>
                    </div>



                </div>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

    <?php endwhile; endif; ?>

    <div class="stripe stripe--no-margin stripe--light-grey">
        <div class="stripe__content">
            <h5 class="text--upper"><i class="fa fa-newspaper-o"></i> More News</h5>
            <div class="news-footer__news">
                <?php get_template_part('template-parts/partials/partial', 'more-news'); ?>
            </div> <!-- / news-footer__news -->

            <hr class="hide--xl">

            <div class="news-footer__filters">
	            <?php get_template_part('template-parts/partials/partial', 'news-filter-categories'); ?>
	            <?php get_template_part('template-parts/partials/partial', 'news-filter-calendar'); ?>
	            <?php get_template_part('template-parts/partials/partial', 'news-filter-tags'); ?>
            </div> <!-- / news-footer__tweets -->
        </div>
    </div>
</div>

<?php
get_footer();
