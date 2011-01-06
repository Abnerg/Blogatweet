<?php

ob_start();

require_once('util.php');

$url = $_POST['url'];
$pattern = '/^http:\/\/twitter.com\/[A-Za-z0-9_]+\/status\/[0-9]+$/';
$matches = array();
$nummatches = preg_match($pattern,$url,$matches);
if($nummatches < 1) {
	ob_end_clean();
	echo json_encode(array('error'=>'Hm, this url doesn\'t look like a twitter status url.'));
	return;
}
$pattern = '/^http:\/\/twitter.com\/[A-Za-z0-9_]+\/status\//';
$id = preg_replace($pattern,'',$matches[0]);
$twitterurl = 'http://twitter.com/statuses/show/'.$id.'.xml';
$xml = Util::callTwitterAPI($twitterurl);

if($xml->error) {
	ob_end_clean();
	echo json_encode(array('error'=>$xml->error.''));
	return;
}

$imageurl = $xml->user->profile_image_url;
$author = $xml->user->screen_name;
$text = $xml->text;
$dateasstring = $xml->created_at;
Util::generateTweet('convo','http://twitter.com/'.$author.'/status/'.$id,$imageurl,'singlet',$text,$author,$dateasstring);

$tweet = ob_get_contents();

ob_end_clean();

echo json_encode(array('tweet'=>$tweet));
