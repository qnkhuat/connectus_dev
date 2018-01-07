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



//create html
function formatCourseInfoFollow(id,title,old_price,new_price,centre){
  closestItem='unInterested($(this).closest(".interested-item"))';
  return '<div class="interested-item"><div class="interested-item-content"><div class="course-info-title"><a href="/khoahoc/' + id +'">'+title+'</a></div><div class="course-price-box"><span class="course-price-origin">'+old_price+'</span><span class="course-price-sale">'+new_price+'</span></div><div class="course-info-centre">'+centre+'</div></div><div class="interested-item-control-button"><div class="details-button""><a href=/khoahoc/'+id+'>Chi tiết</a></div><div class="delete-button"><i class="fa fa-times" onclick='+closestItem+' aria-hidden="true"></i></div></div></div>';
}

//append new item when use press interest
function interest(id,title,old_price,new_price,centre){
  var div = formatCourseInfoFollow(id,title,old_price,new_price,centre);
  $('.cart-popup').append(div);
}

//unfollow handler
function unInterested(closest){
  addCourses = parseInt($('.interest-count-items').html()) -1;
  $('.interest-count-items').html(addCourses);
  closest.remove();
}
