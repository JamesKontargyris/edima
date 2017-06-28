<?php
/**
 * Helper functions
 */

/**
 * Display breadcrumbs
 */
function breadcrumbs()
{
	bcn_display();
}

// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
// This code based on wp_nav_menu's code to get Menu ID from menu slug

function get_menu_items($menu_name = 'primary')
{
	$items = [];

	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		$menu_items = wp_get_nav_menu_items($menu->term_id);

		foreach ( (array) $menu_items as $key => $menu_item ) {
			$items[$key]['title'] = $menu_item->title;
			$items[$key]['url'] = $menu_item->url;
		}
	}

	return $items;
}

/**
 * Process categories and lay them out in a nice, linked row with commas
 *
 * @param array $categories
 * @param string $category_item_class
 * @param string $category_link_class
 *
 * @return string
 */
function inline_categories($categories = [], $category_item_class = 'news-story__category', $category_link_class = 'news-story__category-link')
{
	$categories_output = "";

	if(is_array($categories)) {
		foreach($categories as $category) {
			$categories_output .= "<span class=\"$category_item_class\"><a class=\"$category_link_class\" href=\"" . get_category_link($category->term_id) . "\">" . $category->name . "</a></span>"; // CSS :after pseudo-class takes care of commas
		}
	}

	return $categories_output;
}

/**
 * Truncate text
 *
 * @param $text
 * @param $limit
 *
 * @return string
 */
function limit_text($text, $limit) {
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos = array_keys($words);
		$text = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}

// SOCIAL MEDIA LINKS
function social_media_link_twitter($url = '', $title = '', $via = 'EDiMA_EU', $additional_classes = '')
{
	$link = '';

	$link .= '<a href="https://twitter.com/intent/tweet?source=' . urlencode($url) . '&text=' . urlencode($title) . ' - ' . urlencode($url) . '&via=' . $via . '" target="_blank" alt="Share on Twitter" title="Share on Twitter" class="social-media__link social-media__link-twitter ' . $additional_classes . '">';
	$link .= '<i class="fa fa-twitter"></i>';
	$link .= '</a>';

	return $link;
}

function social_media_link_facebook($url = '', $title = '', $additional_classes = '')
{
	$link = '';

	$link .= '<a href="https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url) . '&title=' . urlencode($title) . '" target="_blank" alt="Share on Facebook" title="Share on Facebook" class="social-media__link social-media__link-facebook ' . $additional_classes . '">';
	$link .= '<i class="fa fa-facebook"></i>';
	$link .= '</a>';

	return $link;
}

function social_media_link_linkedin($url = '', $title = '', $summary = '', $additional_classes = '')
{
	$link = '';

	$link .= '<a href="http://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($url) . '&title=' . $title . '&summary=' . $summary . '" target="_blank" alt="Share on LinkedIn" title="Share on LinkedIn" class="social-media__link social-media__link-linkedin ' . $additional_classes . '">';
	$link .= '<i class="fa fa-linkedin"></i>';
	$link .= '</a>';

	return $link;
}

function social_media_link_email($url = '', $description = '', $title = '', $additional_classes = '')
{
	$link = '';

	$link .= '<a href="mailto:?body=' . $description . '%0A%0A' . urlencode($url) . '&subject=' . $title . '" alt="Share by Email" title="Share by Email" class="social-media__link social-media__link-email ' . $additional_classes . '">';
	$link .= '<i class="fa fa-envelope-o"></i>';
	$link .= '</a>';

	return $link;
}

function month_number_to_name($month_number = 0) {
	$dateObj   = DateTime::createFromFormat('!m', $month_number);
	return $dateObj->format('F');
}

function str_to_url($str)
{
	$url = str_replace('http://', '', $str);

	return 'http://' . $url;
}

// retrieves the attachment ID from the file URL
function get_id_from_img_url($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));
	return $attachment[0];
}