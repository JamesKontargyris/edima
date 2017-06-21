<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>

	<div id="#content" class="content-area">
		<?php
		if( is_date()) {
			get_template_part('template-parts/content', 'policy-area-date-archive');
		} else {
			get_template_part('template-parts/content', 'policy-area-archive');
		}
		?>
	</div>



<?php else : get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php
get_footer();
