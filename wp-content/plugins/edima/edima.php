<?php
/*
Plugin Name: Site Plugin for EDiMA website
Description: Site specific code changes for edima-eu.org
*/
/* Start Adding Functions Below this Line */

require_once(ABSPATH . 'vendor/autoload.php'); // autoload composer packages
require_once('twitter/Twitter.php'); // Twitter API class
require_once('archives-for-custom-post-types/archives-for-custom-post-types.php'); // Enable date archives for custom post types
require_once('AJAX/ajax.php'); // AJAX-related stuff

/* Stop Adding Functions Below this Line */