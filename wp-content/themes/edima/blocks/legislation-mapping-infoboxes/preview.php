<div class="legislation-mapping-block-preview" style="background:#efefef; padding:10px;">

	<?php if ( block_value( 'title' ) ) : ?>

        <h3 style="margin-top:0;"><?php block_field( 'title' ); ?></h3>

	<?php endif; ?>

    <p style="font-style: italic;">Legislation Mapping Infoboxes will appear here in this order:</p>

	<?php
	$infoboxes = get_legislation_mapping_infoboxes();

	while ( $infoboxes->have_posts() ) : $infoboxes->the_post(); ?>

        <h4 style="background:#ffffff; padding:10px; margin-top:0; margin-bottom:10px;"><?php the_title(); ?></h4>

	<?php endwhile;
	wp_reset_postdata(); ?>

    <p style="font-style: italic;">Visit the Legislation Mapping section to edit these infoboxes.</p>
</div>

