<?php
/**
 * edima functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package edima
 */

if ( ! function_exists( 'edima_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function edima_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on edima, use a find and replace
	 * to change 'edima' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'edima', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary (Header)', 'edima' ),
		'secondary' => esc_html__( 'Secondary (Footer)', 'edima' ),
		'edima' => esc_html__( 'EDiMA (Footer)', 'edima' ),
		'news' => esc_html__( 'News (Sub Menu)', 'edima' ),
		'legal' => esc_html__( 'Legal Info (Footer)', 'edima' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'edima_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'edima_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edima_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'edima_content_width', 640 );
}
add_action( 'after_setup_theme', 'edima_content_width', 0 );


/**
 * Widget areas
 */
function edima_widgets_init()
{
	register_sidebar([
		'name' => __('Page Sidebar', 'edima'),
		'id' => 'sidebar-1',
		'description' => 'Displays widgets in the sidebar of standard pages',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h6 class="text--upper margin--bottom-small">',
		'after_title' => '</h6>',
	]);
	register_sidebar([
		'name' => __('Footer Left', 'edima'),
		'id' => 'footer-left',
		'description' => 'Displays widgets in the left-third of the page footer (1st row on mobile devices)',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h6 class="text--upper margin--bottom-small">',
		'after_title' => '</h6>',
	]);
	register_sidebar([
		'name' => __('Footer Middle', 'edima'),
		'id' => 'footer-middle',
		'description' => 'Displays widgets in the middle-third of the page footer (2nd row on mobile devices)',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h6 class="text--upper margin--bottom-small">',
		'after_title' => '</h6>',
	]);
	register_sidebar([
		'name' => __('Footer Right', 'edima'),
		'id' => 'footer-right',
		'description' => 'Displays widgets in the right-third of the page footer (3rd row on mobile devices)',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h6 class="text--upper margin--bottom-small">',
		'after_title' => '</h6>',
	]);
	register_sidebar([
		'name' => __('Site Info Bar', 'edima'),
		'id' => 'site-info-left',
		'description' => 'Displays widgets in the site info bar at the bottom of the page footer',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	]);
	register_sidebar([
		'name' => __('News Story', 'edima'),
		'id' => 'expertise-area',
		'description' => 'Displays widgets in the sidebar on all news story pages',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h6 class="text--upper margin--bottom-small">',
		'after_title' => '</h6>',
	]);
	register_sidebar([
		'name' => __('Policy Area', 'edima'),
		'id' => 'fipriot-profile',
		'description' => 'Displays widgets in the sidebar on all policy area pages',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h6 class="text--upper margin--bottom-small">',
		'after_title' => '</h6>',
	]);
}

add_action('widgets_init', 'edima_widgets_init');

// unregister widgets we won't use
function remove_default_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Search');
//    unregister_widget('WP_Widget_Text');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
//    unregister_widget('WP_Nav_Menu_Widget');
}
add_action('widgets_init', 'remove_default_widgets', 11);

// remove <p> tags from text widget content, from 4.8 version WP adds these tags
remove_filter('widget_text_content', 'wpautop');

/**
 * Enqueue scripts and styles.
 */
function edima_scripts() {
	wp_enqueue_style( 'edima-style', get_stylesheet_uri() );
	wp_enqueue_style( 'edima-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
	wp_enqueue_style( 'edima-owl-carousel-css', '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css' );

	wp_enqueue_script( 'edima-jquery-3.2.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20170615', false );
	wp_enqueue_script( 'edima-jquery-ui-1.12.1', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '20170630', false );

	wp_enqueue_script( 'edima-parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '20170621', false );

	wp_enqueue_script( 'edima-vivus', 'http://cdn.jsdelivr.net/vivus/latest/vivus.min.js', array(), '20170615', true );

	wp_enqueue_script( 'edima-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20170616', true );

	wp_enqueue_script( 'edima-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'edima-page-nav', get_template_directory_uri() . '/js/pageNav.js', array(), '20170617', true );

	wp_enqueue_script( 'edima-news', get_template_directory_uri() . '/js/news.js', array(), '20170618', true );

	wp_enqueue_script( 'edima-fontawesome', 'https://use.fontawesome.com/6d6e2737fb.js', array(), '20170617', true );
	wp_enqueue_script( 'edima-owl-carousel-js', '/node_modules/owl.carousel/dist/owl.carousel.min.js', array(), '20170706', true );

	wp_enqueue_script( 'edima-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'edima-header', get_template_directory_uri() . '/js/header.js', array(), '20170615', true );
	wp_enqueue_script( 'edima-home', get_template_directory_uri() . '/js/home.js', array(), '20170706', true );

	wp_enqueue_script( 'edima-site-js', get_template_directory_uri() . '/js/site.js', array(), '20170621', true );
	wp_enqueue_script( 'edima-page-header-js', get_template_directory_uri() . '/js/page-header.js', array(), '20170621', true );
	wp_enqueue_script( 'edima-policy-area-js', get_template_directory_uri() . '/js/policy-area.js', array(), '20170621', true );
	wp_enqueue_script( 'edima-modal-js', get_template_directory_uri() . '/js/modal.js', array(), '20170629', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'edima_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function edima_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'edima_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//-------------------------------------------------

// EDiMA FUNCTiONS

require_once('helpers.php');
require_once('query_functions.php');

/**
 * Image sizes
 */
add_image_size( 'hero', 1500, 1000, true );
add_image_size( 'news-extract', 800, 500, true );
add_image_size( 'policy-area-graphic', 600, 600, true );
add_image_size( 'member-logo', 600, 600, false );
add_image_size( 'document-cover', 350, 490, true );

// AJAX related stuff
$ajaxurl = '';
$ajaxurl .= admin_url( 'admin-ajax.php');
wp_localize_script( 'edima-script', 'screenReaderText', array(
	'expand'   => __( 'expand child menu', 'twentysixteen' ),
	'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	'ajaxurl'  => $ajaxurl,
	'noposts'  => esc_html__('No older posts found', 'twentysixteen'),
	'loadmore' => esc_html__('Load more', 'twentysixteen')
) );

/**
 * Registers an editor stylesheet for the theme.
 */
function add_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'add_editor_styles' );


add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

/**
 * Mark (highlight) custom post type parent as active item in Wordpress Navigation. When you visit a custom post type's single page, the parent menu item (the post type archive) isn't marked as active. This code solves it by comparing the slug of the current post type with the navigation items, and adds a class accordingly.
 *
 * @param $classes
 * @param $item
 *
 * @return array
 */
function add_current_nav_class($classes, $item) {

	// Getting the current post details
	global $post;

	// Getting the post type of the current post
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite[slug];

	// Getting the URL of the menu item
	$menu_slug = strtolower(trim($item->url));

	// If the menu item URL contains the current post types slug add the current-menu-item class
	if (strpos($menu_slug,$current_post_type_slug) !== false) {

		$classes[] = 'current-menu-item';

	}

	// Return the corrected set of classes to be added to the menu item
	return $classes;

}

/**
 * Make custom post types appear on archive pages
 *
 * @param $query
 *
 * @return mixed
 */
function namespace_add_custom_types( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$query->set( 'post_type', array(
			'post', 'nav_menu_item', 'news_story'
		));
		return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Callback function to insert 'styleselect' drop down menu into the $buttons array
 *
 * @param $buttons
 *
 * @return mixed
 */
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' ); // mce_buttons_2 is the second row

/**
 * Remove p tags from around images on TinyMCE content
 *
 * @param $content
 *
 * @return mixed
 */
function filter_ptags_on_images($content) {
	$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images');
add_filter('the_content', 'filter_ptags_on_images');

/**
 * Callback function to add custom styles to the WP editor
 *
 * @param $init_array
 *
 * @return mixed
 */
function my_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = [
		// Each array child is a format with it's own settings
		[
			'title' => 'Uppercase',
			'block' => 'span',
			'classes' => 'text--upper',
			'wrapper' => true,
		],
		[
			'title' => 'Caption',
			'block' => 'div',
			'classes' => 'img-caption',
			'wrapper' => true,
		],
		[
			'title' => 'Lead Paragraph',
			'block' => 'div',
			'classes' => 'lead-paragraph',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Standard',
			'block' => 'blockquote',
			'classes' => '',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Standard, Pull Left',
			'block' => 'blockquote',
			'classes' => 'pull--left',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Standard, Pull Right',
			'block' => 'blockquote',
			'classes' => 'pull--right',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Blue',
			'block' => 'blockquote',
			'classes' => 'blockquote--blue',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Blue, Pull Left',
			'block' => 'blockquote',
			'classes' => 'blockquote--blue pull--left',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Blue, Pull Right',
			'block' => 'blockquote',
			'classes' => 'blockquote--blue pull--right',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Grey',
			'block' => 'blockquote',
			'classes' => 'blockquote--grey',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Grey, Pull Left',
			'block' => 'blockquote',
			'classes' => 'blockquote--grey pull--left',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Grey, Pull Right',
			'block' => 'blockquote',
			'classes' => 'blockquote--grey pull--right',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Green',
			'block' => 'blockquote',
			'classes' => 'blockquote--green',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Green, Pull Left',
			'block' => 'blockquote',
			'classes' => 'blockquote--green pull--left',
			'wrapper' => true,
		],
		[
			'title' => 'Blockquote - Green, Pull Right',
			'block' => 'blockquote',
			'classes' => 'blockquote--green pull--right',
			'wrapper' => true,
		],

	];
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

/**
 * Adds an active class to the link to the current date archive in .vertical-menu
 * The filter is added and removed right before and after the call to wp_get_archives() or wp_get_archives_cpt(),
 * so it doesn't affect other archive function calls
 *
 * @param $link_html
 *
 * @return mixed
 */
function date_archive_current_month_selector( $link_html ) { // Uses ARCHIVE_DATE as defined in content-news-date-archive.php
	if ( defined('ARCHIVE_DATE') && preg_match('/'.ARCHIVE_DATE.'/i', $link_html ) )
		$link_html = preg_replace('/<a/i', '<a class="active"', $link_html );
	return $link_html;
}


/**
 * Colour picker colour palette including custom brand colours
 *
 * @param $init
 *
 * @return mixed
 */
function my_mce4_options( $init ) {
	$default_colours = '
    "000000", "Black",
    "993300", "Burnt orange",
    "333300", "Dark olive",
    "003300", "Dark green",
    "003366", "Dark azure",
    "000080", "Navy Blue",
    "333399", "Indigo",
    "333333", "Very dark gray",
    "800000", "Maroon",
    "FF6600", "Orange",
    "808000", "Olive",
    "008000", "Green",
    "008080", "Teal",
    "0000FF", "Blue",
    "666699", "Grayish blue",
    "808080", "Gray",
    "FF0000", "Red",
    "FF9900", "Amber",
    "99CC00", "Yellow green",
    "339966", "Sea green",
    "33CCCC", "Turquoise",
    "3366FF", "Royal blue",
    "800080", "Purple",
    "999999", "Medium gray",
    "FF00FF", "Magenta",
    "FFCC00", "Gold",
    "FFFF00", "Yellow",
    "00FF00", "Lime",
    "00FFFF", "Aqua",
    "00CCFF", "Sky blue",
    "993366", "Brown",
    "C0C0C0", "Silver",
    "FF99CC", "Pink",
    "FFCC99", "Peach",
    "FFFF99", "Light yellow",
    "CCFFCC", "Pale green",
    "CCFFFF", "Pale cyan",
    "99CCFF", "Light sky blue",
    "CC99FF", "Plum",
    "FFFFFF", "White"
    ';

	$custom_colours = '
    "003b77", "EDiMA Blue",
    "cd0f36", "EDiMA Red",
    "00a0a3", "EDiMA Green",
    "EDAE49", "EDiMA Orange",
    "9d9d9d", "EDiMA Grey",
    "ebebeb", "EDiMA Light Grey",
    "5a5a5a", "EDiMA Dark Grey",
    "cfdae6", "EDiMA Light Blue"
    ';
	$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']';
	$init['textcolor_rows'] = 6; // expand colour grid to 6 rows
	return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');