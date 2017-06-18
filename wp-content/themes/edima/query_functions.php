<?php

function get_latest_news($count = 3, $offset = 0, $ignore_ids = []) {
	$args = [
		'post_status' => 'publish',
		'post_type' => 'news_story',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
		'post__not_in' => $ignore_ids,
		'offset' => $offset,
	];

	return new WP_Query($args);
}