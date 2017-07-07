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

<?php while ( have_posts() ) : the_post(); ?>

    <div id="#content" class="content-area">

        <?php if( ! get_field('hide_breadcrumbs')) : ?>
            <div class="container">
                <div class="breadcrumbs">
                    <?php breadcrumbs(); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php get_template_part('template-parts/partials/partial', 'page-banner'); ?>

	    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    </div>

<?php endwhile; // End of the loop. ?>


<?php
get_footer();
