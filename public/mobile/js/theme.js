/************************************************
 * Template Name: QuickAd - Classified Mobile Template
 * Version: 1.0
 * Author: BYLANCER
 * Developed By: BYLANCER
 * Author URL: www.bylancer.com
 *************************************************/

(function ($) {

    "use strict";

    /* PRELOADER */
    $(window).on('load', function () {
        $(".preloading").fadeOut("slow");
        /*if($("body").hasClass("my_splash_page")){
            setTimeout(function(){
                window.location.href = 'welcome.html';
            }, 3000);
        }*/
    });

    $('#sidebarleft ul li a').on('click', function () {
        $('li a').removeClass("active");
        $(this).addClass("active");
    });

    feather.replace();

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".bg-header").addClass("active");
        }
        else {
            $(".bg-header").removeClass("active");
        }
    });

    $('.sidenav').on('scroll', function () {
        var scroll = $(this).scrollTop();
        if (scroll > 0) {
            $(".sidebar-header",$(this)).addClass("active");
        }
        else {
            $(".sidebar-header",$(this)).removeClass("active");
        }
    });

    /* SIDE NAVIGATION */
    $('#dismiss, .overlay').on('click', function () {
        $(this).parents('.sidenav').removeClass('active');
        $('#sidebarleft').removeClass('active');
        $('.overlay').removeClass('active');
        $('body').removeClass('noscroll');
    });

    $('#sidebarleftbutton,#sidebarrightbutton').on('click', function () {
        $('.overlay').addClass('active');
        $('body').addClass('noscroll');
    });

    $('#sidebarleftbutton').on('click', function () {
        $('#sidebarleft').addClass('active');
    });

    $('#sidebarrightbutton').on('click', function () {
        $('#sidebarright').addClass('active');
    });

    $('#locationButton').on('click', function () {
        $('#locationPage').addClass('active');
        $('body').addClass('noscroll');
    });

    $('#locationCountryButton').on('click', function (e) {
        e.preventDefault()
        $('#locationCountry').addClass('active');
        $('body').addClass('noscroll');
    });

    $('#locationCityButton').on('click', function (e) {
        e.preventDefault()
        $('#locationCity').addClass('active');
        $('body').addClass('noscroll');
    });


    /* DEFAULT CAROUSEL */
    $('.default-carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        arrows: false,
        variableWidth: true
    });

    /* GALLERY - FILTERING FUCTION */
    $(".filter-button").on("click", function () {
        var value = $(this).data('filter');

        if (value == "gallery-show-all") {
            $('.gallery-img-box').removeClass("gallery-hidden");
        }
        else {
            $('.gallery-img-box:not([data-category-image*="' + value + '"]').addClass("gallery-hidden");
            $('.gallery-img-box[data-category-image*="' + value + '"]').removeClass("gallery-hidden");
        }
    });

    $('.filter-gallery .filter-button').on("click", function () {
        $('.filter-gallery').find('.filter-button.active').removeClass('active');
        $(this).addClass('active');
    });


    /* MAGNIFICPOPUP GALLERY */
    $(".image-zoom").magnificPopup({
        type: "image",
        removalDelay: 300
    });



})(jQuery);


