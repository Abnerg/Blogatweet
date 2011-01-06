<?php
/*
 * @file
 * A single location to store utility functions.
 */

require_once('dbconnection.php');

class Util {

	static function validUser() {
		return !empty($_SESSION['access_token']) && !empty($_SESSION['access_token']['oauth_token']) && !empty($_SESSION['access_token']['oauth_token_secret']) && !empty($_SESSION['user']);
	}
	
	static function userIsBeta() {
		$conn = new DBConnection();
		if(empty($_SESSION['user']) || empty($_SESSION['user']->screen_name)) return false;
		$user = $conn->getUserByScreenName($_SESSION['user']->screen_name);
		if(empty($user)) return false;
		return $user->is_beta;
	}
	
	static function callTwitterAPI($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$xml = simplexml_load_string(curl_exec($ch));
		return $xml;
	}
	
	static function getTwitterURL($type,$search,$numresults = 50) {
		switch($type) {
		case 'about':
			$url = 'http://search.twitter.com/search.atom?q='.$search.'&rpp='.$numresults;
			break;
		case 'reply':
			$query = 'to%3A';
			$url = 'http://search.twitter.com/search.atom?q='.$query.$search.'&rpp='.$numresults;
			break;
		case 'mention':
			$query = '%40';
			$url = 'http://search.twitter.com/search.atom?q='.$query.$search.'&rpp='.$numresults;
			break;
		case 'from':
		default:
			$url = 'http://twitter.com/statuses/user_timeline.atom?screen_name='.$search.'&count='.$numresults;
		}
		return $url;
	}
	
	static function generateHTMLTweetsForCollection($collection) {
		$conn = new DBConnection();
		$tweets = $conn->getTweetsByCollectionId($collection->id);
		if(!$tweets) return false;
		print_r($tweets);
		foreach($tweets as $tweet) {
			Util::generateTweet('convo',$tweet->url,$tweet->image_url,'singlet',$tweet->text,$tweet->screen_name,$tweet->date);
		}
	}
	
	static function generateTweet($for,$tweetid,$imageurl,$type,$text,$author,$dateasstring) {
	?>
	   <div class="tweet">
			<?php if($for === 'search') { ?>
			<input class="to_convo" style="float:left; height:48px; width:10px;" type="checkbox" />
			<?php } ?>
			<div class="image">
				<img src="<?php echo $imageurl; ?>" />
			</div>
			<div class="text">
				<span class="content"><?php echo Util::formatTweet($type,$text,$author); ?></span>
				<span class="timedate" unixtime="<?php echo strtotime($dateasstring); ?>">
					<a target="_blank" href="<?php echo Util::pullURLfromID($tweetid); ?>"><?php echo date('g:i A M jS, Y',strtotime($dateasstring)); ?></a>
				</span>
			</div>
		</div>
	<?php
	}
	
	static function pullURLfromID($id) {
		$pattern = '/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/';
		$matches = array();
		preg_match($pattern,$id,$matches);
		return $matches[0];
	}
	
	static function formatTweet($type,$text,$author) {
		$text = Util::wrapURLs($text);
		$text = Util::wrapRTs($text);
		$text = Util::splitAuthorText($type,$text,$author);
		return $text;
	}
	
	static function wrapURLs($text) {
		$pattern = '/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/';
		$replacement = '<a target="_blank" href="$1">$1</a>';
		return preg_replace($pattern, $replacement, $text);
	}
	
	static function wrapRTs($text) {
		$pattern = '/(@)(\w*)/';
		$replacement = '<a class="retweet" screen_name="$2" href="javascript:void(0);">$1$2</a>';
		return preg_replace($pattern, $replacement, $text);
	}
	
	static function splitAuthorText($type,$text,$author) {
		if($type === 'from') {
			// apparently twitter statuses can have newlines
			$text = preg_replace('/\n*/','',$text);
			$pattern = '/(^\w*)(:)(.*)/';
			$replacement = '<a class="author" author="$1" target="_blank" href="http://twitter.com/$1">$1</a><span class="tweet_text">$3</span>';
			return preg_replace($pattern, $replacement, $text);
		}
		if($type === 'singlet') {
			return '<a class="author" author="'.$author.'" href="http://twitter.com/'.$author.'/" target="_blank">'.$author.'</a>&nbsp;'.'<span class="tweet_text">'.$text.'</span>';
		}
		$pattern = '/(http:\/\/twitter\.com\/)(\w*)/';
		$replacement = '<a class="author" author="$2" target="_blank" href="$1$2">$2</a>';
		$author = preg_replace($pattern, $replacement, $author);
		return $author.' '.'<span class="tweet_text">'.$text.'</span>';
	}	

}
