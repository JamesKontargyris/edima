<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="home-hero">
                <div class="home-hero__text-container">
                    <h2 class="text--blue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, rerum.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequatur dolore excepturi illo itaque, nostrum quidem? Cumque, est expedita, ipsa iste maiores, molestiae neque odit praesentium quas quis vero.</p>
                    <a href="#" class="button button--primary button--large">A Button</a>
                </div>
                <div class="home-hero__map-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home_hero_wires_map.svg" alt="EU map made up of connections" class="home-hero__map">
                </div>
            </div>

            Next bit here <br><br><br><br><br><br><br><br><br>



        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
