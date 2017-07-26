(function() {

	"use strict";

	var aside = $("aside")
	var bodyMargin = parseInt($("body").css("margin-top"));

	var windowHeight, asideHeight, documentHeight;
	var scrollPos = 0;

	var onResize = function() {
		documentHeight = parseInt($(document).height());
		windowHeight = parseInt($(window).height());
		var headerHeight = parseInt($("#header").outerHeight(true));
		var footerHeight = parseInt($("#footer").outerHeight(true));
		asideHeight = parseInt(aside.outerHeight());


		// aside section height adjustment
		if (asideHeight + headerHeight + bodyMargin < windowHeight) {
			// aside is shorter than screen, extend the aside height
			aside.css("height", windowHeight);
		} 

		$("aside").affix(
		{
			offset: {
				top: headerHeight + bodyMargin,
				bottom: function () {
					var footerHeight = parseInt($("#footer").outerHeight(true));
					var bodyMargin = parseInt($("body").css("margin-top"));
					return 270
				}            
			}
		});

		
	}

	

	var onScroll = function() {
		scrollPos = $(window).scrollTop();

		// relase fix at bottom
		if (scrollPos+windowHeight > (documentHeight - bodyMargin)) {
			var bottomDistance = bodyMargin - parseInt(documentHeight - scrollPos - windowHeight)
			aside.css("bottom", bottomDistance)
		} else {
		// set fix at top
			aside.css("bottom", 0)

			if (asideHeight > windowHeight) {
				if (scrollPos+windowHeight > (bodyMargin + asideHeight)) {
					aside.addClass("fixed-bottom");
				} else {
					aside.removeClass("fixed-bottom");
				}
			}

			if (asideHeight <= windowHeight) {

				if (scrollPos > bodyMargin) {
					aside.addClass("fixed-bottom");
				} else {
					aside.removeClass("fixed-bottom");
				}

			}
		}
	
	}

	var onReady = function() {

		$('body').imagesLoaded(
			{ background: true },
			function() {
				
					// $('body').removeClass('preload-active');
					$('#preloader').fadeOut(1000);
					console.log("loaded");
			}
		);


		onResize();
		$(".owl-carousel").owlCarousel({
			items: 1,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: false,
			loop: true,
			animateOut: 'fadeOut'
		});


		smoothScroll.init({
			easing: 'easeInOutCubic',
			speed: 600
		});

		
	}

	$(document).ready(onReady);
	// $(window).resize(onResize);
	// $(window).scroll(onScroll);
	
	
})();