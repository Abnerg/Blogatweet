<?php

	session_start();
	require_once('util.php');
	require_once('amazon-fps/src/Amazon/CBUI/Samples/.config.inc.php');
	require_once('amazon-fps/src/Amazon/CBUI/CBUISingleUsePipeline.php');
	
	if(!Util::validUser()) {
		header('Location: index.php');
	}
	
	if(!empty($_GET) && !empty($_GET['for_collection_id'])) {
		
		$collection_id = $_GET['for_collection_id'];
		$conn = new DBConnection();
		$collection = $conn->getCollectionById($collection_id);
		if(!$collection) {
			echo 'Collection for given id not found!';
			$collection_id = null;
		}
		$user = $conn->getUserByScreenName($_SESSION['user']->screen_name);
		if($collection->user_id != $user->id) {
			echo "Cannot edit another user's collection!";
			$collection_id = null;
		}
		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>blogatweet | Create</title>
<link type="text/css" rel="stylesheet" href="css/blogatweet.css" />
<link type="text/css" rel="stylesheet" href="css/create.css" />
<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">

Array.max = function(array) {
    return Math.max.apply(Math,array);
};

Array.min = function(array) {
    return Math.min.apply(Math,array);
};

//This prototype is provided by the Mozilla foundation and
//is distributed under the MIT license.
//http://www.ibiblio.org/pub/Linux/LICENSES/mit.license
if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length;

    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;

    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}

var deletebutton = '<span class="delete">[delete]</span>';

var initSearchEvents = function() {

	initInputKeyEvents();

	$('input.find').click(function() {
		getTweets($(this));
	});
	
	$('select.type').change(function() {
		var screen_name = $(this).siblings('input.screen_name');
		if($(this).find('option:selected').val() == 'favorites') {
 			screen_name.attr('disabled',true);
			screen_name.val('');
		} else {
			$(this).siblings('input.screen_name').attr('disabled',false);
		}
	});
	
};
var makeResultsSortable = function() {
	$('div.search_panel div.tweet').draggable({
		appendTo: 'body',
		helper: 'clone',
		opacity: 0.4,
		revert: 'invalid',
		zIndex: 1000,
		start: function(event,ui) {
			var width = $(this).width() + 'px';
			$(ui.helper).css('width',width);  
		},
		stop: function(event,ui) {}
	});
	$('#conversation').droppable({
		accept: '.tweet',
		hoverClass: 'tweet_drop_hover',
		tolerance: 'intersect',
		drop: function(event,ui) {
			$('#conversation').append('<div class="tweet">'+ui.helper.html()+'</div>');
			transferTweetToConversation($('#conversation div.tweet:last').get(0));
			sortTweets($('#conversation'),getSortOrder());
			$('#conversation div.tweet:odd').addClass('every_other_tweet');
			makeTweetsDeleteable();
			makeRetweetsSearchable();
			updateEmbeddable();
			updateEmailable();
		}
	});
	/*$('div.results, div#conversation').sortable({
		connectWith: 'div#conversation',
		stop: function(event,ui) { 
			if($(ui.item).parent('div#conversation').length > 0 && $(ui.item).find('div.text span.delete').length < 1) {
				transferTweetToConversation(ui.item);		
			}
			sortTweets(getSortOrder());
			makeTweetsDeleteable();
			makeRetweetsSearchable();
			updateEmbeddable();
		}
	});*/
};
var transferTweetToConversation = function(tweet) {
	$(tweet).find('div.text').append(deletebutton);
	$(tweet).find('input.to_convo').remove();
};
var makeTweetsDeleteable = function() {
	$('span.delete').unbind('click').click(function() {
		$(this).parents('div.tweet').remove();
		$('#conversation div.tweet').removeClass('every_other_tweet');
		$('#conversation div.tweet:odd').addClass('every_other_tweet');
		updateEmbeddable();
		updateEmailable();
	});
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
	////////////////////////////////////////////////////////////////////
	updatePermissions();
	////////////////////////////////////////////////////////////////////
};
var updateEmailable = function() {
	var emailable = '';
	$('#conversation div.tweet').each(function() {
		var tweet = '';
		tweet = tweet + ' - ' + $(this).find('a.author').text() + ': ';
		tweet = tweet + $(this).find('span.tweet_text').text() + ' >> ';
		tweet = tweet + $(this).find('span.timedate').text() + ' >> ';
		tweet = tweet + $(this).find('span.timedate a').attr('href') + '\n';
		tweet = tweet.replace(/\t/g,'').replace(/\n/g,'').replace(/\r/g,'') + '\n';
		emailable = emailable + tweet;
	});
	emailable = emailable + 'Powered by blogatweet http://blogatweet.com';
	$('#emailable').text(emailable);
};
var getTweets = function(input) {
	var screenname = input.siblings('input.screen_name').val();
	var type = input.siblings('select.type').find('option:selected').val();
	var panel = input.parent('div.search_panel');
	var index = $('div.search_panel').index(panel);
	var results = input.siblings('div.results');
	var url = 'get_tweets.php?type='+type+'&search='+screenname;
	var tab = $('li.tab').get(index);
	$(tab).find('span.text').text(screenname);
	$(tab).find('span.type').text(type);
	input.siblings('img.loading').show();
	results.text('searching...').load(url, function() {
		input.siblings('img.loading').hide();
		sortTweets(results,'dsc');
		$('div.search_panel div.tweet:odd').addClass('every_other_tweet');
		makeResultsSortable();
		makeRetweetsSearchable();
		enableMassTweetSelect();
	});
	mpmetrics.track("create - search", {
		'type': type,
		'for': screenname
	});
};
var makeRetweetsSearchable = function() {
	$('a.retweet').unbind('click').click(function() {
		var screenname = $(this).attr('screen_name');
		createTab('from',screenname,function() {
			$('div.search_panel:last').find('input.screen_name').val(screenname);
			$('div.search_panel:last').find('input.find').click();
		});
	});
};	
var initInputKeyEvents = function() {
	$('input.screen_name').keyup(function() {
		if($(this).siblings('select.type').find('option:selected').val() == 'between')
			$(this).val($(this).val().replace(/[^A-Za-z0-9_,]/g,''));
		else
			$(this).val($(this).val().replace(/\W*/g,''));
	});
	$('input.screen_name').keypress(function(e) {
		if(e.which === 13) $(this).siblings('input.find').click();
	});
};

var initTabEvents = function() {
	$('li.tab').unbind('click').click(function() {
		var index = $('li.tab').index(this);
		selectTab(index);
	});
	$('li.tab span.remove').unbind('click').click(function() {
		var tab = $(this).parent('li.tab');
		removeTab(tab);
	});
};
var selectTab = function(index) {
	var tabs = $('li.tab');
	var panels = $('div.search_panel');
	tabs.removeClass('selected');
	$(tabs.get(index)).addClass('selected');
	panels.hide();
	$(panels.get(index)).show();
};
var createTab = function(tabtype,tabtext,searchpanelcallback) {
	var newtab = '<li class="tab"><span class="type">'+tabtype+'</span><span class="text">'+tabtext+'</span><span class="remove">[x]</span></li>';
	var newpanel = '<div class="search_panel" style="display:none;"></div>';
	$('#new_tab').before(newtab);
	$('#permissions_wrapper').before(newpanel);
	$('div.search_panel:last').load('searchform.php', function() {
		initSearchEvents();
		selectTab($('li.tab').size() - 1);
		initTabEvents();
		if(searchpanelcallback != null)	searchpanelcallback();
	});
};
var removeTab = function(tab) {
	var index = $('li.tab').index(tab);
	tab.remove();
	var panels = $('div.search_panel');
	$(panels.get(index)).remove();
	selectTab(0);
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
var getSortOrder = function() {
	return $('#sort a[class="order"]').attr('id');
};
var enableMassTweetSelect = function() {
	$('a.select_all').unbind('click').click(function() {
		$(this).parent('.mass_tweet_buttons').siblings('div.results').find('input.to_convo').attr('checked',true);
	});
	$('a.unselect_all').unbind('click').click(function() {
		$(this).parent('.mass_tweet_buttons').siblings('div.results').find('input.to_convo').attr('checked',false);
	});
	$('a.move_selected').unbind('click').click(function() {
		var checked = $(this).parent('.mass_tweet_buttons').siblings('div.results').find('input.to_convo:checked');
		if(checked.length < 1) return false;
		checked.each(function() {
			var tweet = $(this).parents('div.tweet');
			$('#conversation').append('<div class="tweet">'+tweet.html()+'</div>');
			transferTweetToConversation($('#conversation div.tweet:last').get(0));			
		});
		sortTweets($('#conversation'),getSortOrder());
		makeTweetsDeleteable();
		makeRetweetsSearchable();
		updateEmbeddable();
		updateEmailable();
	});
};
/*
var updatePermissions = function() {
	var authors = [];
	var allauthors = $('#conversation').find('a.author').each(function() {
		var author = $(this).attr('author');
		if(authors.indexOf(author) != -1) return;
		authors.push(author);
	});
	var authorlist = [''];
	var listindex = 0;
	var tempauthlist = '';
	var tweet = '';
	for(var i in authors) {
		author = '@'+authors[i]+', ';
		tempauthlist = authorlist[listindex] + author;
		tempauthlist = tempauthlist.replace(/,\s$/,'');
		tweet = 'Hey '+tempauthlist+' I\'d like to blogatweet our conversation. Is that ok with you?';
		if(tweet.length > 140) {
			listindex = listindex + 1;
			authorlist[listindex] = '';
		}
		authorlist[listindex] = authorlist[listindex] + author;
	}
	var output = '';
	for(var i in authorlist) {
		output = output + '<div>';
		output = output + '<input type="text" class="tweet" value="';
		output = output + 'Hey '+authorlist[i].replace(/,\s$/,'')+' I\'d like to blogatweet our conversation. Is that ok with you?';
		output = output + '" />';
		output = output + '<input type="button" value="tweet" />';
		output = output + '</div>';
	}
	$('#permissions').html(output);
	initPermissionsEvents();
};
*/
var updatePermissions = function() {
	var authors = [];
	var imageurls = [];
	$('#conversation').find('a.author').each(function() {
		var author = $(this).attr('author');
		if(authors.indexOf(author) != -1) return;
		authors.push(author);
		imageurls.push($(this).parents('div.tweet').find('div.image img').attr('src'));
	});
	var usersoptions = '';
	for(var i in authors) {
		// check for ie
		// if not ie
		/*if(jQuery.support.style) {
			usersoptions = usersoptions + '<option imageurl="' + imageurls[i] + '" style="background:url(' + imageurls[i] + ') no-repeat; height:48px;" value="'+authors[i]+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		else {
			usersoptions = usersoptions + '<option value="'+authors[i]+'">';
		}*/
		usersoptions = usersoptions + '<option value="'+authors[i]+'">';
		usersoptions = usersoptions + authors[i];
		usersoptions = usersoptions + '</option>';
	}
	$('#users').html(usersoptions);
	initPermissionsEvents();
	//$('#users').change();
};
var initPermissionsEvents = function() {
	$('#ask').unbind('click').click(function() {
		var author = $('#users option:selected').val();
		var status = 'd ' + author + ' Hey ' + author + ' I\'d like to blogatweet our conversation. Is that ok with you?';
		window.open('http://twitter.com/home?status='+escape(status));
		return false;
		/*$.post('send_tweet.php',{text:$(this).siblings('input.tweet').val()},
			function(data) {
			}
		);*/
		/*$.post('http://twitter.com/direct_messages/new.xml',{user:'betten',text:$(this).siblings('input.tweet').val()},
			function(data) {
				alert(data);
		});*/
	});
	/*$('#users').unbind('change').change(function() {
		// if not ie
		if(jQuery.support.style) {
			$(this).css('background','url('+$(this).find('option:selected').attr('imageurl')+') no-repeat');
		}
	});*/
};


$(document).ready(function() {

	$('div.search_panel').load('searchform.php',function() {
		initSearchEvents();
	});
	
	<?php if(!empty($collection_id) && $collection) { ?>
	
	// updates for tweets loaded for collection
	$('#conversation div.tweet').each(function() {
		transferTweetToConversation($(this).get(0));	
	});
	sortTweets($('#conversation'),getSortOrder());
	$('#conversation div.tweet:odd').addClass('every_other_tweet');
	makeTweetsDeleteable();
	makeRetweetsSearchable();
	updateEmbeddable();
	updateEmailable();
	
	<?php } ?>
	
	updateEmbeddable();
	
	initTabEvents();
	$('#new_tab').click(function() {
		createTab('','new search',null);
	});
	$('li.tab').click();
	
	$('#convo_find').click(function() {
		$('#convo_generator').submit();
	});
	
	/*$('#convo_generator').submit(function() {
		$('#convo_generator').ajaxSubmit({
			beforeSubmit: function() {
				if($('#convo_names').val().length < 1) return false;
				$('#convo_generator').siblings('img.loading').show();
				$('#conversation').text('searching...');
			},
			success: function() {
				$('#convo_generator').siblings('img.loading').hide();
				$('#convo_names').val('');
				if($('#conversation div.tweet').length < 1) return false;
				$('#conversation div.tweet').each(function() {
					transferTweetToConversation(this);
				});
				sortTweets($('#conversation'),getSortOrder());
				makeTweetsDeleteable();
				makeRetweetsSearchable();
				updateEmbeddable();
				updateEmailable();
				makeResultsSortable();
			},
			target: '#conversation'
		});
		return false;
	});*/
	
	$('#code').click(function() {
		selectAll('code');
	});
	$('#emailable').click(function() {
		selectAll('emailable');
	});
	
	$('#addtweet').click(function() {
		var url = $('#singletweeturl').val();
		if(url.length < 1) return false;
		$(this).siblings('img.loading').show();
		$.post('get_tweet.php', {url: $('#singletweeturl').val() }, function(data) {
			$('#addsinglet img.loading').hide();
			if(data.error != null) {
				$('#addsinglet_error').text(data.error).slideDown('slow').animate({'opacity': 1.0},4000).slideUp('normal');
				return false;
			}
			$('#singletweeturl').val('');
			$('#conversation').append(data.tweet);
			transferTweetToConversation($('#conversation div.tweet:last').get(0));
			sortTweets($('#conversation'),getSortOrder());
			makeTweetsDeleteable();
			makeRetweetsSearchable();
			updateEmbeddable();
			updateEmailable();
			makeResultsSortable();
		},'json');
	});
	$('#singletweeturl').keypress(function(e) {
		if(e.which === 13) $('#addtweet').click();
	});
	
	$('#sort a').click(function() {
		$('#sort a').removeClass('order');
		$(this).addClass('order');
		sortTweets($('#conversation'),$(this).attr('id'));
		makeTweetsDeleteable();
		makeRetweetsSearchable();
		updateEmbeddable();
		updateEmailable();
	});
	
	<?php
		if(Util::userIsBeta()) {
	?>
	
	var COLLECTION_ID = <?php echo !empty($collection_id) ? $collection_id : 0; ?>;
	
	$('#save').click(function() {
		var urls = new Array();
		var screen_names = new Array();
		var texts = new Array();
		var dates = new Array();
		var image_urls = new Array();
		$('#conversation div.tweet').each(function() {
			urls.push($(this).find('span.timedate a').attr('href'));
			screen_names.push($(this).find('a.author').attr('author'));
			texts.push($(this).find('span.tweet_text').text());
			dates.push($(this).find('span.timedate').text());
			image_urls.push($(this).find('div.image img').attr('src'));
		});
		$('#save_wrapper .loading').show();
		$.post('save.php',
			{
				'collection_id': COLLECTION_ID,
				'url[]': urls,
				'screen_name[]': screen_names,
				'text[]': texts,
				'date[]': dates,
				'image_url[]': image_urls
			},
			function(data) {
				$('#save_wrapper .loading').hide();
				if(!data.error) {
					COLLECTION_ID = data.collection_id;
					$('#save_wrapper .status').text('Saved!').show().animate({opacity: 1.0},2000, function() { $(this).fadeOut() });
					mpmetrics.track("create - save / beta");
				} else {
					console.log(data.error);
				}
			},
			'json'
		);
			
	});
	<?php
		} else {
	?>
	
	$('#save').click(function() {
		mpmetrics.track("create - save / not beta");
		alert('Only Blogatweet Beta users can save conversations! Donations of $10 or more provides Blogatweet Beta access - donate below!');
	});
	
	<?php
		}
	?>

	mpmetrics.track("create - view");

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
	<?php if(!empty($collection_id) && $collection) { ?><span> - editing collection created <?php echo date('M jS, Y g:i A',$collection->created); ?></span><?php } ?>
	<span class="link"><a href="collections.php">Go to saved collections &raquo;</a></span>
    </div>
    <?php
	}
    ?>
    
    <div id="search_wrapper">
        <h2>Search</h2>
        <ul id="tabs">
            <li class="tab"><span class="type"></span><span class="text">new search</span><span class="remove">[x]</span></li>
            <li id="new_tab">[+]</li>
        </ul>
        <div class="search_panel"></div>
        
        <div id="permissions_wrapper">
            <h2>Permissions</h2>
            <div id="permissions">
                Don't forget to ask for permission from users before publishing their tweets!
                <select id="users">
                </select>
                <input id="ask" type="button" value="ask" />
            </div>
        </div>
	
	<div id="donate_wrapper">
	    <h2>Donate</h2>
	    <div>
	<?php
		if(!Util::userIsBeta()) {
	?>
		Want to be able to save your tweets? Users who donate $10 or more gain access to the Blogatweet Beta version! Blogatweet Beta users are able to save their collections and edit saved collections, and have access to all of Blogatweet's new features.  Donate below!
	<?php
		} else {
	?>
		Thanks for your donation! Like Blogatweet Beta? Feeling generous? Any donation is always appreciated!
	<?php
		}
	?>
		<form action="amazon-fps/process.php" method="post">
		<table>
		    <tr><td><label>&#36;<input name="transaction_amount" value="10" type="text" /></label></td><td><input type="image" src="/img/SLDonationWithLogo.png" border="0" /></td></tr>
		</table>
		</form>
	    </div>
	</div>
    </div>
    
    <div id="conversation_wrapper">
        <h2>Conversation<span id="save_wrapper"><span class="status"></span><span class="loading"><img class="loading" src="img/loading.gif" /></span><input id="save" type="button" value="Save" /></span></h2>
        <!--Find conversation between <form action="get_convo.php" method="post" id="convo_generator"><input id="convo_names" name="names" type="text" /><input id="convo_find" type="button" value="find" /></form><img class="loading" src="img/loading.gif" />-->
        <div id="conversation">
		<?php if(!empty($collection_id) && $collection) {
			Util::generateHTMLTweetsForCollection($collection);
		} ?>
	</div>
        <div id="conversation_footer">
            <div id="addsinglet">
                Add a tweet by url <input id="singletweeturl" type="text" /><input id="addtweet" type="button" value="add" /><img class="loading" src="img/loading.gif" />
            </div>
            <div id="sort">sort tweets by date: <a id="asc" href="javascript:void(0);">ascending</a> | <a id="dsc" class="order" href="javascript:void(0);">descending</a></div>
        </div>
        <div id="addsinglet_error"></div>
        
        <?php include 'html/embeddable.html.inc' ?>
        
        <div id="emailable_wrapper">
            <h2>Emailable</h2>
            <div id="emailable">
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
