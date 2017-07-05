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
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edima' ); ?></a>

    <header id="masthead" class="site-header <?php if(is_front_page()) :?> site-header--home <?php endif; ?>" role="banner">
        <div class="site-header__content">


            <div class="site-header__mobile-menu-toggle-container">
                <a class="site-header__mobile-menu-toggle-icon" aria-controls="primary-menu" aria-expanded="false">
                    <?php echo file_get_contents(get_template_directory_uri() . '/img/icons/menu.svg'); ?>
                </a>
            </div>  <!-- /site-header__mobile-menu-toggle-container -->

            <div class="site-branding site-header__logo">
		        <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title margin--none">
		        <?php else : ?>
                    <p class="site-title margin--none">
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
			        'theme_location' => 'primary',
			        'menu_id'        => 'primary-menu',
                    'menu_class' => 'site-header__primary-menu',
                    'depth' => '1',
		        ) );
		        ?>
            </nav> <!-- /site-header__nav-->

            <div class="site-header__sub-nav">

                <a href="#" class="search-form-trigger"><?php echo file_get_contents(get_template_directory_uri() . '/img/icons/search.svg'); ?></a>

                <span class="hide--xs hide--s"><a href="/contact-us" class="modal-trigger" data-modal-id="#header-contact-modal"><?php echo file_get_contents(get_template_directory_uri() . '/img/icons/email.svg'); ?></a></span>

                <?php get_template_part('template-parts/partials/partial', 'search-form'); ?>
            </div> <!-- /site-header__sub-nav -->
        </div>

        <div id="header-contact-modal" class="modal">
            <div class="modal__content">
                A contact form appears here, making it quicker and easier for users to send EDiMA an email than via the contact us form.
                <div class="modal__close"></div>
            </div>
        </div>

	</header><!-- site-header -->

	<div id="content" class="site-content">
