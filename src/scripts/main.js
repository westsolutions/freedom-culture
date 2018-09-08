import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap';
import 'magnific-popup/dist/jquery.magnific-popup.min';

$(document).ready(function(){
  $('.js--toggle-menu').click(function(){
    $('.js--nav').fadeToggle('fast');
  });

  $('.js--play-video').magnificPopup({
    type: 'iframe',
  });

});







