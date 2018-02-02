jQuery(document).ready(function($) {
  $('.interest-button-top').hover(function() {
    $('.cart-popup').css('display', 'grid');
  }, function() {
    $('.cart-popup').css('display', 'none');
  });
});


w =$(document).width();

Number.prototype.formatNumber = function(n, x) {
  var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
  return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
}

//create html
function formatCourseInfoFollow(id,title,old_price,new_price,centre){
  old_price = parseFloat(old_price)
  new_price = parseFloat(new_price)
  old_price = old_price.formatNumber()
  new_price = new_price.formatNumber()
  // closestItem='unInterested($(this).closest(".interested-item"), ' + id + ')';
  // return '<div class="interested-item"><div class="interested-item-content"><div class="course-info-title"><a href="/khoahoc/' + id +'">'+title+'</a></div><div class="course-price-box"><span class="course-price-origin">'+old_price+'</span><span class="course-price-sale">'+new_price+'</span></div><div class="course-info-centre">'+centre+'</div></div><div class="interested-item-control-button"><div class="details-button"><a href=/khoahoc/'+id+'>Chi tiết</a></div><div class="delete-button"><i class="fa fa-times" onclick='+closestItem+' aria-hidden="true"></i></div></div></div>';
  return '<div class="interested-item"> <div class="interested-item-content"> <div class="course-info-title"><a href="/khoahoc/' + id +'">'+title+'</a></div><div class="course-price-box"><span class="course-price-origin">'+old_price+'</span><span class="course-price-sale">'+new_price+'</span></div><div class="course-info-centre">'+centre+'</div></div><div class="interested-item-control-button"> <div class="details-button"><a href=/khoahoc/'+id+'>Chi tiết</a></div><div class="delete-button"><i class="fa fa-times" onclick="unInterested($(this).closest(\'.interested-item\'), ' + id + ')"' + ' aria-hidden="true"></i></div></div></div>';
}

//append new item when use press interest
function interest(id,title,old_price,new_price,centre){
  //appear when click just for desktop
  if(w>600){
    $('.cart-popup').css('display', 'grid');
    setTimeout(function(){
      $('.cart-popup').css('display', 'none');
    },2000)
  }
    var div = formatCourseInfoFollow(id,title,old_price,new_price,centre);
    courseFollowToggle(id, "follow", div);
}

//unfollow handler
function unInterested(div, id){
  courseFollowToggle(id, "unfollow", div)
}

$.ajaxSetup({
  headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

function courseFollowToggle(course_id, type, div) {
  var url = type == "follow" ? "/course-follow" : "/course-unfollow"
  var status;
  $.ajax({
    url : url,
    type : "post",
    dataType : "json",
    data : {
      id: course_id
    },
    success : function (result){
      if(type == "follow" && result.success) {
        $('.cart-popup').append(div);
        $('.interest-count-items').html(result.totalCourseFollows);
      }
      else if (result.success) {
        $('.interest-count-items').html(result.totalCourseFollows);
        div.remove();
      }

      if(!result.loged) {
        $("#mess-if-not-loged").text(result.message)
        $("#mess-if-not-loged").attr("style", "display: block!important");
        openModalLogin();
      }
    }
  });
}
