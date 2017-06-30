<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package edima
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="container container--with-padding">

                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'edima' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Use the links above to explore the site.', 'edima' ); ?></p>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
            </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
