<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

?>
    <article id="post-<?php the_ID(); ?>" class="search-result">
        <?php if(get_post_type() === 'member') : ?>
	        <?php the_title( sprintf( '<h4 class="search-result__title"><a href="%s" rel="bookmark">', get_post_type_archive_link('member') ), '</a></h4>' ); // slightly different URL ?>
        <?php else : ?>
	        <?php the_title( sprintf( '<h4 class="search-result__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
        <?php endif; ?>

        <?php if ( get_post_type() === 'document' ) : ?>
            <div class="search-result__meta">
                <strong><?php echo pretty_post_type(get_post_type()); ?></strong>
                <?php echo 'posted in ' . inline_categories(wp_get_post_terms(get_the_ID(), 'document_categories'), false); ?>
                <?php echo ' on ' . get_the_date('j M y'); ?>
            </div>
            <div class="search-result__summary">
                <?php if(get_field('description')) : ?>
                    <?php echo get_field('description'); ?>
                <?php else : ?>
                    <em>No further information available.</em>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ( get_post_type() === 'news_story' ) : ?>
            <div class="search-result__meta">
                <strong><?php echo pretty_post_type(get_post_type()); ?></strong>
                <?php echo 'posted in ' . inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories')); ?>
                <?php echo ' on ' . get_the_date('j M y'); ?>
            </div>
            <div class="search-result__summary">
                <?php the_excerpt(); ?>
            </div>
        <?php endif; ?>

        <?php if ( get_post_type() === 'policy_area' ) : ?>
            <div class="search-result__meta">
                <strong><?php echo pretty_post_type(get_post_type()); ?></strong>
            </div>
            <div class="search-result__summary">
                <?php the_excerpt(); ?>
            </div>
        <?php endif; ?>
    </article><!-- #post-<?php the_ID(); ?> -->
