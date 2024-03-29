var swiper = new Swiper('.course-details-info-left-slider .swiper-container', {
    pagination: '.course-details-info-left-slider .swiper-pagination',
    paginationClickable: true,
    nextButton: '.course-details-info-left-slider .swiper-button-next',
    prevButton: '.course-details-info-left-slider .swiper-button-prev',
    spaceBetween: 30,

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



function toggleModal(mode){
  if(mode ==1){
    $('.checkout-step1').css('display', 'initial');
    $('.checkout-step2').css('display', 'none');
  }else if (mode ==2 ){
    $('.checkout-step1').css('display', 'none');
    $('.checkout-step2').css('display', 'initial');
  }
}

//toggle of choose course button
$('.choose-course-button').click(function() {
  $('.course-options-box').css('display', 'none');
  $('.checkout-box').css('display', 'initial');
  $("#studen-reg-course-branch").val($(this).data("branch"));
  if(!login_status){
    toggleModal(1);
  }else{
    toggleModal(2);
  }

});

$('.modal-background').click(function() {
  $('.course-options-box').css('display', 'initial');
  $('.checkout-box').css('display', 'none');
});

//handle the back button
$('.back-button').click(function() {
  $('.course-options-box').css('display', 'initial');
  $('.checkout-box').css('display', 'none');
});
