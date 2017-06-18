<?php

function get_latest_news($count = 3, $ignore_ids = []) {
	$args = [
		'post_status' => 'publish',
		'post_type' => 'news_story',
		'orderby' => 'date',
		'posts_per_page' => $count,
		'post__not_in' => $ignore_ids,
	];

	return new WP_Query($args);
}