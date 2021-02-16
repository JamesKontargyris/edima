<em style="display: block; margin-bottom:10px;">Team members will appear in rows of <?php block_field( 'team-members-per-row' ); ?></em>
<?php while ( block_rows( 'team-members' ) ) :
	block_row( 'team-members' ); ?>
    <div class="team-member gallery__item" style="border:1px solid lightgrey; padding:10px; text-align: center; margin-bottom:10px; font-family: Montserrat, sans-serif;">
        <div class="team-member__photo">
			<?php if ( block_sub_value( 'photo' ) ) : ?>
                <img src="<?php echo wp_get_attachment_image_url( block_sub_value( 'photo' ), 'team-member-photo' ); ?>"
                     alt="<?php block_sub_field( 'name' ); ?>" style="width:50%; border-radius: 9999px;"/>
			<?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member-profile-avatar-placeholder.jpg"
                     alt="<?php block_sub_field( 'name' ); ?>" style="width:50%; border-radius: 9999px;"/>
			<?php endif; ?>
        </div>
        <div class="team-member__name"><span style="color: #003b77;"><?php block_sub_field( 'name' ); ?></span>
        </div>
        <div class="team-member__meta"><?php block_sub_field( 'position-role' ); ?></div>
    </div>
<?php endwhile; reset_block_rows( 'team-members' ); ?>