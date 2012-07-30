// AJAX Content
var default_content="";

$(document).ready(function(){
	
	checkURL();
	$('a.nav').click(function (e){

			checkURL(this.hash);

	});
	
	//filling in the default content
	default_content = $('#pageContent').html();
	
	
	setInterval("checkURL()",250);
	
});

var lasturl="";

function checkURL(hash)
{
	if(!hash) hash=window.location.hash;
	
	if(hash != lasturl)
	{
		lasturl=hash;
		
		// FIX - if we've used the history buttons to return to the homepage,
		// fill the pageContent with the default_content
		
		if(hash=="")
		$('#pageContent').html(default_content);
		
		else
		loadPage(hash);
	}
}


function loadPage(url)
{
	url=url.replace('#page','');
	
	// Fade out AJAX page upon leaving
	// $('#loading').css('visibility','visible');
        $('#pageContent').fadeOut(100);
	
	// Then remove home page content
	$('#home').css('display','none'); 
	
	$.ajax({
		type: "POST",
		url: "load_page.php",
		data: 'page='+url,
		dataType: "html",
		success: function(msg){
			
			if(parseInt(msg)!=0)
			{
				// First fade in page
				$('#pageContent').fadeIn(1000).html(msg);
				// Then slide down menu, if available
				if($('.top_menu') != 0) {
					$('.top_menu').delay(600).slideDown();
				} else {
					// do nothing
				}
			}
		}
		
	});

}





// Copyright (c) 2010 TrendMedia Technologies, Inc., Brian McNitt. 
// All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

$(window).load(function() {	//start after HTML, images have loaded
	
	// First slide down top menu, when available, and if hitting page not via AJAX
	if($('.top_menu') != 0) {
		$('.top_menu').delay(600).slideDown();
	} else {
		// do nothing
	}
	
	var InfiniteRotator = 
	{
		init: function()
		{
			//initial fade-in time (in milliseconds)
			var initialFadeIn = 500;
			
			//interval between items (in milliseconds)
			var itemInterval = 6000;
			
			//cross-fade time (in milliseconds)
			var fadeTime = 1000;
			
			//count number of items
			var numberOfItems = $('.rotating-item').length;

			//set current item
			var currentItem = 0;

			//show first item
			$('.rotating-item').eq(currentItem).fadeIn(initialFadeIn);

			//loop through the items		
			var infiniteLoop = setInterval(function(){
				$('.rotating-item').eq(currentItem).fadeOut(fadeTime);

				if(currentItem == numberOfItems -1){
					currentItem = 0;
				}else{
					currentItem++;
				}
				$('.rotating-item').eq(currentItem).fadeIn(fadeTime);

			}, itemInterval);	
		}	
	};

	InfiniteRotator.init();
	
});