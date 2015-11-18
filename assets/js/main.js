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
        delay: 10000,
        transitionDuration: 2000
    });

    FB.init({
        appId: '1040614595951557',
        status: true,
        xfbml: true,
        version: 'v2.4' // or v2.0, v2.1, v2.2, v2.3
    });

});

$(document).ready(function () {
    var currentDate = new Date();
    var endDate = Date.parse("December 07, 2015");
    var diff = (endDate - currentDate.getTime()) / 1000;
    if (diff < 0) {
        diff = 0;
    }

    var clock = $("#getting-started").FlipClock(diff,
        {
            clockFace: 'DailyCounter',
            countdown: true
        });
    clock.start();
});

window.fbAsyncInit = function () {
    FB.init({
        appId: '1040614595951557',
        xfbml: true,
        version: 'v2.5'
    });
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));