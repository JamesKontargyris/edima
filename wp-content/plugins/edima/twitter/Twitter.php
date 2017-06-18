<?php

class Twitter
{
	private $settings = [
	'oauth_access_token' => "480275907-3W7Q6DAVIoSaRJithG5gbcTmDG8ULp48un4JpC5Z",
	'oauth_access_token_secret' => "lRypRNdqJATHcEVL6DLKk6zKDFuAYpQOaSZqceakRJZt6",
	'consumer_key' => "ADdwTh4EqsJYL1EgpSwSkvpPc",
	'consumer_secret' => "UZSHUeE7B8nHd1cgunU8elgKB8eXSxFEzWuBArB2xqUnjgRhXm"
	];

	private $screen_name = 'edima_eu';

	public function get_latest_tweets($count = 3, $include_retweets = false)
	{
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$getfield = "?screen_name=$this->screen_name&count=$count&include_rts=$include_retweets";
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


