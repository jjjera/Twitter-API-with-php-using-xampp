<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2482500120-JJYcBWyA7EfgYf55osfO6MtgQ6tQ7fVNu8szcA3",
    'oauth_access_token_secret' => "1FGueCn1Q9Nz8Bv6gOe2QftPzX9Fp1RzjBn37uzagSWEw",
    'consumer_key' => "9vKGMdMFgMVulRmdspgLKTdqL",
    'consumer_secret' => "7KPhAVRXSXfO0oY0rLl6f8WXUKY71YXQcVvHdxth5KqVbKN3mY"
);

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
// https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=aneon&tweet_mode=extended
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=jerald george';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
