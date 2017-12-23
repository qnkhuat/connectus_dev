jQuery(document).ready(function($) {
  $('.interest-button').click(function() {
    addCourses = parseInt($('.cart-count-items').html()) +1;
    $('.cart-count-items').html(addCourses);
  });

});
