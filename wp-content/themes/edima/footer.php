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

<?php if ( ! is_post_type_archive( 'news_story' ) && ! is_singular('news_story')) : ?>

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
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'secondary',
                    'menu_id'        => 'secondary-menu',
                    'menu_class' => 'horizontal-menu horizontal-menu--white-links horizontal-menu--centered',
                    'depth' => '1',
                ) );
            ?>
        </div>
    </div>

    <div class="site-footer__content">
        <div class="site-footer__column-one-quarter">

            <?php dynamic_sidebar('footer-left'); ?>

        </div>

        <div class="site-footer__column-two-quarters">

	        <?php dynamic_sidebar('footer-middle'); ?>

        </div>

        <div class="site-footer__column-one-quarter">

	        <?php dynamic_sidebar('footer-right'); ?>

        </div>
    </div>

    <div class="site-footer__content">
        <div class="site-footer__legal">
            &copy; EDiMA <?php echo date( 'Y' ); ?>. All rights reserved. <br>
	        <?php
	        wp_nav_menu( array(
		        'theme_location' => 'legal',
		        'menu_id'        => 'legal-menu',
		        'menu_class' => 'horizontal-menu horizontal-menu--white-links horizontal-menu--centered',
		        'depth' => '1',
	        ) );
	        ?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
