jQuery(document).ready(function($) {

	var body = $('body');
	var win = $(window);

	// SET BACKGROUND AND TEXT COLOR OF INTRO SCREEN
	var $bgcolor = $('.intro').attr('data-background-color');
	var $textcolor = $('.intro').attr('data-color');

	console.log($bgcolor);
	console.log($textcolor);

	$('.navigation').fadeIn(1500);
	$('.aboutbtn').click(function() {
		if ($('.about').hasClass('visible')) {
			$('.about').removeClass('visible').fadeOut(500);
			console.log('clicked');
		} else {
			$('.about').fadeIn(300).
			$('.about').addClass('visible');
			console.log('bug!');
		}
	});


	// FADE OTHER PROJECTS

	// $('.project--front').hover(function() {
	// 	$('.project--front').not($(this)).stop().animate({'opacity':0.3}, 1000);
	// }, function() {
	// 	$('.project--front').not($(this)).stop().animate({'opacity':1}, 1000);
	// });

	// STICKY NAV

	// $('.navigation').sticky({topSpacing:0});

	// LAZY LOAD IMAGES
	$("img").unveil(0, function() {
		$(this).load(function() {
		this.style.opacity = 1;
		});
		});

	//INSTANTCLICK.JS
	// InstantClick.init();
});jQuery(document).ready(function($) {

	var body = $('body');
	var win = $(window);

	// SET BACKGROUND AND TEXT COLOR OF INTRO SCREEN
	var $bgcolor = $('.intro').attr('data-background-color');
	var $textcolor = $('.intro').attr('data-color');

	console.log($bgcolor);
	console.log($textcolor);

	$('.navigation').fadeIn(1500);
	$('.aboutbtn').click(function() {
		if ($('.about').hasClass('visible')) {
			$('.about').removeClass('visible').fadeOut(500);
		} else {
			$('.about').fadeIn(300).addClass('visible');
		}
	})



	// STICKY NAV

	// $('.navigation').sticky({topSpacing:0});

	// CLONSE IMAGES TO GALLLERY
		$('.showcase img').each(function() {
		$(this).clone().appendTo('.gallery .inner');
	});

	$('.gallery img').each(function() {
		$(this).wrap("<div class='slide col-xs-12'></li>");
	});

	$('.inner').flickity({
		wrapAround: true,
		contain: false,
		cellAlign: 'center',
	});

	// LAZY LOAD IMAGES
	$("img").unveil(0, function() {
		$(this).load(function() {
		this.style.opacity = 1;
		});
		});

	$('.showcase img').click(function() {
		$('.gallery').fadeIn(300);
	});

	$('.gallery .close').click(function() {
		$('.gallery').fadeOut(300);
	})


	//INSTANTCLICK.JS
	// InstantClick.init();

	// INITIALIZE PACKERY LAYOUT FRONTPAGE
	// var $container = $('#container');
	
	// $container.isotope({
	// 	  itemSelector: '.item',
	// 	  layoutMode: 'masonry',
	// 	  masonry: {
	// 	  	columnWidth: 400,
	// 	  	gutter: 10,
	// 	  	isHorizontal: false,
	// 	  }
	// 	});


	;(function($) {
  'use strict';
  var $body = $('html, body'),
      content = $('#content').smoothState({
      	prefetch: true,
        // Runs when a link has been activated
        onStart: {
          duration: 250, // Duration of our animation
          render: function (url, $container) {
            // toggleAnimationClass() is a public method
            // for restarting css animations with a class
            content.toggleAnimationClass('is-exiting');
            // Scroll user to the top
            $body.animate({
              scrollTop: 0
            });
          }
        }
      }).data('smoothState');
      //.data('smoothState') makes public methods available
})(jQuery);
});