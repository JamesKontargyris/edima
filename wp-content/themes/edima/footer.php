<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edima
 */

?>

</div><!-- #content -->

<?php if ( ! is_post_type_archive( 'news_story' ) ) : ?>

    <div class="stripe stripe--no-margin stripe--light-blue--fade">
        <div class="stripe__content">
            <div class="news-footer__news">
                <h5 class="text--upper"><i class="fa fa-newspaper-o"></i> Latest News</h5>
				<?php get_template_part( 'template-parts/partials/partial', 'footer-latest-news' ); ?>
            </div> <!-- / news-footer__news -->

            <hr class="hide--xl">

            <div class="news-footer__tweets">
                <h5 class="text--upper"><i
                            class="fa fa-lg fa-twitter"></i> <?php echo get_theme_mod( 'twitter_section_title', '@EDiMA_EU' ); ?>
                    <a href="https://twitter.com/intent/follow?screen_name=<?php echo get_theme_mod( 'twitter_handle', 'EDiMA_EU' ); ?>"
                       target="_blank" class="header-link">Follow Us</a></h5>
				<?php get_template_part( 'template-parts/partials/partial', 'tweets' ); ?>
            </div> <!-- / news-footer__tweets -->
        </div>
    </div>

<?php endif; ?>

<footer id="colophon" class="site-footer">
    <div class="site-footer__content">
        <div class="site-footer__nav">
            Menu
        </div>
    </div>

    <div class="site-footer__content">
        <div class="site-footer__column-one-quarter">
            <div class="site-footer__logo">
				<?php echo file_get_contents( get_template_directory_uri() . '/img/edima_logo.svg' ); ?>
                <br>Menu here
            </div>
        </div>
        <div class="site-footer__column-two-quarters">
            <h6 class="text--upper">Contact Us</h6>
            Contact form and details here
        </div>
        <div class="site-footer__column-one-quarter">
            <h6 class="text--upper">Our Members</h6>
			<?php $members = get_members(); ?>
			<?php if ( $members->have_posts() ) : ?>

				<?php while ( $members->have_posts() ) : $members->the_post(); ?>
                    <div style="float:left; width:50%">
                        <div class="text--white" style="display:inline-block; padding-bottom:1rem;"><?php the_title(); ?></div>
                    </div>
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="site-footer__content">
        <div class="site-footer__legal">
            &copy; EDiMA <?php echo date( 'Y' ); ?>. All rights reserved. <br>
            Legal links here
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
