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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function edima_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'edima' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'edima' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'edima_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function edima_scripts() {
	wp_enqueue_style( 'edima-style', get_stylesheet_uri() );

	wp_enqueue_script( 'edima-jquery-3.2.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20170615', true );
	wp_enqueue_script( 'edima-vivus', 'http://cdn.jsdelivr.net/vivus/latest/vivus.min.js', array(), '20170615', true );

	wp_enqueue_script( 'edima-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20170616', true );

	wp_enqueue_script( 'edima-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'edima-page-nav', get_template_directory_uri() . '/js/pageNav.js', array(), '20170617', true );

	wp_enqueue_script( 'edima-fontawesome', 'https://use.fontawesome.com/6d6e2737fb.js', array(), '20170617', true );

	wp_enqueue_script( 'edima-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'edima-header', get_template_directory_uri() . '/js/header.js', array(), '20170615', true );

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
