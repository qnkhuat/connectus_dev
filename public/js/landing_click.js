$(document).ready(function() {
  $('.entries').click(function() {
    $('.tab').css('display', 'none');
    if($(this).hasClass('info')){
      $('.info.tab').css('display', 'block');
    }else if($(this).hasClass('courses')){
      $('.courses.tab').css('display', 'block');
    }else if($(this).hasClass('images')){
      $('.images.tab').css('display', 'block');
    }else if($(this).hasClass('feedbacks')){
      $('.feedbacks.tab').css('display', 'block');
    }
  });
});
