<?php
function ajax_load_more_news() {

	if( is_post_type_archive('news_story') ) {

		wp_enqueue_script(
			'edima-ajax-load-more-news',
			plugins_url() . '/edima/AJAX/js/load-more-news.js',
			['jquery'],
			'1.0',
			true
		);

		if(is_date()) {
			$year = get_the_date( _x( 'Y', 'monthly archives date format' ) );
			$month = get_the_date( _x( 'n', 'monthly archives date format' ) );
			$news_stories = get_news_by_date($year, $month, 999999, $_POST['offset']);
			$offset = 5;
		} else {
			$news_stories = get_latest_news(999999, $_POST['offset']);
			$offset = 7;
		}

// Add some parameters for the JS.
		wp_localize_script(
			'edima-ajax-load-more-news',
			'ajax_load_more_news',
			[
				'maxStories' => $news_stories->found_posts,
				'url' => plugins_url() . '/edima/AJAX/templates/load_more_news.php',
				'offset' => $offset,
				'isDate' => is_date() ? 1 : 0,
				'isNewsArchive' => is_post_type_archive('news_story') ? 1 : 0,
				'year' => is_date() ? get_the_date( _x( 'Y', 'monthly archives date format' ) ) : '',
				'month' => is_date() ? get_the_date( _x( 'n', 'monthly archives date format' ) ) : '',
			]
		);
	}

}
add_action('template_redirect', 'ajax_load_more_news');

