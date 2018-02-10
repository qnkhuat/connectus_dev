jQuery(document).ready(function($) {
  $('.language.catigories').click(function() {
    distance = $('#courses').offset().top -20;
    console.log(distance);
    $('html, body').animate({scrollTop: distance},1000);
  });
});
