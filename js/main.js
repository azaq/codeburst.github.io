/*
    Template Name: FOLIO. - Onepage Responsive Personal Portfolio Template
    Author       : Mo Dauod
    Author URL   : modauod@gmail.com
    Description  : A Onepage Responsive Personal Portfolio Template
    Version      : 1.0
*/


/* Table of Content
----------------------------------------------------------
1.  PRE LOADING
2.  SMOTH SCROLL
3.  FIXED NAVBAR
4.  PORTFOLIO FILTER
5.  MAGNIFIC POPUP
6.  WOW JS
7.  Disable Form
----------------------------------------------------------
*/


/*global $, jQuery, alert*/
jQuery(function ($) {
    'use strict';
      
    /*   1.  PRE LOADING
    ---------------------------------------------- */
    $(window).on('load', function () {
        $('.sk-folding-cube').fadeOut();
        $('.loading-overlay').delay(400).fadeOut('slow', function () {
            $('body').css("overflow", "auto");
        });
    });
    
    
    /*   2.  SMOTH SCROLL
    ---------------------------------------------- */
    $('.scroll').on('click', function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 70
        }, 1000);
        e.preventDefault();
    });
    
    
    /*   3.  FIXED NAVBAR
    ---------------------------------------------- */
    $(window).on('scroll', function () {
        var nav = $('.navbar');
        if ($(window).scrollTop() > 50) {
            nav.addClass('navbar-fixed-top');
        } else {
            nav.removeClass('navbar-fixed-top');
        }
    });
    
    
    /*   4.  PORTFOLIO FILTER
    ---------------------------------------------- */
    $('.filter-button').on('click', function () {
        var value = $(this).attr('data-filter'),
            filter = $('.filter');
        if (value === 'all') {
            filter.show('1000');
        } else {
            filter.not('.' + value).hide('3000');
            filter.filter('.' + value).show('3000');
        }
    });
    
    $("ul.folio li").on('click', function () {
        $("ul.folio li").removeClass('active');
        $(this).addClass('active');
    });
    
    
    /*   5. MAGNIFIC POPUP
    ---------------------------------------------- */
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    });
    
    
    /*   6. WOW JS
    ---------------------------------------------- */
    new WOW().init();
    

  /*   7. Disable Form
    ---------------------------------------------- */
    $('body').find('#form').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var $form = $(this),
            required = $form.find('[required]'),
            serializedData = $form.serialize(),
            url = $(this).attr('action');
        $form.find('#send, .form-control').prop('disabled', true);
        $.post(url, serializedData, function (response) {
            if (response == 'sent') {
                $('body').find('#send').val('Thank you!');
            } else {
                console.log('Error: Something went wrong!');
            }
        });
    });


    
});