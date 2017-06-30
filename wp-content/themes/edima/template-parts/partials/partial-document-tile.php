<?php if(has_post_thumbnail()) : ?>
    <?php
    $image_id = get_id_from_img_url(get_the_post_thumbnail_url());
    $member_logo = wp_get_attachment_image_src($image_id, 'document-cover')[0];
    ?>
<?php else : $member_logo = ''; ?>
<?php endif; ?>
<div class="document document--height-auto gallery__item" style="
    background:
    linear-gradient(to right, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.9) 70%),
    url(<?php echo $member_logo; ?>) center no-repeat; background-size: auto, cover;
    ">
    <?php if(! is_tax('document_categories')) : ?>
        <div class="document__categories">
            <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'document_categories')); ?>
        </div>
    <?php endif; ?>

    <div class="document__cover-image <?php if( is_tax('document_categories') ) : ?> document__cover-image--hide <?php endif; ?>">
        <?php if(has_post_thumbnail()) : ?>
            <img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/document-cover-image-blank.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        <?php endif; ?>

    </div>
    <div class="document__details <?php if( is_tax('document_categories') ) : ?> document__details--height-auto document__details--full-width <?php endif; ?>">
        <div class="document__meta">
            <?php echo get_field('date') ? get_field('date') . ' | ' : ''; ?>
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
                <div class="document__description__cover-image"><img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></div>
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