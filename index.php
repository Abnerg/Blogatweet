<?php
/**
 * http://twitteroauth.labs.poseurtech.com/connect.php
 * http://github.com/abraham/twitteroauth
 *
 */
 
session_start();
require_once('util.php');

// If access tokens and user are available, redirect to collections.

if (Util::validUser()) {
    if(Util::userIsBeta()) {
		header('Location: ./collections.php');
	}
	else {
		header('Location: ./create.php');
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>blogatweet | Home</title>
<link type="text/css" rel="stylesheet" href="css/blogatweet.css" />
<link type="text/css" rel="stylesheet" href="css/index.css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
</head>

<body>

<?php include('header.php'); ?>

<div id="page_content">

	<div class="left">
	  <div id="arrows">
			<img src="img/index-arrows-gray-green.png" />
		</div>
	</div>

  <div class="right">
    <div id="welcome">
    	<div><strong>Welcome to</strong></div>
    	<img src="img/banner.png" />
    </div>
    <div id="get-started">
      <h1>Get started!</h1>
      <div><?php echo Util::sign_in_with_twitter_button(); ?></div>
    </div>
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
