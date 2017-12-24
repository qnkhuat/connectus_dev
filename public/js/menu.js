jQuery(document).ready(function($) {


  //============mobile popup animation
  var w = $(document).width();
  if(w<600){
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
      console.log('clicked');
      if($('#course-popup-mobile .course-popup-detail').css('display')!='none'){
        console.log('none');
        $('#course-popup-mobile .course-popup-detail').css('display', 'none');
        $('.wrapup-button-up').css('display', 'none');
        $('.wrapup-button-down').css('display', 'inline-block');

      }else{
        console.log('yes');
        $('#course-popup-mobile .course-popup-detail').css('display', 'block');
        $('.wrapup-button-down').css('display', 'none');
        $('.wrapup-button-up').css('display', 'inline-block');
      }
    });


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

    $('.menu-mobile-popup-login').click(function() {
      $('.menu-mobile-popup-wrap').css('transform', 'translate(-100%)');
      $('.menu-mobile-popup-second-sence').css('display', 'inline-block');
    });

    // $('body').click(function() {
    //   if($('.menu-logo-button').hasClass('open')){
    //     $('.menu-logo-button').removeClass('open');
    //     $('.menu-mobile-popup').css('display', 'none');
    //   }
    // });
    // var boxDisplay = false;
    // var $win = $(window); // or $box parent container
		// var $box = $(".menu-logo-button");
    //
    //
		//  $win.on("click.Bst", function(event){
    //   if (
    //     $box.has(event.target).length == 0 //checks if descendants of $box was clicked
    //     &&
    //     !$box.is(event.target) //checks if the $box itself was clicked
    //   ){
    //
    //     alert("outside")
    //
		// 	} else {
		// 		alert("inside")
		// 	}
		// });
    //
    //



    //change when click interest-butotn

});
var w = $(document).width();
function coursePopup(content){
  if(w<600){
    $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
  }
}

function interest(content,isHave){
  if(!isHave){
    console.log('ha');
    $('.cart-popup').append(content);


      addCourses = parseInt($('.interest-count-items').html()) +1;
      $('.interest-count-items').html(addCourses);
      $('.cart-popup').css('display', 'grid');
      setTimeout(function(){
        $('.cart-popup').css('display', 'none');
      },2000)

  }
}
