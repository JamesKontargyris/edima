<?php $documents = get_documents(false); // All documents except featured documents ?>
<?php if($documents->have_posts()) : ?>

    <div class="container margin--bottom-large">
        <div class="document-group margin--none">
            <div class="gallery gallery__row-of-3 margin--none">
			    <?php while($documents->have_posts()) : $documents->the_post(); ?>

				    <?php get_template_part('template-parts/partials/partial', 'document-tile'); ?>

			    <?php endwhile; ?>
            </div>
        </div>
    </div>


<?php endif; wp_reset_postdata(); ?>