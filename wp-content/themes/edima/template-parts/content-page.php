<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

$page_id = get_the_ID();
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(get_field('page_layout') != 'page_width') : ?>

        <div class="entry-content container--with-padding">

			<?php $full_width = get_field('page_layout') == 'full_width' ? 'full-width' : ''; ?>
			<?php $left_sidebar = get_field('page_layout') == 'left_sidebar' ? 'left-sidebar' : ''; ?>

            <div id="primary" class="<?php echo $full_width . ' ' . $left_sidebar; ?>">
                <main id="main" class="site-main" role="main">
					<?php the_content(); ?>
                </main><!-- #main -->
            </div><!-- #primary -->

			<?php if( get_field('page_layout') == 'left_sidebar' || get_field('page_layout') == 'right_sidebar') : ?>
                <div id="secondary" class="<?php echo $left_sidebar; ?>">

                    <?php get_template_part('template-parts/partials/partial', 'child-pages-menu'); ?>

                    <?php if(get_field('sidebar_content')) : echo '<aside>' . get_field('sidebar_content') . '</aside>'; endif; ?>
					<?php get_sidebar(); ?>
                </div>
			<?php endif; ?>
        </div><!-- .entry-content -->

	<?php else : ?>

        <main id="main" class="site-main" role="main">
			<?php the_content(); ?>
        </main><!-- #main -->

	<?php endif; ?>

</article><!-- #post-## -->


