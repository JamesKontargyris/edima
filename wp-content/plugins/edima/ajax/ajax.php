<?php
function ajax_load_more_news() {

	global $wp_query;

	if( is_post_type_archive('news_story') || is_tax('news_categories') || is_tax('news_tags')) {

		wp_enqueue_script(
			'edima-ajax-load-more-news',
			plugins_url() . '/edima/ajax/js/load-more-news.js',
			['jquery'],
			'1.0',
			true
		);

		$offset       = get_option( 'posts_per_page' );

		if(is_date()) {

			$year         = get_the_date( _x( 'Y', 'monthly archives date format' ) );
			$month        = get_the_date( _x( 'n', 'monthly archives date format' ) );
			$news_stories = get_news_by_date( $year, $month, 999999, 0 );

		} elseif(is_tax('news_categories')) {

			$news_stories = get_news_by_news_category( $wp_query->get_queried_object()->term_id, 999999, 0 );

		} elseif(is_tax('news_tags')) {

			$news_stories = get_news_by_news_tag( $wp_query->get_queried_object()->term_id, 999999, 0 );

		} else {
			// Main news archive (landing) page
			$news_stories = get_latest_news(999999, 0);
			$offset = 7; // Change offset as this is a special case

		}

// Add some parameters for the JS.
		wp_localize_script(
			'edima-ajax-load-more-news',
			'ajax_load_more_news',
			[
				'maxStories' => $news_stories->found_posts,
				'url' => plugins_url() . '/edima/ajax/templates/load_more_news.php',
				'offset' => $offset,
				'isNewsArchive' => is_post_type_archive('news_story') ? 1 : 0,
				'isDate' => is_date() ? 1 : 0,
				'isTaxNewsCategories' => is_tax('news_categories') ? 1 : 0,
				'year' => is_date() ? get_the_date( _x( 'Y', 'monthly archives date format' ) ) : '',
				'month' => is_date() ? get_the_date( _x( 'n', 'monthly archives date format' ) ) : '',
				'cat_id' => is_tax('news_categories') ? $wp_query->get_queried_object()->term_id : '',
				'tag_id' => is_tax('news_tags') ? $wp_query->get_queried_object()->term_id : '',
				'postsPerPage' => get_option( 'posts_per_page' ),
			]
		);
	}

}
add_action('template_redirect', 'ajax_load_more_news');

