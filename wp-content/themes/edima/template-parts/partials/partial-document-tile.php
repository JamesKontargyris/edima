<?php if(has_post_thumbnail()) : ?>
    <?php
    $image_id = get_id_from_img_url(get_the_post_thumbnail_url());
    $cover_image = wp_get_attachment_image_src($image_id, 'document-cover')[0];
    ?>
<?php else : $cover_image = ''; ?>
<?php endif; ?>

<div class="document-container gallery__item"> <!-- Used to combine tile with modal window to ensure correct margins in the gallery-->
    <div class="document document--height-auto" style="
            background:
            linear-gradient(to right, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.9) 70%),
            url(<?php echo $cover_image; ?>) center no-repeat; background-size: auto, cover;
            ">
		<?php if(! is_tax('document_categories')) : ?>
            <div class="document__categories">
				<strong><?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'document_categories'), false); ?></strong>
            </div>
		<?php endif; ?>
        <div class="document__cover-image <?php if( is_tax('document_categories') ) : ?> document__cover-image--hide <?php endif; ?>">
			<?php if(has_post_thumbnail()) : ?>
                <img src="<?php echo $cover_image; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
            <?php elseif(wp_get_terms_meta(wp_get_post_terms(get_the_ID(), 'document_categories')[0]->term_id, 'category-image' ,true)) : // does a category-image meta image exist for this category? If so, display it ?>
                <img src="<?php echo wp_get_terms_meta(wp_get_post_terms(get_the_ID(), 'document_categories')[0]->term_id, 'category-image' ,true); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
			<?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/document-cover-image-blank.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
			<?php endif; ?>

        </div>
        <div class="document__details <?php if( is_tax('document_categories') ) : ?> document__details--height-auto document__details--full-width <?php endif; ?>">
            <div class="document__meta">
				<?php echo get_the_date('j M y') . ' | '; ?>
				<?php echo get_field('file_type') ? get_field('file_type') . ' | ' : ''; ?>
				<?php echo get_field('file_size') ? get_field('file_size') : ''; ?>
            </div>
            <div class="document__title"><?php the_title(); ?></div>

            <div class="document__button-group">
                <a href="#" id="document-more-info-button" data-modal-id="#modal-<?php the_ID(); ?>" class="button button--primary  modal-trigger"><?php echo get_theme_mod('document_more_info_button_text', 'More Info'); ?></a>
				<?php $file = get_field('file'); ?>
                <a href="<?php echo $file['url']; ?>" class="button button--primary " download><?php echo get_theme_mod('document_download_button_text', 'Download'); ?></a>
            </div>
        </div>
    </div>


    <div id="modal-<?php the_ID(); ?>" class="modal">
        <div class="modal__content">
            <div class="document__description">
                <h3><?php the_title(); ?></h3>
				<?php if(has_post_thumbnail()) : ?>
                    <div class="document__description__cover-image"><img src="<?php echo $cover_image; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></div>
				<?php endif; ?>
				<?php if(get_field('description')) : ?>
					<?php echo get_field('description'); ?>
				<?php else : ?>
                    <em>No further information available.</em>
				<?php endif; ?>
            </div>
            <div class="modal__close" data-modal-id="#modal-<?php the_ID(); ?>"></div>
        </div>
    </div>
</div>
