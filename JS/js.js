/*global $, document, window*/


$(window).on('scroll', function () {
    "use strict";
    if ($(this).scrollTop() >= 110) {
        $("#scroll-up").fadeIn(400);
    } else {
        $("#scroll-up").fadeOut(400);
    }
});


$(document).ready(function () {
    "use strict";
    $("#scroll-up").on("click", function (e) {
        e.preventDefault();
        $("body, html").animate({scrollTop: 0}, 1000);
    });
});



$("#social-media a").mouseenter(function () {
    "use strict";
    $(this).animate({top: -10}, 300);
});

$("#social-media a").mouseleave(function () {
    "use strict";
    $(this).animate({top: 0}, 300);
});


$(function () {
    "use strict";
    $("#social-media1 a").mouseenter(function () {
        $(this).animate({top: -10}, 300);
    });
});

$(function () {
    "use strict";
    $("#social-media1 a").mouseleave(function () {
        $(this).animate({top: 0}, 300);
    });
});

// contact form ---------------------------------------------------

$(function () {
    "use strict";
    $(".content-form .username").on("blur", function () {
        if ($(this).val().length <= 3) {
            $(this).css({border : '1px solid #f00'});
            $(this).next("div").slideDown(300).delay(3000).slideUp(300);
        } else {
            $(this).css({border : '1px solid #080'});
            $(this).next("div").slideUp(300);
        }
    });
});

$(function () {
    "use strict";
    $(".content-form .mail").on("blur", function () {
        if ($(this).val() === "") {
            $(this).css({border : '1px solid #f00'});
            $(this).next("div").slideDown(300).delay(3000).slideUp(300);
        } else {
            $(this).css({border : '1px solid #080'});
            $(this).next("div").slideUp(300);
        }
    });
});

$(function () {
    "use strict";
    $(".content-form .subject").on("blur", function () {
        if ($(this).val().length <= 5) {
            $(this).css({border : '1px solid #f00'});
            $(this).next("div").slideDown(300).delay(3000).slideUp(300);
        } else {
            $(this).css({border : '1px solid #080'});
            $(this).next("div").slideUp(300);
        }
    });
});

$(function () {
    "use strict";
    $(".content-form .message").on("blur", function () {
        if ($(this).val().length <= 15) {
            $(this).css({border : '1px solid #f00'});
            $(this).next("div").slideDown(300).delay(3000).slideUp(300);
        } else {
            $(this).css({border : '1px solid #080'});
            $(this).next("div").slideUp(300);
        }
    });
});



// plugin ---------------------------------------------------

$(document).ready(function () {
    'use strict';
    $(".sk-1").skitter({
        theme: 'round',
        controls: true,
        progressbar: false,                
        controls_position: 'center',
        enable_navigation_keys: true,
        numbers: false,
        navigation: true,
        dots: true,
        label: true,
        progressbar_css: true,
        auto_play: true,
        preview: true,
        focus: true,
    });
});


$(document).ready(function () {
    'use strict';
    $(".sk-2").skitter({
        interval: 10000,
        theme: 'minimalist',
        controls: true,
        progressbar: false,        
        controls_position: 'center',
        enable_navigation_keys: true,
        numbers: false,
        navigation: true,
        dots: true,
        label: true,
        progressbar_css: true,
        auto_play: true,
        preview: true,
        focus: false,
    });
});

$("html").niceScroll({
    cursorwidth:"7px",
    cursorborder: 0,
    boxzoom: true, 
});

$(document).ready(function(){
    "use strict";
    $(".portfolio-v").fitVids();
  });