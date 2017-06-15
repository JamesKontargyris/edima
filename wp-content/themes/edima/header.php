<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edima
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,800,800i" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edima' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="site-header__content">

            <div class="site-header__mobile-menu-toggle-container">
                <a class="site-header__mobile-menu-toggle-icon" aria-controls="primary-menu" aria-expanded="false">
                    <?php echo file_get_contents(get_template_directory_uri() . '/img/icons/menu.svg'); ?>
                </a>
            </div>  <!-- /site-header__mobile-menu-toggle-container -->

            <div class="site-branding site-header__logo">
		        <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title">
		        <?php else : ?>
                    <p class="site-title">
			    <?php endif; ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	                <span class="site-header__logo-static"><?php echo file_get_contents(get_template_directory_uri() . '/img/edima_logo.svg'); ?></span>
	                <span class="site-header__logo-animated"><?php echo file_get_contents(get_template_directory_uri() . '/img/edima_logo_outline_animated.svg'); ?></span>
                </a>

                <?php if ( is_front_page() && is_home() ) : ?>
                    </h1>
                <?php else : ?>
                    </p>
                <?php endif; ?>
            </div> <!-- /site-header__logo -->

            <nav id="site-navigation" class="main-navigation site-header__nav" role="navigation">
		        <?php
		        wp_nav_menu( array(
			        'theme_location' => 'menu-1',
			        'menu_id'        => 'primary-menu',
                    'menu_class' => 'site-header__primary-menu',
		        ) );
		        ?>
            </nav> <!-- /site-header__nav-->

            <div class="site-header__sub-nav">
                <?php echo file_get_contents(get_template_directory_uri() . '/img/icons/search.svg'); ?> <span class="hide--xs hide--s"><?php echo file_get_contents(get_template_directory_uri() . '/img/icons/email.svg'); ?></span>
            </div> <!-- /site-header__sub-nav -->
        </div>

	</header><!-- site-header -->

	<div id="content" class="site-content">
