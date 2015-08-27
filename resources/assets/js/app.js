/**
 * Created by Gábor on 2015. 08. 24..
 */

$(document).ready(function(){

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

    // Header carousel
    $('.header-carousel').owlCarousel({
        items:1,
        lazyLoad:true,
        loop:true,
        center:true,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        dots: false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        animateOut: 'fadeOut'
    });

});