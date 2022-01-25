<?php

class Twitter
{
	private $settings = null;
	private $screen_name = 'DOTEurope';

	function __construct() {
		$this->settings = array(
			'oauth_access_token'        => $_ENV["TWITTER_OAUTH_ACCESS_TOKEN"],
			'oauth_access_token_secret' => $_ENV["TWITTER_OAUTH_ACCESS_TOKEN_SECRET"],
			'consumer_key'              => $_ENV["TWITTER_CONSUMER_KEY"],
			'consumer_secret'           => $_ENV["TWITTER_CONSUMER_SECRET"]
		);
	}


	public function get_latest_tweets($count = 3, $include_retweets = false)
	{
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$getfield = "?screen_name=" . get_theme_mod('twitter_handle', $this->screen_name) . "&count=$count&include_rts=$include_retweets";
		$requestMethod = 'GET';

		$twitter = new TwitterAPIExchange($this->settings);
		$tweets = json_decode($twitter->setGetfield($getfield)
		                              ->buildOauth($url, $requestMethod)
		                              ->performRequest(), true);

		return $tweets;
	}

	public function linkify_twitter_status($status_text)
	{
	  // linkify URLs
	  $status_text = preg_replace(
	    '/(https?:\/\/\S+)/',
	    '<a target="_blank" href="\1">\1</a>',
	    $status_text
	  );

	  // linkify twitter users
	  $status_text = preg_replace(
	    '/(^|\s)@(\w+)/',
	    '\1@<a target="_blank" href="http://twitter.com/\2">\2</a>',
	    $status_text
	  );

	  // linkify tags
	  $status_text = preg_replace(
	    '/(^|\s)#(\w+)/',
	    '\1#<a target="_blank" href="http://twitter.com/search?q=%23\2">\2</a>',
	    $status_text
	  );

	  return $status_text;
	}

}


