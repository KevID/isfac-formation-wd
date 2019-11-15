$(document).ready(function () {
    'use strict';

    var pageSection = $(".parallax, section, .section-bg, .bg-img");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    $('.menu-list li a ').on('click', function () {
        $('body').removeClass('menu-is-opened');
        $('.menu-list ul').slideUp(300);
    });

    $('.navbar-toggle').on('click', function () {
        $('body').addClass('menu-is-opened');
    });

    $('.close-menu, .click-capture').on('click', function () {
        $('body').removeClass('menu-is-opened');
        $('.menu-list ul').slideUp(300);
    });

    /* TODO: Fonction IF ne fonctionne pas */
    if ($('body').hasClass('menu-is-opened')) {
        $('.section').on('click', function () {
            $('body').removeClass('menu-is-opened');
            $('.menu-list ul').slideUp(300);
        });
    }

    $('#pagepiling').pagepiling({
        scrollingSpeed: 280,
        loopBottom: true,
        anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
        afterLoad: function (anchorLink, index) {
            if ($('.pp-section.active').scrollTop() > 0) {
                $('.navbar').removeClass('navbar-white');
            } else {
                $('.navbar').addClass('navbar-white');
            }
        }
    });
    $('.pp-scrollable').on('scroll', function () {
        var scrollTop = $(this).scrollTop();
        if (scrollTop > 0) {

            $('.navbar').addClass('bg-light');
        } else {
            $('.navbar').removeClass('bg-light');
        }
    });
    $('#pp-nav').remove().appendTo('body').addClass('white');
    $('.pp-nav-up').on('click', function () {
        $.fn.pagepiling.moveSectionUp();
    });
    $('.pp-nav-down').on('click', function () {
        $.fn.pagepiling.moveSectionDown();
    });

});

function openModal(myModal) {
    $(myModal).modal('show');
    $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
    $('.menu-list ul').slideUp(300);
}