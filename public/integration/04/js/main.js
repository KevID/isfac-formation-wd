$(document).ready(function() {
    'use strict';

    $(window).on('load', function() {
        $('.loader').fadeOut(1000);
    });

    // sections background image from data background
    var pageSection = $(".parallax, section, .section-bg, .bg-img");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    $('.menu-list li a ').on('click', function () {
        $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
        $('.menu-list ul').slideUp(300);
    });

    $('.navbar-toggle').on('click', function() {
        $('body').removeClass('menu-is-closed').addClass('menu-is-opened');
    });

    $('.close-menu, .click-capture').on('click', function() {
        $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
        $('.menu-list ul').slideUp(300);
    });
/*
    if ($('.owl-carousel').length > 0) {
        $(".review-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1
                },
                720: {
                    items: 1,
                },
                1280: {
                    items: 1
                }
            },
            responsiveRefreshRate: 0,
            nav: true,
            navText: [],
            animateIn: 'fadeIn',
            dots: false
        });
    }

*/
        $('#pagepiling').pagepiling({
            scrollingSpeed: 280,
            loopBottom: true,
            anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
            afterLoad: function(anchorLink, index) {
                if ($('.pp-section.active').scrollTop() > 0) {
                    $('.navbar').removeClass('navbar-white');
                } else {
                    $('.navbar').addClass('navbar-white');
                }
            }
        });
        $('.pp-scrollable').on('scroll', function() {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > 0) {

                $('.navbar').addClass('bg-light');
            } else {
                $('.navbar').removeClass('bg-light');
            }
        });
        $('#pp-nav').remove().appendTo('body').addClass('white');
        $('.pp-nav-up').on('click', function() {
            $.fn.pagepiling.moveSectionUp();
        });
        $('.pp-nav-down').on('click', function() {
            $.fn.pagepiling.moveSectionDown();
        });

/*
    //Portfolio
    $('#portfolio').imagesLoaded(function () {

        // filter items on button click
        $('.filtering').on('click', 'span', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
            $(this)
                .addClass("active")
                .siblings()
                .removeClass("active");
        });

        var $grid = $('.gallery').isotope({
            // options options
            itemSelector: '.items',
            layoutMode: 'fitRows'
        });
        // images have loaded


    });

    //Image Light Box Popup
    $('.image-link').magnificPopup({ type: 'image' });
    $('.video-link').magnificPopup({ type: 'iframe' });
*/
})(jQuery);



function openModal(myModal){
    $(myModal).modal('show');
    $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
    $('.menu-list ul').slideUp(300);
}