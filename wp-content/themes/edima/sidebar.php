<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edima
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php dynamic_sidebar( 'sidebar-1' ); ?>

<div class="widget-area" role="complementary">
</div><!-- .widget-area -->
