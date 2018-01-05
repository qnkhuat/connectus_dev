jQuery(document).ready(function($) {
console.log("fuck");

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
var w = $(document).width();
function coursePopup(content){
  console.log('I');
  if(w<=600){
    $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
  }
}

function interest(content,isHave){

  // alert(id);
  if(!isHave){
    $(this).addClass('interested');
    $('.cart-popup').append(content);
    if(w<600){//have to do this because append create new interest-button in the initial DOM
      addCourses = parseInt($('.interest-count-items').html()) +1;
      $('.interest-count-items').html(addCourses);
      $('.cart-popup').css('display', 'grid');
      setTimeout(function(){
        $('.cart-popup').css('display', 'none');
      },2000)
    }

}
