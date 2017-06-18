<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

get_header(); ?>

<?php get_template_part('template-parts/partials/partial', 'news-sub-nav'); ?>

<?php if ( have_posts() ) : ?>

    <?php get_template_part('template-parts/partials/partial', 'news-archive-style'); ?>

    <div class="stripe stripe--border-bottom">
        <div class="stripe__content">
            <div class="news-archive news-archive__hero-story">
                <div class="news-archive__hero-story__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tech.jpg" alt="">
                </div>
                <div class="news-archive__hero-story__content">
                    <h5 class="text--upper text--red margin--small-bottom">Latest News</h5>
                    <h2 class="news-archive__hero-story__headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, obcaecati</h2>
                    <div class="news-archive__hero-story__meta text--upper">18 June 2017 in <a href="#">Press Releases</a></div>
                    <div class="news-archive__hero-story__extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at corporis cupiditate est et eum id, ipsam itaque neque nobis odit perspiciatis quas quo rerum, soluta temporibus voluptatem! Expedita, totam.</div>
                    <a href="#" class="button button--primary">Read More</a>
                </div>
            </div>
        </div>

    </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">






			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
