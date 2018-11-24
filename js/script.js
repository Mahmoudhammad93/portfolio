/*jslint browser: true*/
/*global $, jQuery,lightbox, alert*/

$(function () {
	'use strict';
	// Navbar Scroll 
    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll > 150) {
            $('.navbar-default').addClass('navbar-fixed-top');
        } else {
            $('.navbar-default').removeClass('navbar-fixed-top');
        }
    });

    //Smooth Scroll To Div 
    $('.links a, .footer .logo img').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top - 80
        }, 1000);
    });

    // Text Writer
    var myText = 'My name is Mahmoud Hammad and I\'m Web Developer',
        i = 0;
    window.onload = function () {
        'use strict';
        var typeWriter = setInterval(function () {
            document.getElementById('heading-text').textContent += myText[i];
            i = i + 1;
            if (i > myText.length - 1) {
                clearInterval(typeWriter)
            }
        }, 100);
    };

	// Collapes Toggle
	$('#content').click(function () {
		$(this).toggleClass('change');
	});

	// Slider
	$('.slides').slidesjs({
	    play: {
	        active: true,
	      // [boolean] Generate the play and stop buttons.
	      // You cannot use your own buttons. Sorry.
	        effect: "slide",
	      // [string] Can be either "slide" or "fade".
	        interval: 5000,
	      // [number] Time spent on each slide in milliseconds.
	        auto: true,
	      // [boolean] Start playing the slideshow on load.
	        swap: true,
	      // [boolean] show/hide stop and play buttons
	        pauseOnHover: false,
	      // [boolean] pause a playing slideshow on hover
	        restartDelay: 2500
	      // [number] restart delay on inactive slideshow
	    }
	});

    // Animated Progress Skills
    $('.progress-bar').each(function () {
        $(this).animate({
            width: $(this).attr('data-width') + "%"
        });
    });

    // Scroll To Animation AOE
    AOS.init();

    // Scroll To Animation WOW
    new WOW().init();

	// Gallery Light Box
	lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
	});
	
	// Button Scroll Top
	var scrollBotton = $("#scroll-top");
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1000) {
            scrollBotton.addClass('fade-scrolltop');
        } else {
            scrollBotton.removeClass('fade-scrolltop');
        }
    });
    scrollBotton.click(function () {
        $("html,body").animate({scrollTop : 0}, 500);
    });

    //Links Add Active 
    $('.links li a').click(function () {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });

    // Form Contact
    var userError   = true,
        emailError  = true,
        phoneError  = true,
        msgError    = true;

    $('.username, .email, .phone, .message').blur(function () {

        if ($(this).val().length < 4) {

            $(this).css('border', '1px solid #ff7171').parent().find('.custom-alert').fadeIn(200)
            .end().find('.asterisx').fadeIn(100).end().find('.fa-check').fadeOut(100);

            userError   = true,
            emailError  = true,
            phoneError  = true,
            msgError    = true;

        } else {

            $(this).css('border', '1px solid #47c347').parent().find('.custom-alert').fadeOut(200)
            .end().find('.asterisx').fadeOut(100).end().find('.fa-check').fadeIn(100);

            userError   = false,
            emailError  = false,
            phoneError  = false,
            msgError    = false;

        }

    });

    // Submit Form Validation

    $('.form-contact').submit(function (e) {
        
        if (userError === true || emailError === true || phoneError === true || msgError === true) {

            e.preventDefault();

            $('.username, .email, .phone, .message').blur();
            $('.btn-block').stop();
            swal({
              title: "Oops",
              text: "Complete Your Info !",
              icon: "error",
              dangerMode: true,
            });

        } else {
            
        }
    })

    // Page Loading
    $(window).on('load', function () {
        $('.loading-page').fadeOut(1000);
    });
});