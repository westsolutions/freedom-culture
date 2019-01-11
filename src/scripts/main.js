import $ from 'jquery';
import 'bootstrap/dist/js/bootstrap';
import 'magnific-popup/dist/jquery.magnific-popup.min';

window.$ = window.jQuery = $;

$(document).ready(() => {
    $('.js--toggle-menu').click(() => {
        $('.js--nav').fadeToggle('fast');
        $('body').toggleClass('disabled-scrolling');
    });

    $('.js--play-video').magnificPopup({
        type: 'iframe',
    });

    $('.js--scroll-to-top').click(() => {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

});

$(window).scroll(() => {
    let scrollY = (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);
    if (scrollY < 100) {
        $('.js--scroll-to-top').fadeOut();
    } else {
        $('.js--scroll-to-top').fadeIn();
    }

});