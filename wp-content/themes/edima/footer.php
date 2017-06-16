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

	<footer id="colophon" class="site-footer">
        <div class="site-footer__content">
            <div class="site-footer__nav">
                Menu
            </div>
        </div>

        <div class="site-footer__content">
            <div class="site-footer__column-one-quarter">
                <div class="site-footer__logo">
                    <?php echo file_get_contents(get_template_directory_uri() . '/img/edima_logo.svg'); ?>
                    <br>Menu
                </div>
            </div>
            <div class="site-footer__column-two-quarters">
                <h6>Contact Us</h6>
            </div>
            <div class="site-footer__column-one-quarter">
                <h6>Our Members</h6>
            </div>
        </div>

        <div class="site-footer__content">
            <div class="site-footer__legal">
                &copy; EDiMA <?php echo date('Y'); ?>. All rights reserved. <br>
                Menu
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
