jQuery(document).ready(function($) {



  $('.interest-button-top').hover(function() {
    $('.cart-popup').css('display', 'grid');
  }, function() {
    $('.cart-popup').css('display', 'none');
  });




  //
  // $('.interest-button').click(function() {
  //   if(!$(this).hasClass('interested')){
  //     $(this).addClass('interested');
  //     console.log('hey');
  //     addCourses = parseInt($('.interest-count-items').html()) +1;
  //     $('.interest-count-items').html(addCourses);
  //     $('.cart-popup').css('display', 'grid');
  //     setTimeout(function(){
  //       $('.cart-popup').css('display', 'none');
  //     },2000)
  //   }
  // });

});
