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