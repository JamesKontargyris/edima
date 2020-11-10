<?php global $post; ?>

<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@DOTEurope"/>
<meta name="twitter:creator" content="@DOTEurope"/>

<?php if ( is_archive() ) : ?>
    <meta property="og:url" content="<?php echo get_post_type_archive_link( get_post_type() ); ?>"/>
    <meta property="og:title" content="<?php echo get_the_archive_title(); ?>"/>
    <meta name="twitter:image"
          content="<?php echo get_template_directory_uri(); ?>/img/doteurope-logo-social-placeholder.jpg"/>
    <meta name="image" property="og:image"
          content="<?php echo get_template_directory_uri(); ?>/img/doteurope-logo-social-placeholder.jpg"/>
    <meta name="image" property="og:image:secure_url"
          content="<?php echo get_template_directory_uri(); ?>/img/doteurope-logo-social-placeholder.jpg"/>
    <meta property="og:image:width" content="1500"/>
    <meta property="og:image:height" content="1000"/>

<?php else : ?>

    <meta property="og:url" content="<?php echo get_the_permalink( $post->ID ); ?>"/>
    <meta property="og:title" content="<?php echo get_the_title( $post->ID ); ?>"/>
    <meta property="og:description"
          content="<?php echo wp_strip_all_tags( get_the_content( null, null, $post->ID ) ) ?>"/>

	<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
        <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url( $post->ID, 'social-card' ); ?>"/>
        <meta name="image" property="og:image"
              content="<?php echo get_the_post_thumbnail_url( $post->ID, 'social-card' ); ?>"/>
        <meta name="image" property="og:image:secure_url"
              content="<?php echo get_the_post_thumbnail_url( $post->ID, 'social-card' ); ?>"/>
		<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "social-card" ); ?>
        <meta property="og:image:width" content="<?php echo get_option( 'social-card_size_w', $image_data[1] ); ?>"/>
        <meta property="og:image:height" content="<?php echo get_option( 'social-card_size_h', $image_data[2] ); ?>"/>
        <meta name="publish_date" property="og:publish_date" content="<?php echo get_the_date( 'c' ); ?>">
        <meta name="article-published_time" property="article:published_time"
              content="<?php echo get_the_date( 'c' ); ?>">
	<?php endif; ?>

<?php endif; ?>
