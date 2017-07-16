(function() {

    "use strict";

    var aside = $("aside")
    var bodyMargin = parseInt($("body").css("margin"));

    var windowHeight, asideHeight, documentHeight;
    var scrollPos = 0;

    var onResize = function() {
        documentHeight = parseInt($(document).height());
        windowHeight = parseInt($(window).height());
        asideHeight = parseInt(aside.outerHeight());

        // aside section heigh adjustment
        if (asideHeight < windowHeight) {
            // aside is shorter than screen, extend the aside height
            aside.css("height", windowHeight);
        } 
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
        onResize();
    }

    $(document).ready(onReady);
    $(window).resize(onResize);
    $(window).scroll(onScroll);
    
    
})();