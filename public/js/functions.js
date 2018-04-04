function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}

//to hide the announce div
function hide(div){
  div.css('display','none')
  document.cookie='closed_announce=1'
}

//deal with announce alert
function timeout(waitTime){
  setTimeout(function(){
    $('#announce').css('display', 'block');
  }, waitTime*1000);
}


function expandCourse(div){
  if(w<=600){
    div.addClass('expand-course')
  }
}



var w = $(document).width();
function coursePopup(content){
  if(w<=600){
    $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
  }
}





//deal with announce part
closed_announce= getCookie('closed_announce')
if(closed_announce==1){
  a=1;
}else{
  timeout(3);
}
