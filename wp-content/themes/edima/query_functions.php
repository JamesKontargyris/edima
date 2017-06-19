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

function get_news_by_news_category($tax_id = '', $count = 3, $offset = 0, $ignore_ids = []) {
	$args = [
		'post_status' => 'publish',
		'post_type' => 'news_story',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
		'post__not_in' => $ignore_ids,
		'offset' => $offset,
		'tax_query' => [
			[
				'taxonomy' => 'news_categories',
				'field' => 'term_id',
				'terms' => $tax_id,
			]
		]
	];

	return new WP_Query($args);
}

function get_news_by_news_tag($tax_id = '', $count = 3, $offset = 0, $ignore_ids = []) {
	$args = [
		'post_status' => 'publish',
		'post_type' => 'news_story',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
		'post__not_in' => $ignore_ids,
		'offset' => $offset,
		'tax_query' => [
			[
				'taxonomy' => 'news_tags',
				'field' => 'term_id',
				'terms' => $tax_id,
			]
		]
	];

	return new WP_Query($args);
}