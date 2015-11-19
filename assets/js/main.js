$(function () {
    "use strict";

    /*$('.animated').appear(function () {
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
     });*/

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


    $('.animation').each(function () {
        var _this = this;
        var animation_waypoint = new Waypoint({
            element: _this,
            handler: function (direction) {
                $(this.element).css({visibility: 'visible'});
                $(this.element).addClass('animated');
            },
            offset: '90%'
        });
    });
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
$(function () {
    "use strict";

    /*$('.animated').appear(function () {
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
     });*/

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

    function onScrollInit(items, trigger) {
        items.each(function () {
            var osElement = $(this),
                osAnimationClass = osElement.attr('data-animation'),
                osAnimationDelay = osElement.attr('data-animation-delay');

            osElement.css({
                '-webkit-animation-delay': osAnimationDelay,
                '-moz-animation-delay': osAnimationDelay,
                'animation-delay': osAnimationDelay
            });

            var osTrigger = ( trigger ) ? trigger : osElement;

            osTrigger.waypoint(function () {
                osElement.addClass('animated').addClass(osAnimationClass);
            }, {
                triggerOnce: true,
                offset: '90%'
            });
        });
    }

    onScrollInit($('.animate'));
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