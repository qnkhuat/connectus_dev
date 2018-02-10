jQuery(document).ready(function($) {
  $('.language.catigories').click(function() {
    distance = $('#courses').offset().top -20;
    $('html, body').animate({scrollTop: distance},500);
  });
});
