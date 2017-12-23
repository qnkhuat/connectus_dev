var swiper = new Swiper('.course-details-info-left-slider .swiper-container', {
    pagination: '.course-details-info-left-slider .swiper-pagination',
    paginationClickable: true,
    nextButton: '.course-details-info-left-slider .swiper-button-next',
    prevButton: '.course-details-info-left-slider .swiper-button-prev',
    spaceBetween: 30
});

//scroll in single courses
var w = $(window).width();

if(w>600){
  var topPosition=$('.course-details-info-right-content').offset().top -60;//-50 of the fixed menu
  var leftPosition=$('.course-details-info-right').offset().left +6;//+6 of padding
  var widthOfBox= $('.course-details-info-right').width();
  $(window).scroll(function (event) {
    if($(window).scrollTop()>=topPosition){
      $('.course-details-info-right').addClass('scroll');
      $('.course-details-info-right').css('width',widthOfBox);
      $('.course-details-info-right').css('left',leftPosition);
    }else{
      $('.course-details-info-right').removeClass('scroll');
      $('.course-details-info-right').css('left','auto');
    }
  });
}else{

}

function refreshModal(){

}
//toggle of choose course button
$('.choose-course-button').click(function() {
  $('.course-options-box').css('display', 'none');
  $('.checkout-box').css('display', 'initial');
});


//temporary js for signup course popup
$('.checkout-step1 .login-submit').click(function() {
  $('.checkout-step1').css('display', 'none');
  $('.checkout-step2').css('display', 'initial');
});

//change when click interest-butotn
$('.interest-button').click(function() {
  addCourses = parseInt($('.cart-count-items').html()) +1;
  $('.cart-count-items').html(addCourses);
});
