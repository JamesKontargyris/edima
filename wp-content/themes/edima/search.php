<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package edima
 */

get_header(); ?>

	<div class="container container--with-padding">

		<?php
		if ( have_posts() ) : ?>

        <div class="container margin--bottom-large">
            <h1 class="page-title"><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'edima' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

        </div>
    </div>


<?php
get_footer();
