<?php
/*
Plugin Name: Site Plugin for EDiMA website
Description: Site specific code changes for edima-eu.org
*/
require_once(ABSPATH . 'vendor/autoload.php'); // autoload composer packages
require_once('twitter/Twitter.php'); // Twitter API class
require_once('archives-for-custom-post-types/archives-for-custom-post-types.php'); // Enable date archives for custom post types
require_once( 'ajax/ajax.php' ); // AJAX-related stuff

/* Shortcodes */
function display_members_sc($atts)
{
	$a = shortcode_atts( array(
		'columns' => 2,
	), $atts );

	$string = '';

	$members = get_members();
	if ( $members->have_posts() ) :

		while ( $members->have_posts() ) : $members->the_post();
			$string .= '<div style="float:left; width:' . 100 / $a['columns'] . '%">';
			$string .= '<div class="text--white" style="display:inline-block; padding-bottom:1rem;">' . get_the_title() . '</div>';
			$string .= '</div>';
		endwhile;
	endif;
	wp_reset_postdata();

	return $string;
}
add_shortcode( 'display_members', 'display_members_sc' );