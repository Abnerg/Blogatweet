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
$text = findURLs($text);
$pattern = '/(@)(\w*)/';
$replacement = '$1<a class="retweet" href="http://twitter.com/$2">$2</a>';
$text = preg_replace($pattern, $replacement, $text);
$pattern = '/(#)(\w*)/';
$replacement = '<a class="retweet" href="http://twitter.com/search?q=%23$2">$1$2</a>';
$text = preg_replace($pattern, $replacement, $text);
$dateasstring = $xml->created_at;

?>
   <div class="tweet">
    	<div class="image">
        	<a href="http://twitter.com/<?php echo $author; ?>"><img src="<?php echo $imageurl; ?>" /></a>
        </div>
        <div class="text">
       		<span class="content">
            	<a class="author" href="http://twitter.com/<?php echo $author; ?>"><?php echo $author; ?></a>&nbsp;<?php echo $text; ?>
            </span>
            </span>
			<span class="timedate" unixtime="<?php echo strtotime($dateasstring); ?>">
				<a target="_blank" href="<?php echo 'http://twitter.com/'.$author.'/status/'.$id; ?>">
					<?php echo date('g:i A M jS, Y',strtotime($dateasstring)); ?>
                </a>
            </span>
        </div>
    </div>
<?php

$tweet = ob_get_contents();

ob_end_clean();

echo json_encode(array('tweet'=>$tweet));
