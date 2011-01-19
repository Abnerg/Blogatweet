<?php

session_start();
require_once('../twitteroauth/twitteroauth.php');
require_once('../config.php');

class Twitter {

  public static function connected() {
    return !(empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret']));
  }
  
  public static function connection() {
    /* Get user access tokens out of the session. */
    $access_token = $_SESSION['access_token'];

    /* Create a TwitterOauth object with consumer/user tokens. */
    return new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
  }

  public static function url() {
    return new TwitterUrls();
  }

  public $url = 'hi';

}

class TwitterUrl {
  public static function verifyCredentials() {
    return "account/verify_credentials";
  }
  public static function statusesShow($id, $fmt = 'json') {
    return "statuses/show/{$id}.{$fmt}";
  }
}
