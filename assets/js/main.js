$(function () {
    "use strict";

    $('.animated').appear(function () {
        var elem = $(this);
        var animation = elem.data('animation');
        if (!elem.hasClass('visible')) {
            var animationDelay = elem.data('animation-delay');
            if (animationDelay) {
                setTimeout(function () {
                    elem.addClass(animation + " visible");
                }, animationDelay);
            } else {
                elem.addClass(animation + " visible");
            }
        }
    });

    $('.bride_groom_a').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.my-gallery').magnificPopup({
        delegate: 'a',
        gallery: {enabled: true},
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    });

    $('section.header').vegas({
        slides: [
            {src: 'http://sakshiprashant.com/assets/images/photo-galery/pic01.jpg'},
            {src: 'http://sakshiprashant.com/assets/images/photo-galery/pic02.jpg'},
            {src: 'http://sakshiprashant.com/assets/images/photo-galery/pic11.jpg'},
            {src: 'http://sakshiprashant.com/assets/images/photo-galery/pic12.jpg'}
        ],
        preloadImage: true,
        delay: 5000,
        transitionDuration: 5000
    });

});

$(document).ready(function () {
    var currentDate = new Date();
    var endDate = Date.parse("December 07, 2015");
    var diff = (endDate - currentDate.getTime()) / 1000;

    var clock = $("#getting-started").FlipClock(diff,
        {
            clockFace: 'DailyCounter',
            countdown: true,
            showSeconds: false
        });
    clock.start();
});