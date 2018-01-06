jQuery(document).ready(function($) {



  $('.interest-button-top').hover(function() {
    $('.cart-popup').css('display', 'grid');
  }, function() {
    $('.cart-popup').css('display', 'none');
  });

  $('.interest-button').click(function() {
    if(!$(this).hasClass('interested')){
      $(this).addClass('interested');
      addCourses = parseInt($('.interest-count-items').html()) +1;
      $('.interest-count-items').html(addCourses);
      $('.cart-popup').css('display', 'grid');
      setTimeout(function(){
        $('.cart-popup').css('display', 'none');
      },2000)
    }
  });

});

function formatCourseInfoFollow(id,title,old_price,new_price,centre){
  return '<div class="interested-item"><div class="course-info-title"><a href="/khoahoc/' + id +'">'+title+'</a></div><div class="course-price-box"><span class="course-price-origin">'+old_price+'</span><span class="course-price-sale">'+new_price+'</span></div><div class="course-info-centre">'+centre+'</div></div>';
}


function interest(id,title,old_price,new_price,centre){
  var div = formatCourseInfoFollow(id,title,old_price,new_price,centre);
  $('.cart-popup').append(div);


}
