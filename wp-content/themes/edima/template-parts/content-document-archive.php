<div class="document-archive__page-header stripe stripe--large-padding">
	<div class="stripe__content stripe__content--side-padding">

		<div class="page-header__content">

			<?php if(get_theme_mod('document_banner_heading')) : ?>
				<h1 class="page-header__title"><?php echo get_theme_mod('document_banner_heading', 'Library'); ?></h1>
			<?php endif; ?>

			<?php if(get_theme_mod('document_banner_text')) : ?>
				<p class="page-header__intro text--page-intro text--page-intro--centered"><?php echo get_theme_mod('document_banner_text'); ?></p>
			<?php endif; ?>

		</div>

	</div>
</div>

<?php $documents = get_documents(true); ?>
<?php if($documents->have_posts()) : ?>
	<div class="document-group container">
		<div class="gallery gallery__row-of-3">
			<?php while($documents->have_posts()) : $documents->the_post(); ?>
					<?php if(has_post_thumbnail()) : ?>
					<?php
						$image_id = get_id_from_img_url(get_the_post_thumbnail_url());
						$member_logo = wp_get_attachment_image_src($image_id, 'document-cover')[0];
						?>
                    <?php else : $member_logo = ''; ?>
					<?php endif; ?>
                <div class="document gallery__item" style="
                        background:
                            linear-gradient(to right, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.9) 70%),
                            url(<?php echo $member_logo; ?>) center no-repeat; background-size: auto, cover;
                        ">
                    <div class="document__categories">
	                    <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'document_categories')); ?>
                    </div>
                    <div class="document__cover-image">
                        <?php if(has_post_thumbnail()) : ?>
                            <img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/document-cover-image-blank.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                        <?php endif; ?>

                    </div>
					<div class="document__details">
                        <div class="document__meta"><?php echo get_field('file_type'); ?> | <?php echo get_field('file_size'); ?></div>
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
                        <div class="modal__close" data-modal-id="#modal-<?php the_ID(); ?>"><i class="fa fa-times fa-lg"></i></div>
                    </div>
                </div>

			<?php endwhile; ?>
		</div>
	</div>
<?php endif; wp_reset_postdata(); ?>