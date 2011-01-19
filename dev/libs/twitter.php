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

}

class TwitterUrl {
  public static function verifyCredentials() {
    return "account/verify_credentials";
  }
  public static function statusesShow($id, $fmt = 'json', $trim_user = true, $include_entities = true) {
    return "statuses/show/{$id}.{$fmt}?trim_user={$trim_user}&include_entities={$include_entities}";
  }
  public static function statusesRetweet($id, $fmt = 'json') {
    return "statuses/retweet/{$id}.{$fmt}";
  }
  public static function statusesRetweets($id, $fmt = 'json') {
    return "statuses/retweets/{$id}.{$fmt}";
  }
  public static function statusesRetweetedBy($id, $fmt = 'json') {
    return "statuses/{$id}/retweeted_by.{$fmt}";
  }
  public static function statusesRetweetedByIds($id, $fmt = 'json') {
    return "statuses/{$id}/retweeted_by/ids.{$fmt}";
  }

}
