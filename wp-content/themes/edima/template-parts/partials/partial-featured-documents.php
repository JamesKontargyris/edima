<?php $documents = get_featured_documents(); ?>
<?php if($documents->have_posts()) : ?>
	<div class="stripe stripe--blue">
		<div class="stripe__content">

            <?php if(get_theme_mod('document_featured_text')) : ?>
			    <h5 class="text--upper text--white"><i class="fa fa-star icon--inline"></i> <?php echo get_theme_mod('document_featured_text', 'Featured'); ?></h5>
            <?php endif; ?>

            <div class="document-group margin--none">
                <div class="gallery gallery__row-of-3 margin--none">
                    <?php while($documents->have_posts()) : $documents->the_post(); ?>

                        <?php get_template_part('template-parts/partials/partial', 'document-tile'); ?>

                    <?php endwhile; ?>
                </div>
            </div>

		</div>
	</div>

<?php endif; wp_reset_postdata(); ?>