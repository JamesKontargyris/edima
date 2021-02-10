<?php
$infoboxes = get_legislation_mapping_infoboxes();
$color     = '003b77';

if ( $infoboxes->have_posts() ) : ?>

	<?php while ( $infoboxes->have_posts() ) : $infoboxes->the_post(); ?>
		<?php
		if ( get_field( 'legislation_map_infobox_colour' ) == 'other' ) {
			$color = str_replace( '#', '', get_field( 'legislation_map_infobox_other_colour' ) );
		} else {
			$color = get_field( 'legislation_map_infobox_colour' );
		}
		?>
        <section class="legislation-mapping-infobox" style="background:linear-gradient(to bottom, rgba(0,0,0,0) 60%, rgba(0,0,0,0.1) 100%), #<?php echo $color; ?>;">
            <h4 class="legislation-mapping-infobox__title"><?php the_title(); ?></h4>
			<?php $infobox_title = get_the_title(); ?>

			<?php if ( have_rows( 'legislation_map_infobox_sub_sections' ) ) : ?>
                <div class="legislation-mapping-infobox__sub-sections">

					<?php while ( have_rows( 'legislation_map_infobox_sub_sections' ) ) : the_row( 'legislation_map_infobox_sub_sections' ); ?>
                        <div class="legislation-mapping-infobox__sub-section">
                            <h5 class="legislation-mapping-infobox__sub-section__title"><?php the_sub_field( 'legislation_map_infobox_sub_section_title' ); ?></h5>
							<?php $sub_section_title = get_sub_field( 'legislation_map_infobox_sub_section_title' ); ?>

							<?php if ( have_rows( 'legislation_map_infobox_legislation' ) ) : ?>
                                <ul class="legislation-mapping-infobox__sub-section__legislation-list">

									<?php while ( have_rows( 'legislation_map_infobox_legislation' ) ) : the_row( 'legislation_map_infobox_legislation' ); ?>
										<?php $modal_id = strtolower( str_replace( ' ', '_', get_sub_field( 'legislation_map_infobox_legislation_title' ) ) ); ?>
                                        <li>
                                            <a href="#"
                                               class="legislation-mapping-infobox__sub-section__legislation-title-link">
												<?php the_sub_field( 'legislation_map_infobox_legislation_title' ); ?>
                                            </a>
                                            <div class="modal legislation-mapping-infobox__modal">
                                                <div class="modal__close"></div>
                                                <div class="modal__content">
                                                    <h6 style="color:#<?php echo $color; ?>;"><?php echo $infobox_title . ' &rarr; ' . $sub_section_title; ?></h6>
                                                    <h4><?php the_sub_field( 'legislation_map_infobox_legislation_title' ); ?></h4>
													<?php the_sub_field( 'legislation_map_infobox_legislation_content' ); ?>
													<?php if ( get_sub_field( 'legislation_map_infobox_legislation_link' ) ) : ?>
                                                        <a href="<?php the_sub_field('legislation_map_infobox_legislation_link'); ?>" class="button button--primary" target="_blank">
                                                            <?php the_sub_field('legislation_map_infobox_legislation_link_text'); ?>
                                                        </a>
													<?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
									<?php endwhile; ?>

                                </ul>
							<?php endif; ?>

                        </div>
					<?php endwhile; ?>

                </div>
			<?php endif; ?>

        </section>
	<?php endwhile;
	wp_reset_postdata(); ?>

<?php endif;