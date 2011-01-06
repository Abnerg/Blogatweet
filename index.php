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
<script type="text/javascript">
var sortTweets = function(from,order) {
        var times = new Array();
        var orderedtweets = '';
        var tweethtml = '';
        from.find('div.tweet div.text span.timedate').each(function() {
                times.push($(this).attr('unixtime'));
        });
        times.sort();
        if(order === 'dsc') times.reverse();
        for(var i = 0; i < times.length; i++) {
                tweethtml = from.find('span.timedate[unixtime="'+times[i]+'"]').parents('div.tweet').html();
                orderedtweets = orderedtweets + '<div class="tweet">' + tweethtml + '</div>';
        }
        from.html(orderedtweets);
};
var updateEmbeddable = function() {
        $('#processing div.tweets').html($('#conversation').html());
        $('#processing div.tweets').find('span.delete').each(function() { $(this).remove(); });
        $('#processing div.tweets').find('span.timedate').each(function() { $(this).removeAttr('unixtime'); });
        $('#processing div.tweets').find('a.retweet').each(function() {
                $(this).attr('href','http://twitter.com/'+$(this).attr('screen_name')).attr('target','_blank').removeClass('retweet');
        });
        var html = $('#processing div.tweets').html();
        var style = $('#processing div.style').text();
        $('#code').text('<div id="BLOGATWEET">'+style+'<div class="tweets">'+html+'</div><div>Powered by <a href="http://blogatweet.com">blogatweet</a></div></div>');
};
var makeTweetsDeleteable = function() {
        $('span.delete').unbind('click').click(function() {
                $(this).parents('div.tweet').remove();
                $('#conversation div.tweet').removeClass('every_other_tweet');
                $('#conversation div.tweet:odd').addClass('every_other_tweet');
		updateEmbeddable();
        });
};
var selectAll = function(element) {
        /* http://stackoverflow.com/questions/985272/jquery-selecting-text-in-an-element-akin-to-highlighting-with-your-mouse#answer-987376 */
    var text = document.getElementById(element);
    if ($.browser.msie) {
        var range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if ($.browser.mozilla || $.browser.opera) {
        var selection = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    } else if ($.browser.safari) {
        var selection = window.getSelection();
        selection.setBaseAndExtent(text, 0, text, 1);
    }
};

var deletebutton = '<span class="delete">[delete]</span>';

$(document).ready(function() {
	mpmetrics.track("hompage - hit");
	$('a.twitter-login').click(function() {
		mpmetrics.track("hompage - twitter signin");
	});
	$('#add').click(function() {
		var status_url = $('#url').val();
		if(status_url.length < 1) return false;
		$('#loading').show();
		$.post('get_tweet.php', {url: status_url}, function(data) {
			$('#loading').hide();
			if(data.error != null) {
				$('#add-error').text(data.error).slideDown('slow').delay(4000).slideUp('normal');
				return false;
			}
			$('#url').val('');
			$('#conversation').append(data.tweet);
			$('#conversation .tweet:last').find('div.text').append(deletebutton);
			sortTweets($('#conversation'),'asc');
			makeTweetsDeleteable();
			updateEmbeddable();
			mpmetrics.track("hompage - tweet added");
		}, 'json');
	});
	$('#url').keypress(function(e) {
		if(e.which === 13) $('#add').click();
	});

        $('#code').click(function() {
		mpmetrics.track("hompage - embed code selected");
                selectAll('code');
        });

	updateEmbeddable();

});
</script>
</head>

<body>

<?php include('header.php'); ?>

<div id="page_content">
	<div class="row">
		<div id="top-left">
    			<div>
        			<div><strong>Welcome to</strong></div>
        			<img src="img/banner.png" />
        		</div>
        	</div>
    		<div id="top-right">
			Get started!
        		<a class="twitter-login" href="./redirect.php"><img src="./images/lighter.png" alt="Sign in with Twitter"/></a>
    		</div>
	</div>

	<div class="row">
		<div id="bottom-left">
			<div id="arrows">
				<img src="img/index-arrows-gray-green.png" />
			</div>
		</div>

		<div id="bottom-right">
			<div id="demo">
				<div id="conversation_wrapper">
					<h2>Conversation</h2>
					<label for="url">Add tweets by status url</label>
					<div>
						<input id="url" type="text" />
						<input id="add" type="button" value="add" />
						<img id="loading" class="loading" src="img/loading.gif" />
					</div>
					<div id="add-error"></div>
					<div id="conversation"></div>				
				</div>

				<?php include 'html/embeddable.html.inc'; ?>
			</div>
			<div id="more">
				Want to do more? <a class="twitter-login" href="./redirect.php"><img src="./images/lighter.png" alt="Sign in with Twitter"/></a>
			</div>	
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
