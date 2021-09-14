<div class="gallery gallery__row-of-<?php block_field( 'team-members-per-row' ); ?>">
	<?php while ( block_rows( 'team-members' ) ) :
		block_row( 'team-members' ); ?>
        <div class="team-member gallery__item">
            <div class="team-member__photo">
				<?php if ( block_sub_value( 'bio' ) ) : ?>
                <a href="#" class="modal-trigger" data-modal-id="#modal-bio-<?php echo str_replace(" ", "_", block_sub_value('name')); ?>">
					<?php endif; ?>
					<?php if ( block_sub_value( 'photo' ) ) : ?>
                        <img src="<?php echo wp_get_attachment_image_url( block_sub_value( 'photo' ), 'team-member-photo' ); ?>"
                             alt="<?php block_sub_field( 'name' ); ?>"/>
					<?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/team-member-profile-avatar-placeholder.jpg"
                             alt="<?php block_sub_field( 'name' ); ?>"/>
					<?php endif; ?>
					<?php if ( block_sub_value( 'bio' ) ) : ?>
                </a>
			<?php endif; ?>
            </div>
            <div class="team-member__name"><span style="color: #003b77;"><?php block_sub_field( 'name' ); ?></span>
            </div>
            <div class="team-member__meta"><?php block_sub_field( 'position-role' ); ?></div>
			<?php if ( block_sub_value( 'bio' ) ) : ?>
                <div class="team-member__links">
                    <a href="#" class="button button--primary button--small modal-trigger" data-modal-id="#modal-bio-<?php echo str_replace(" ", "_", block_sub_value('name')); ?>">Bio</a>

                </div>
			<?php endif; ?>
        </div>
	<?php endwhile;
	reset_block_rows( 'team-members' ); ?>
</div>

<?php while ( block_rows( 'team-members' ) ) : block_row( 'team-members' ); ?>
	<?php if ( block_sub_value( 'bio' ) ) : ?>
        <div id="modal-bio-<?php echo str_replace(" ", "_", block_sub_value('name')); ?>" class="team-member__bio-modal modal">
            <div class="modal__close"></div>
            <div class="modal__content">
                <div class="team-member__bio__header">
                    <h3 class="team-member__bio__name"><?php block_sub_field( 'name' ); ?></h3>
                    <h5 class="team-member__bio__meta"><?php block_sub_field( 'position-role' ); ?></h5>
                </div>
                <div class="team-member__bio__body">
                    <?php block_sub_field( 'bio' ); ?>
                </div>
            </div>
        </div>
	<?php endif; ?>
<?php endwhile;
reset_block_rows( 'team-members' );
