<div class="member-archive__page-header stripe stripe--large-padding">
	<div class="stripe__content stripe__content--side-padding">

		<div class="page-header__content">

			<?php if(get_theme_mod('member_banner_heading')) : ?>
				<h1 class="page-header__title"><?php echo get_theme_mod('member_banner_heading', 'Members'); ?></h1>
			<?php endif; ?>

			<?php if(get_theme_mod('member_banner_text')) : ?>
				<p class="page-header__intro text--page-intro text--page-intro--centered"><?php echo get_theme_mod('member_banner_text'); ?></p>
			<?php endif; ?>

		</div>

	</div>
</div>

<?php $members = get_members(); ?>
<?php if($members->have_posts()) : ?>
	<div class="member-group container container--narrow">
        <div class="gallery gallery__row-of-<?php echo get_theme_mod('member_no_of_tiles_per_row', '4'); ?>">
	        <?php while($members->have_posts()) : $members->the_post(); ?>
                <div class="member gallery__item <?php if(get_field('link')) : ?> member--has-link <?php endif; ?>">
                    <?php if(get_field('link')) : ?>
                        <a class="member__full-size-link" href="<?php echo get_field('link'); ?>" target="_blank"></a> <!--full size link-->
                    <?php endif; ?>
                    <div class="member__logo">
				        <?php if(has_post_thumbnail()) : ?>
					        <?php
                                $image_id = get_id_from_img_url(get_the_post_thumbnail_url());
                                $member_logo = wp_get_attachment_image_src($image_id, 'member-logo')[0];
					        ?>
                            <img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
				        <?php endif; ?>
                    </div>
                    <div class="member__name"><?php the_title(); ?></div>
                    <div class="member__meta">Member since <?php echo get_field('member_since'); ?></div>
                </div>
	        <?php endwhile; ?>
        </div>
	</div>
<?php endif; wp_reset_postdata(); ?>