<?php

require_once('util.php');

if(empty($_POST['names'])) {
	echo 'Can\'t find a conversation between nobody!';
	return;
}
$names = $_POST['names'];
$names = preg_replace('/[^A-Za-z0-9_,]/','',$names);

$namearray = explode(',',$names);

foreach($namearray as $name) {
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
		if($nummentions < 1 || count(array_intersect($namearray,$mentions)) < 1) {
			continue;
		}
		$entry = $xml->entry[$i];
		$imageurl = $entry->link[1]['href'];
		$author = NULL;
		$dateasstring = $entry->published;
		$tweetid = $entry->id;
		Util::generateTweet('convo',$tweetid,$imageurl,'from',$text,$author,$dateasstring);
	}
}



?>