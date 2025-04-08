jQuery(function($) {
    "use strict";

    // Scroll to top functionality
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });

    $('#return-to-top').on('click', function() {
        $('body,html').animate({ scrollTop: 0 }, 500);
    });

    // Side navigation toggle
    $('.gb_toggle').on('click', function() {
        crockery_store_Keyboard_loop($('.side_gb_nav'));
    });

    // Preloader fade out
    setTimeout(function() {
        $(".loader").fadeOut("slow");
    }, 1000);

    // Sticky menu
    $(window).on('scroll', function() {
        var data_sticky = $('.menubar').data('sticky');
        if (data_sticky === true) {
            if ($(this).scrollTop() > 1) {
                $('.menubar').addClass("stick_head");
            } else {
                $('.menubar').removeClass("stick_head");
            }
        }
    });

});

// Mobile responsive menu
function crockery_store_menu_open_nav() {
    jQuery(".sidenav").addClass('open');
}

function crockery_store_menu_close_nav() {
    jQuery(".sidenav").removeClass('open');
}

jQuery(document).ready(function($) {
   // Slider
  $(document).ready(function() {
    $('#slider .owl-carousel').owlCarousel({
      loop: false,
      margin: 0,
      nav: true,
      dots: true,
      rtl: false,
      items: 1,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
    });
  });
});

// timer js
jQuery(document).ready(function () {
    jQuery(".product-cat").hide();
    jQuery("button.product-btn").click(function () {
        jQuery(".product-cat").toggle();
    });

    var crockery_store_mydate = jQuery('.date').val();
    jQuery(".countdown").each(function () {
        crockery_store_countdown(jQuery(this), crockery_store_mydate);
    });
});

function crockery_store_countdown($timer, crockery_store_mydate) {
    var crockery_store_countDownDate = new Date(crockery_store_mydate).getTime();

    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = crockery_store_countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        days = (days < 10) ? "0" + days : days;
        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        // Update the HTML with structured elements
        $timer.html(`
            <div class="countdown-item"><span class="countdown-value">${days}</span><span class="countdown-label">Days</span></div>
            <div class="countdown-item"><span class="countdown-value">${hours}</span><span class="countdown-label">Hours</span></div>
            <div class="countdown-item"><span class="countdown-value">${minutes}</span><span class="countdown-label">Minutes</span></div>
            <div class="countdown-item"><span class="countdown-value">${seconds}</span><span class="countdown-label">Seconds</span></div>
        `);

        if (distance < 0) {
            clearInterval(x);
            $timer.html("<div class='expired'>SALE EXPIRED</div>");
        }
    }, 1000);
}
