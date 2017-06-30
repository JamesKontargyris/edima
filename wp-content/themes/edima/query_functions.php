<?php

function get_latest_news( $count = 3, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'news_story',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
	];

	return new WP_Query( $args );
}

function get_news_by_news_category( $tax_id = '', $count = 3, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'news_story',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'tax_query'      => [
			[
				'taxonomy' => 'news_categories',
				'field'    => 'term_id',
				'terms'    => $tax_id,
			]
		]
	];

	return new WP_Query( $args );
}

function get_news_by_news_tag( $tax_id = '', $count = 3, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'news_story',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'tax_query'      => [
			[
				'taxonomy' => 'news_tags',
				'field'    => 'term_id',
				'terms'    => $tax_id,
			]
		]
	];

	return new WP_Query( $args );
}

function get_news_by_date( $year = 0, $month = 0, $count = 3, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'news_story',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'date_query'     => [
			[
				'year'  => $year,
				'month' => $month
			]
		]
	];

	return new WP_Query( $args );
}

function get_news_by_policy_area( $policy_area_id = 0, $count = - 1, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'news_story',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'meta_key'       => 'policy_areas',
		'meta_value'     => '"' . $policy_area_id . '"',
		'meta_compare'   => 'LIKE'
	];

	return new WP_Query( $args );
}

function get_policy_areas( $count = - 1, $offset = 0, $ignore_ids = [], $random = false ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'policy_area',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
	];

	if ( $random ) {
		$args['orderby'] = 'rand';
	}

	return new WP_Query( $args );
}

function get_members( $count = - 1, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'member',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'orderby'        => 'post_title',
		'order'          => 'ASC',
	];

	return new WP_Query( $args );
}

function get_documents( $featured = false, $count = - 1, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'document',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'order'          => 'ASC',
		'orderby'        => 'file_date',
	];

	if ( ! $featured ) {
		$args['meta_query'] = [
			'featured' => [
				'key'     => 'featured',
				'value'   => 'yes',
				'compare' => 'NOT LIKE',
			],
			'file_date' => [
				'key' => 'file_date',
			]
		];
	} else {
		$args['meta_query'] = [
			[
				'key'     => 'featured',
				'value'   => 'yes',
				'compare' => 'LIKE',
			]
		];
	}

	return new WP_Query( $args );
}

function get_documents_by_policy_area( $policy_area_id = 0, $count = - 1, $offset = 0, $ignore_ids = [] ) {

	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'document',
		'orderby'        => 'date',
		'order'          => 'ASC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'meta_key'       => 'policy_areas',
		'meta_value'     => '"' . $policy_area_id . '"',
		'meta_compare'   => 'LIKE'
	];

	return new WP_Query( $args );
}

function get_documents_by_document_category( $tax_id = '', $count = 3, $offset = 0, $ignore_ids = [] ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'document',
		'orderby'        => 'date',
		'order'          => 'ASC',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
		'tax_query'      => [
			[
				'taxonomy' => 'document_categories',
				'field'    => 'term_id',
				'terms'    => $tax_id,
			]
		]
	];

	return new WP_Query( $args );
}