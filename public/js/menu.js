jQuery(document).ready(function($) {


  //============mobile popup animation
  var w = $(document).width();
  if(w<=600){
    $('.courses-item-box').click(function() {
      $('#course-popup-mobile').css('display', 'block');
      $('.wrapup-button-down').css('display', 'none');
      $('.wrapup-button-up').css('display', 'inline-block');
      setTimeout(function(){
        $('#course-popup-mobile').css('transform', 'translate(0)');
      },1);
    });
  }


    //wrapup for mobile course-popup
    $('.wrapup-button').click(function() {
      if($('#course-popup-mobile .course-popup-detail').css('display')!='none'){
        $('#course-popup-mobile .course-popup-detail').css('display', 'none');
        $('.wrapup-button-up').css('display', 'none');
        $('.wrapup-button-down').css('display', 'inline-block');

      }else{
        $('#course-popup-mobile .course-popup-detail').css('display', 'block');
        $('.wrapup-button-down').css('display', 'none');
        $('.wrapup-button-up').css('display', 'inline-block');
      }
    });




    //========toggle when click into the logo

    //click to switch window in menu window
    $('.menu-logo-button').click(function() {
      if($('.menu-logo-button').hasClass('open')){
        $('.menu-logo-button').removeClass('open');
        $('.menu-mobile-popup').css('display', 'none');
        $('.menu-mobile-popup-wrap').css('transform', 'translate(0%)');
        $('.menu-mobile-popup-second-sence').css('display', 'none');
      }else{
        $('.menu-logo-button').addClass('open');
        $('.menu-mobile-popup').css('display', 'initial');
      }
    });




    // //==========toggle when click outside the logo
    // $('.menu-logo-button').hover(function() {
    //   /* Stuff to do when the mouse enters the element */
    //   $('.menu-logo-button').addClass('open');
    //   $('.menu-mobile-popup').css('display', 'initial');
    // }, function() {
    //   /* Stuff to do when the mouse leaves the element */
    //   $('.menu-logo-button').removeClass('open');
    //   $('.menu-mobile-popup').css('display', 'none');
    //   $('.menu-mobile-popup-wrap').css('transform', 'translate(0%)');
    //   $('.menu-mobile-popup-second-sence').css('display', 'none');
    // });

    //change window when click dang nhap
    $('.menu-mobile-popup-login').click(function() {
      $('.menu-mobile-popup-wrap').css('transform', 'translate(-100%)');
      $('.menu-mobile-popup-second-sence').css('display', 'inline-block');
    });


//change when click interest-butotn

});
var w = $(document).width();
function coursePopup(content){

  if(w<=600){
    console.log('yo');
    $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
  }
}

function interest(id){

  alert(id);

}
