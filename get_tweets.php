<?php

require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
require_once('util.php');

session_start();

$search = $_GET['search'];
$type = $_GET['type'];
if(strlen($search) < 1 && strcmp($type,'favorites') != 0) {
	echo 'Can\'t search for nothing - a screen name is needed!';
	return false;
}

if(strcmp($type,'between') == 0) {
	$search = preg_replace('/[^A-Za-z0-9_,]/','',$search);
	$names = explode(',',$search);
	Tweets::between($names);
}
elseif(strcmp($type,'favorites') == 0) {
	/* Get user access tokens out of the session. */
	$access_token = $_SESSION['access_token'];
	
	/* Create a TwitterOauth object with consumer/user tokens. */
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	
	/* If method is set change API call made. Test is called by default. */
	$content = $connection->get('favorites');
	
	Tweets::fromFavorites($content);

}
else {
	$search = preg_replace('/\W*/','',$search);
	Tweets::get($type,$search);
}


class Tweets {
	/*
	 * get tweets between a name array of screennames
	 */
	public static function between($names) {
	
		foreach($names as $name) {
			$url = Util::getTwitterURL('from',$name,200);
			$xml = Util::callTwitterAPI($url);

			if($xml->error) {
				echo $xml->error;
				return;
			}
			for($i = 0; $i < count($xml->entry); $i++) {
				$text = $xml->entry[$i]->title;
				$mentions = array();
				$nummentions = preg_match_all('/@[A-Za-z0-9_]+/',$text,$mentions);
				$mentions = preg_replace('/@/','',$mentions[0]);
				if($nummentions < 1 || count(array_intersect($names,$mentions)) < 1) {
					continue;
				}
				$entry = $xml->entry[$i];
				$imageurl = $entry->link[1]['href'];
				$author = NULL;
				$dateasstring = $entry->published;
				$tweetid = $entry->id;
				Util::generateTweet('search',$tweetid,$imageurl,'from',$text,$author,$dateasstring);
			}
		}
	
	}
	
	/*
	 * get tweets favorited by a user
	 */
	public static function fromFavorites($json) {
	
		foreach($json as $tweet) {
			$text = $tweet->{'text'};
			$tweetid = $tweet->{'id'};
			$imageurl = $tweet->{'user'}->{'profile_image_url'};
			$author = $tweet->{'user'}->{'screen_name'};
			$dateasstring = $tweet->{'created_at'};
			Util::generateTweet('search',$tweetid,$imageurl,$type,$text,$author,$dateasstring);
		}

	}
	
	/*
	 * get tweets by type with search
	 */
	public static function get($type,$search) {

		$url = Util::getTwitterURL($type,$search);
		$xml = Util::callTwitterAPI($url);
		
		if($xml->error) {
			echo $xml->error;
			return;
		}
		if(count($xml->entry) < 1) {
			echo 'No tweets found.';
			return;
		}
		foreach($xml->entry as $entry) {
			$imageurl = $entry->link[1]['href'];
			$author = $type === 'from' ? NULL : $entry->author->uri;
			$text = $entry->title;
			$dateasstring = $entry->published;
			$tweetid = $type === 'from' ? $entry->id : $entry->link[0]['href'];
			Util::generateTweet('search',$tweetid,$imageurl,$type,$text,$author,$dateasstring);
		}
	
	}
}
