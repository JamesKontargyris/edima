<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

get_header(); ?>

<?php
    // Get current news category info
    $news_tag = $wp_query->get_queried_object();
    $tag_name      = $news_tag->name;
    $tag_id        = $news_tag->term_id;
    define('TAG_ID', $tag_id);
?>

<?php get_template_part('template-parts/partials/partial', 'news-sub-nav'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container--with-padding margin--bottom">

                <div class="breadcrumbs tax-archive__breadcrumbs">
		            <?php breadcrumbs(); ?>
                </div>

                <div class="tax-archive__main">
                    <h5 class="text--upper margin--none">News tagged</h5>
                    <h1 class="margin--bottom-large"><?php echo $tag_name; ?></h1>
                    <?php $posts_by_news_tag = get_news_by_news_tag($tag_id, get_option( 'posts_per_page' ), 0); ?>
                    <?php if ( $posts_by_news_tag->have_posts() ) : ?>
                        <?php while($posts_by_news_tag->have_posts()) : $posts_by_news_tag->the_post(); ?>
                            <?php get_template_part('template-parts/partials/partial', 'horizontal-news-extract'); ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        No news stories found.
                    <?php endif; ?>
                    <div class="news-ajax"></div>
                </div>
                <div class="tax-archive__sidebar">
                    <?php get_template_part('template-parts/partials/partial', 'news-filter-categories'); ?>
                    <?php get_template_part('template-parts/partials/partial', 'news-filter-calendar'); ?>
                    <?php get_template_part('template-parts/partials/partial', 'news-filter-tags'); ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
