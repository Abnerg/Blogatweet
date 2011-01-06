<?php

	session_start();
	require_once('util.php');
	
	if(!Util::validUser()) {
		header('Location: index.php');
	}
	if(!Util::userIsBeta()) {
		header('Location: index.php');
	}

	$conn = new DBConnection();
	$user = $conn->getUserByScreenName($_SESSION['user']->screen_name);
	$collections = $conn->getCollectionsByUserId($user->id);
	$collections_wrapper = array();
	if(!$collections) $collections = array();
	foreach($collections as $collection) {
		$wrapper = array();
		$wrapper['collection'] = $collection;
		$tweets = $conn->getTweetsByCollectionId($collection->id);
		$wrapper['contributors'] = array();
		if($tweets) {
			foreach($tweets as $tweet) {
				$wrapper['contributors'][] = '@'.$tweet->screen_name;
			}
			$wrapper['contributors'] = implode(', ',array_unique($wrapper['contributors']));
		}
		$collections_wrapper[] = $wrapper;
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>blogatweet | Collections</title>
<link type="text/css" rel="stylesheet" href="css/blogatweet.css" />
<link type="text/css" rel="stylesheet" href="css/collections.css" />
<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#collections tr:odd').addClass('odd');
	mpmetrics.track("collections - view");
});
</script>
</head>

<body>

<?php include('header.php'); ?>


<div id="page_content">
   
   <?php
    	if(Util::userIsBeta()) {
    ?>
    <div id="beta_create_header">
	<span class="title">Blogatweet Beta</span>
	<span class="link"><a href="create.php">Create New Collection &raquo;</a></span>
    </div>
    <?php
	}
    ?>
   
   <h1>Collections</h1>
   <div>
         Hey <?php echo $_SESSION['user']->name; ?>, thanks for being a Beta user.
         <?php if(!empty($collections)) { ?>
         Here are your saved collections.  Create, update, and delete as you like.  Happy tweeting!
         <?php } else { ?>
         No saved collections? <a href="create.php">Start collecting tweets!</a>
         <?php } ?>
   </div>
   
   <div>
      <table id="collections">
         <tr><th>Created</th><th>Modified</th><th>Contributors</th><th></th></tr>
         <?php
            foreach($collections_wrapper as $collection_wrapper) {
               $collection = $collection_wrapper['collection'];
               $contributors = $collection_wrapper['contributors'];
         ?>
         <tr>
            <td><a href="create.php?for_collection_id=<?php echo $collection->id; ?>"><?php echo date('M jS, Y g:i A',$collection->created); ?></a></td>
            <td><?php echo date('M jS, Y g:i A',$collection->modified); ?></td>
            <td><?php echo $contributors; ?></td>
            <td><a href="">Delete</a></td>
         </tr>
         <?php
            }
         ?>
      </table>
   </div>
</div>

<?php include('footer.php'); ?>

<script type='text/javascript'> var mp_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://'); document.write(unescape('%3Cscript src="' + mp_protocol + 'api.mixpanel.com/site_media/js/api/mixpanel.js" type="text/javascript"%3E%3C/script%3E')); </script> <script type='text/javascript'> try {  var mpmetrics = new MixpanelLib('f70c800275bca93f63804fce44e7706f'); } catch(err) { null_fn = function () {}; var mpmetrics = {  track: null_fn,  track_funnel: null_fn,  register: null_fn,  register_once: null_fn, register_funnel: null_fn }; } </script>
<script type="text/javascript">

 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-625548-3']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type =
'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
 })();

</script>
</body>
</html>
