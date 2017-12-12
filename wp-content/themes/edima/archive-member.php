<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>

	<div id="#content" class="content-area">
		<?php
		    get_template_part('template-parts/content', 'member-archive');
		?>
	</div>



<?php else : get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php
get_footer();
