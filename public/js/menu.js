jQuery(document).ready(function($) {
  //popup in mobile mode
  var w = $(document).width();
  function coursePopup(content){

    if(w<=600){
      $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
    }
  }




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


//change when click interest-butotn

});
