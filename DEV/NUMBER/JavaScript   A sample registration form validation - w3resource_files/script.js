$(document).ready(function(){
	
	// Using our tweetAction plugin. For a complete list with supported
	// parameters, refer to http://dev.twitter.com/pages/intents#tweet-intent
	//var pathname = document.window.location;
	//var title = document.title;
        //var title = document.title;
        //var thisUrl = $(this).data("url");
	$('#tweetLink').tweetAction({
		text:		'Web development tutorial',
		url:		'http://www.w3resource.com',
		via:		'w3resource',
		//related:	title
	},function(){
		
		// When the user closes the pop-up window:
		$('button#tweetLink').hide();
		//$('a#tweetLink1')
				//.addClass('active')
				//.attr('href','http://www.w3resource.com/javascript/form/validations.zip');
				$('a#tweetLink1').show();

	});
	
});
