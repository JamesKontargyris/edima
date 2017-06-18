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

		$args = [
			'post_status' => 'publish',
			'post_type' => 'news_story',
			'orderby' => 'date',
			'order' => 'DESC',
			'offset' => 0,
		];

		$news_stories = new WP_Query($args);

// Add some parameters for the JS.
		wp_localize_script(
			'edima-ajax-load-more-news',
			'ajax_load_more_news',
			[
				'maxStories' => $news_stories->found_posts,
				'url' => plugins_url() . '/edima/AJAX/templates/load_more_news.php',
				'offset' => 7,
			]
		);
	}

}

add_action('template_redirect', 'ajax_load_more_news');

