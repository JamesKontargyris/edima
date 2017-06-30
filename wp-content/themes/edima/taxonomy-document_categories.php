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
    $document_category = $wp_query->get_queried_object();
    $cat_name      = $document_category->name;
    $cat_id        = $document_category->term_id;
    define('CAT_ID', $cat_id);
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container--with-padding margin--bottom">

                <div class="breadcrumbs tax-archive__breadcrumbs">
		            <?php breadcrumbs(); ?>
                </div>

                <div class="tax-archive__main">
                    <h1 class="margin--bottom-large"><?php echo $cat_name; ?></h1>
                    <?php $posts_by_document_category = get_documents_by_document_category($cat_id, get_option( 'posts_per_page' ), 0); ?>
                    <?php if ( $posts_by_document_category->have_posts() ) : ?>
                        <?php while($posts_by_document_category->have_posts()) : $posts_by_document_category->the_post(); ?>
                            <?php get_template_part('template-parts/partials/partial', 'document-tile'); ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        No documents found.
                    <?php endif; ?>
                    <div class="document-ajax"></div>
                </div>
                <div class="tax-archive__sidebar">
                    <?php get_template_part('template-parts/partials/partial', 'document-filter-categories'); ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
