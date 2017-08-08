

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

	var createGallery = function() {

		var images = [
			{ 
				'image': 'images/galeria/img01.jpeg',
				'thumb': 'images/galeria/img01-thumb.jpeg',
				'alt': 'to jest alet'
			},
			{ 
				'image': 'images/galeria/img02.jpeg',
				'thumb': 'images/galeria/img02-thumb.jpeg',
				'alt': 'to jest alet'
			},
			{ 
				'image': 'images/galeria/img03.jpeg',
				'thumb': 'images/galeria/img03-thumb.jpeg',
				'alt': 'to jest alet'
			},
			{ 
				'image': 'images/galeria/img04.jpeg',
				'thumb': 'images/galeria/img04-thumb.jpeg',
				'alt': 'to jest alet'
			},
			{ 
				'image': 'images/galeria/img05.jpeg',
				'thumb': 'images/galeria/img05-thumb.jpeg',
				'alt': 'to jest alet'
			},
			{ 
				'image': 'images/galeria/img06.jpeg',
				'thumb': 'images/galeria/img06-thumb.jpeg',
				'alt': 'to jest alet'
			},

		];

		var gallery = $(".gallery-wrapper");
		var node = gallery;

		// remove images
		while (node[0].firstChild) {
			node[0].removeChild(node[0].firstChild);
		}

		var width = Math.floor(gallery.width() / 3) - 2;

		var row = document.createElement("div");
		row.className = "img-row";

		for (var j=0; j<images.length; j++) {


				if ((j>0) && (j % 3 == 0)) {
					gallery[0].appendChild(row);
					row = document.createElement("div");
					row.className = "img-row";
				}

				var nest = document.createElement("div");
				nest.className = "nest";
				nest.style.width = width + "px";
				nest.style.height = width + "px";

				var href = document.createElement("a");
				href.href = images[j].image;
				href.style.backgroundImage = "url(" + images[j].thumb + ")";

				var overlay = document.createElement("div");
				overlay.className = "overlay";
				

				href.appendChild(overlay);
				nest.appendChild(href);
				row.appendChild(nest);

		}
		gallery[0].appendChild(row);

		// run lightbox
		var plugin = $('.gallery-wrapper a').simpleLightbox();
	}

	var onReady = function() {

		$('body').imagesLoaded(
			{ background: true },
			function() {
					$('body').removeClass('preload-active');
					
					setTimeout(
						function() {
							$('#spinner').removeClass('dospin');
							$('#preloader').fadeOut(1000); 
						}, 
						800
					)
			}
		);

		onResize();
		$(".owl-carousel").owlCarousel({
			items: 1,
			autoplay: true,
			autoplayTimeout: 6000,
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
	$(window).resize(createGallery);
	// $(window).scroll(onScroll);

	createGallery();
	
	
})();


// google maps

function myMap() {

		var mapCanvas = document.getElementById("map");
		var mapCanvasMobile = document.getElementById("mobileMap");
		var mapOptions = {
				center: new google.maps.LatLng(53.535458, 17.242933),
				zoom: 15,
				scrollwheel: false,
		};

		var map = new google.maps.Map(mapCanvas, mapOptions);
		var mapMobile = new google.maps.Map(mapCanvasMobile, mapOptions);

		var marker = new google.maps.Marker({
			position: {lat: 53.535458 , lng: 17.242933 },
			map: map
		});

		var markerMobile = new google.maps.Marker({
			position: {lat: 53.535458 , lng: 17.242933 },
			map: mapMobile
		});


}