/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
// function loadGravatars() {
//   // set the viewport using the function above
//   viewport = updateViewportDimensions();
//   // if the viewport is tablet or larger, we load in the gravatars
//   if (viewport.width >= 768) {
//   jQuery('.comment img[data-gravatar]').each(function(){
//     jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
//   });
// 	}
// } // end function

// (function(){

//   var parallax = document.querySelectorAll(".parallax__layer--back"),
//       speed = 0.3;

//   window.onscroll = function(){
//     [].slice.call(parallax).forEach(function(el,i){

//       var windowYOffset = window.pageYOffset,
//           elBackgrounPos = "50% " + (windowYOffset * speed) + "px";
			
//       el.style.backgroundPosition = elBackgrounPos;

//     });
//   };

// })();
// 
// if(_isMobile) {
//     _skrollrBody = document.getElementById('skrollr-body');

//     //Detect 3d transform if there's a skrollr-body (only needed for #skrollr-body).
//     if(_skrollrBody) {
//         _detect3DTransforms();
//     }

//     _initMobile();
//     _updateClass(documentElement, [SKROLLR_CLASS, SKROLLR_MOBILE_CLASS], [NO_SKROLLR_CLASS]);
// } else {
//     _updateClass(documentElement, [SKROLLR_CLASS, SKROLLR_DESKTOP_CLASS], [NO_SKROLLR_CLASS]);
// }

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

	$('.mobile').click(function() {
		$('nav').toggleClass('active');
	});

	

	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();

		var target = this.hash;
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});

	// $(function () {
	// 	// initialize skrollr if the window width is large enough
	// 	if ($(window).width() > 767) {
	// 		skrollr.init();
	// 	}

	// 	// disable skrollr if the window is resized below 768px wide
	// 	$(window).on('resize', function () {
	// 		if ($(window).width() <= 767) {
	// 			skrollr.init().destroy(); // skrollr.init() returns the singleton created above
	// 		}
	// 	});
	// });


	$('.lightbox-trigger').click(function(e) {
		
		//prevent default action (hyperlink)
		e.preventDefault();
		
		//Get clicked link href
		var image_href = $(this).attr("href");
		$(this).addClass('current');
		
		/*  
		If the lightbox window HTML already exists in document, 
		change the img src to to match the href of whatever link was clicked
		
		If the lightbox window HTML doesn't exists, create it and insert it.
		(This will only happen the first time around)
		*/
		
		if ($('#lightbox').length > 0) { // #lightbox exists
			
			//place href as img src value
			$('#content').html('<img src="' + image_href + '" />');
				
			//show lightbox window - you could use .show('fast') for a transition
			$('#lightbox').show();
		}
		
		else { //#lightbox does not exist - create and insert (runs 1st time only)
			
			//create HTML markup for lightbox window
			var lightbox =
			'<div id="lightbox">' +
				'<p>Click to close</p>' +
				'<div id="content">' + //insert clicked link's href into img src
					'<img src="' + image_href +'" />' +
				'</div>' +
			'</div>';
				
			//insert lightbox HTML into page
			$('body').append(lightbox);
		}
		
	});
	
	//Click anywhere on the page to get rid of lightbox window
	$('#lightbox').live('click', function() { //must use live, as the lightbox element is inserted into the DOM
		$('#lightbox').hide();
		$('.current').removeClass('current');
	});

	$(document).keyup(function(e) {
        if (e.keyCode == 27) { // esc keycode
            $('#lightbox').hide();
            $('.current').removeClass('current');
        } else if (e.keyCode == 37) {
        	// Animate to Previous Child
        	$('.current').removeClass('current').parent().prev().find('a').click();
        } else if (e.keyCode == 39) {
        	// Animate to Next Child
        	$('.current').removeClass('current').parent().next().find('a').click();
        }
    });


}); /* end of as page load scripts */
