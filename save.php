<?php

session_start();
require_once('util.php');
	
if(!Util::validUser()) {
   return false;
}
   
if(empty($_POST)) return false;
if(empty($_POST['url']) || empty($_POST['screen_name']) || empty($_POST['text']) || empty($_POST['date']) || empty($_POST['image_url'])) return false;

$output = array();

$conn = new DBConnection();
$user = $conn->getUserByScreenName($_SESSION['user']->screen_name);
if(empty($_POST['collection_id']) || $_POST['collection_id'] == 0) {
	$collection = new Collection();
	$collection->user_id = $user->id;
	$collection->created = time();
	$collection->modified = time();
	$collection = $conn->saveCollection($collection);
} else {
	$collection = $conn->getCollectionById($_POST['collection_id']);
	if(!$collection) {
		$output['error'] = "Error: collection not found with given id.";
		echo json_encode($output);
		return false;
	}
	if($collection->user_id != $user->id) {
		// user cannot edit other users collection!
		$output['error'] = "Error: cannot edit another user's collection!";
		echo json_encode($output);
		return false;
	}
	$collection = $conn->saveCollection($collection);
}

// clear tweets for collection
$conn->deleteAllTweetsForCollection($collection->id);

$num_tweets = count($_POST['url']);
for($i = 0; $i < $num_tweets; $i++) {
	$tweet = new Tweet();
	$tweet->collection_id = $collection->id;
	$tweet->url = mysql_real_escape_string($_POST['url'][$i]);
	$tweet->screen_name = mysql_real_escape_string($_POST['screen_name'][$i]);
	$tweet->text = mysql_real_escape_string($_POST['text'][$i]);
	$tweet->image_url = mysql_real_escape_string($_POST['image_url'][$i]);
	$tweet->date = mysql_real_escape_string($_POST['date'][$i]);
	$conn->saveTweet($tweet);
}

$output['collection_id'] = $collection->id;
echo json_encode($output);

?>
