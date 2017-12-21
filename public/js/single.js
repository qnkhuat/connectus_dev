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
