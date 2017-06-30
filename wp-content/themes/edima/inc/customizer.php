<?php
/**
 * edima Theme Customizer
 *
 * @package edima
 */

/**
 * Remove unwanted customiser options and panels
 */
function customizer_remove( $wp_customize ) {

	$wp_customize->remove_control("header_image");
	$wp_customize->remove_section("colors");
	$wp_customize->remove_section("background_image");
	$wp_customize->remove_section("static_front_page");

}
add_action( "customize_register", "customizer_remove" );

/**
 * Register settings, sections and controls
 */
function customizer_register( $wp_customize ) {

	/**
     * SECTIONS
     */
	$wp_customize->add_section( 'edima_members_section' , array(
		'title'      => __( 'Members', 'edima' ),
		'priority'   => 30,
	) );
	$wp_customize->add_section( 'edima_policy_areas_section' , array(
		'title'      => __( 'Policy Areas', 'edima' ),
		'priority'   => 40,
	) );
	$wp_customize->add_section( 'edima_news_section' , array(
		'title'      => __( 'News', 'edima' ),
		'priority'   => 50,
	) );
	$wp_customize->add_section( 'edima_documents_section' , array(
		'title'      => __( 'Library', 'edima' ),
		'priority'   => 50,
	) );
	$wp_customize->add_section( 'edima_twitter_section' , array(
		'title'      => __( 'Twitter', 'edima' ),
		'priority'   => 60,
	) );

	/**
     * SETTINGS
     */

	// Members
	$wp_customize->add_setting( 'member_banner_heading' , array(
		'default'   => 'Members',
	) );
	$wp_customize->add_setting( 'member_banner_text' , array(
		'default'   => '',
	) );
	$wp_customize->add_setting( 'member_banner_heading_color' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'member_banner_text_color' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'member_banner_bg_color' , array(
		'default'   => '#00a0a3',
	) );
	$wp_customize->add_setting( 'member_banner_bg_image' , array(
		'default'   => '',
	) );
	$wp_customize->add_setting( 'member_no_of_tiles_per_row' , array(
		'default'   => '3',
	) );

    // Policy Areas
	$wp_customize->add_setting( 'policy_area_banner_heading' , array(
		'default'   => 'Policy Areas',
	) );
	$wp_customize->add_setting( 'policy_area_banner_text' , array(
		'default'   => '',
	) );
	$wp_customize->add_setting( 'policy_area_banner_heading_color' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'policy_area_banner_text_color' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'policy_area_banner_bg_color' , array(
		'default'   => '#00a0a3',
	) );
	$wp_customize->add_setting( 'policy_area_banner_bg_image' , array(
		'default'   => '',
	) );
	$wp_customize->add_setting( 'policy_area_no_of_tiles_per_row' , array(
		'default'   => '3',
	) );

	// News
	$wp_customize->add_setting( 'news_no_of_sub_stories_in_latest_news' , array(
		'default'   => '3',
	) );

	// Documents
	$wp_customize->add_setting( 'document_banner_heading' , array(
		'default'   => 'Policy Areas',
	) );
	$wp_customize->add_setting( 'document_banner_text' , array(
		'default'   => '',
	) );
	$wp_customize->add_setting( 'document_banner_heading_color' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'document_banner_text_color' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'document_banner_bg_color' , array(
		'default'   => '#00a0a3',
	) );
	$wp_customize->add_setting( 'document_banner_bg_image' , array(
		'default'   => '',
	) );
	$wp_customize->add_setting( 'document_more_info_button_text' , array(
		'default'   => 'More Info',
	) );
	$wp_customize->add_setting( 'document_download_button_text' , array(
		'default'   => 'Download',
	) );

	// Twitter
	$wp_customize->add_setting( 'twitter_handle' , array(
		'default'   => 'edima_eu',
	) );
	$wp_customize->add_setting( 'twitter_section_title' , array(
		'default'   => '@EDiMA_EU',
	) );
	$wp_customize->add_setting( 'twitter_no_of_tweets' , array(
		'default'   => '3',
	) );

	/**
     * CONTROLS
     */

	// Members
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_banner_heading_control', array(
		'label'      => __( 'Page Title', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_banner_heading',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_banner_text_control', array(
		'type' => 'textarea',
		'label'      => __( 'Page Description', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_banner_text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'member_banner_heading_color_control', array(
		'label'      => __( 'Banner Heading Colour', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_banner_heading_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'member_banner_text_color_control', array(
		'label'      => __( 'Banner Text Colour', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_banner_text_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'member_banner_bg_color_control', array(
		'label'      => __( 'Banner Background Colour', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_banner_bg_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'member_banner_bg_image_control', array(
		'label'      => __( 'Banner Background Image', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_banner_bg_image',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_no_tiles_per_row_control', array(
		'label'      => __( 'Number of tiles per row (on larger screens, 1 to 4)', 'edima' ),
		'section'    => 'edima_members_section',
		'settings'   => 'member_no_of_tiles_per_row',
	) ) );

    // Policy Areas
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'policy_area_banner_heading_control', array(
		'label'      => __( 'Overview Page Title', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_banner_heading',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'policy_area_banner_text_control', array(
		'type' => 'textarea',
		'label'      => __( 'Overview Page Description', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_banner_text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'policy_area_banner_heading_color_control', array(
		'label'      => __( 'Overview Banner Heading Colour', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_banner_heading_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'policy_area_banner_text_color_control', array(
		'label'      => __( 'Overview Banner Text Colour', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_banner_text_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'policy_area_banner_bg_color_control', array(
		'label'      => __( 'Overview Banner Background Colour', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_banner_bg_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'policy_area_banner_bg_image_control', array(
		'label'      => __( 'Overview Banner Background Image', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_banner_bg_image',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'policy_area_no_tiles_per_row_control', array(
		'label'      => __( 'Number of tiles per row on overview page (on larger screens, 1 to 4)', 'edima' ),
		'section'    => 'edima_policy_areas_section',
		'settings'   => 'policy_area_no_of_tiles_per_row',
	) ) );

	// News
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_no_of_sub_stories_in_latest_news_control', array(
		'label'      => __( 'Number of sub-stories to show after the main story in the Latest News footer', 'edima' ),
		'section'    => 'edima_news_section',
		'settings'   => 'news_no_of_sub_stories_in_latest_news',
	) ) );

	// Documents
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'document_banner_heading_control', array(
		'label'      => __( 'Page Title', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_banner_heading',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'document_banner_text_control', array(
		'type' => 'textarea',
		'label'      => __( 'Page Description', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_banner_text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'document_banner_heading_color_control', array(
		'label'      => __( 'Banner Heading Colour', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_banner_heading_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'document_banner_text_color_control', array(
		'label'      => __( 'Banner Text Colour', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_banner_text_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'document_banner_bg_color_control', array(
		'label'      => __( 'Banner Background Colour', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_banner_bg_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'document_banner_bg_image_control', array(
		'label'      => __( 'Banner Background Image', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_banner_bg_image',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'document_more_info_button_text_control', array(
		'label'      => __( '"More Info" button text', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_more_info_button_text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'document_download_button_text_control', array(
		'label'      => __( '"Download" button text', 'edima' ),
		'section'    => 'edima_documents_section',
		'settings'   => 'document_download_button_text',
	) ) );

	// Twitter
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_section_title_control', array(
		'label'      => __( 'Section title', 'edima' ),
		'section'    => 'edima_twitter_section',
		'settings'   => 'twitter_section_title',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_handle_control', array(
		'label'      => __( 'Twitter handle (without @)', 'edima' ),
		'section'    => 'edima_twitter_section',
		'settings'   => 'twitter_handle',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_no_of_tweets_control', array(
		'label'      => __( 'Number of tweets to show', 'edima' ),
		'section'    => 'edima_twitter_section',
		'settings'   => 'twitter_no_of_tweets',
	) ) );

}
add_action( "customize_register", "customizer_register" );

/**
 * Customised CSS output in <head>
 */
function edima_customized_css()
{
	?>
	<style type="text/css">
        .member-archive__page-header {
            background:
                    linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
        <?php
			if(get_theme_mod('member_banner_bg_image')) { // URL to image
				// store the image ID in a var
				$image_id = get_id_from_img_url(get_theme_mod('member_banner_bg_image'));

				// retrieve the hero size version of our image
				$hero_image_url = wp_get_attachment_image_src($image_id, 'hero')[0];
				echo 'url(' . $hero_image_url . ') center no-repeat,';
			} ?>
        <?php echo get_theme_mod('member_banner_bg_color', '#00a0a3'); ?>;
            background-size: auto, cover, auto;

            text-align: <?php echo get_theme_mod('member_banner_text_align', 'center'); ?>;
        }
        .member-archive__page-header {
            color: <?php echo get_theme_mod('member_banner_text_color', '#222222'); ?>
        }
        .member-archive__page-header h1 {
            color: <?php echo get_theme_mod('member_banner_heading_color', '#222222'); ?>
        }


		.policy-area-archive__page-header {
			background:
				linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
				<?php
					if(get_theme_mod('policy_area_banner_bg_image')) { // URL to image
						// store the image ID in a var
						$image_id = get_id_from_img_url(get_theme_mod('policy_area_banner_bg_image'));

						// retrieve the hero size version of our image
						$hero_image_url = wp_get_attachment_image_src($image_id, 'hero')[0];
						echo 'url(' . $hero_image_url . ') center no-repeat,';
					} ?>
				<?php echo get_theme_mod('policy_area_banner_bg_color', '#00a0a3'); ?>;
			background-size: auto, cover, auto;

			text-align: <?php echo get_theme_mod('policy_area_banner_text_align', 'center'); ?>;
		}
		.policy-area-archive__page-header {
			color: <?php echo get_theme_mod('policy_area_banner_text_color', '#222222'); ?>
		}
		.policy-area-archive__page-header h1 {
			color: <?php echo get_theme_mod('policy_area_banner_heading_color', '#222222'); ?>
		}


        .document-archive__page-header {
            background:
                    linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
        <?php
			if(get_theme_mod('document_banner_bg_image')) { // URL to image
				// store the image ID in a var
				$image_id = get_id_from_img_url(get_theme_mod('document_banner_bg_image'));

				// retrieve the hero size version of our image
				$hero_image_url = wp_get_attachment_image_src($image_id, 'hero')[0];
				echo 'url(' . $hero_image_url . ') center no-repeat,';
			} ?>
        <?php echo get_theme_mod('document_banner_bg_color', '#00a0a3'); ?>;
            background-size: auto, cover, auto;

            text-align: <?php echo get_theme_mod('document_banner_text_align', 'center'); ?>;
        }
        .document-archive__page-header {
            color: <?php echo get_theme_mod('document_banner_text_color', '#222222'); ?>
        }
        .document-archive__page-header h1 {
            color: <?php echo get_theme_mod('document_banner_heading_color', '#222222'); ?>
        }
	</style>
	<?php
}
add_action( 'wp_head', 'edima_customized_css');





// UNDERSCORES CODE

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function edima_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'edima_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function edima_customize_preview_js() {
	wp_enqueue_script( 'edima_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'edima_customize_preview_js' );
