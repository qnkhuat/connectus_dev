jQuery(document).ready(function($) {

  currentTransform=0;//keep track the transform location
  currentCourses=0;//keeptrack the course in order to know when to need move 1 course
  $('#courses .prev-button').css('display', 'none');//hide the pre button from the beginning


  function tooggleButton(mode){
    if(mode==1){//next-button appear
      $('#courses .prev-button').css('display', 'none');
      $('#courses .next-button').css('display', 'initial');
    }else if(mode==2){//prev-button appear
      $('#courses .prev-button').css('display', 'initial');
      $('#courses .next-button').css('display', 'none');
    }
  }
  function handle_css(currentTransform){
    value="translate("+currentTransform+"%)";
    group.css('transform', value);
  }


  $('#courses .pagination-button').click(function() {

    row= $(this).parent('div');
    group=row.find('.courses-group');
    courseItems=group.find('.courses-item-box');

    numberOfCourses=group.children('div').length -1; // -1 of more button div
    lengthOfACourse=courseItems.width();
    lengthOfGroup=group.width();

    ratioOfAItems=Math.round(lengthOfGroup/lengthOfACourse);

    //control the hide and display of button
    $('#courses .prev-button').css('display', 'initial');
    $('#courses .next-button').css('display', 'initial');



    if($(this).hasClass('prev-button')){
      if(currentCourses==0){
      }else if(currentCourses==1){//move 1 course
        if(ratioOfAItems==4){
          currentTransform=currentTransform+25;
          handle_css(currentTransform);
          currentCourses-=1;

          tooggleButton(1);
        }
        if(ratioOfAItems==3){
          currentTransform=currentTransform+100/3;
          handle_css(currentTransform);
          currentCourses-=1;
          tooggleButton(1);
        }
      }else{
        if(ratioOfAItems==4){
          currentTransform=currentTransform+50;
          handle_css(currentTransform);
          currentCourses-=2;
        }

        if(ratioOfAItems==3){
          currentTransform=currentTransform+200/3;
          handle_css(currentTransform);
          currentCourses-=2;
        }
      }
    }else if($(this).hasClass('next-button')){
      if(ratioOfAItems==4){
        if(currentCourses+4==numberOfCourses){
          //do nothing
        }else if(currentCourses+6<numberOfCourses){
          currentTransform=currentTransform-50;
          handle_css(currentTransform);
          currentCourses+=2;
        }else{//move 1 course
          currentTransform=currentTransform-25;
          handle_css(currentTransform);
          currentCourses+=1;

          //hide the button
          tooggleButton(2);
        }
      }else if(ratioOfAItems==3){
        if(currentCourses+3==numberOfCourses){
          //do nothing
        }else if(currentCourses+5<numberOfCourses){
          currentTransform=currentTransform-200/3;
          handle_css(currentTransform);
          currentCourses+=2;
        }else{//move 1 course
          currentTransform=currentTransform-100/3;
          handle_css(currentTransform);
          currentCourses+=1;

          //hide the button
          tooggleButton(2);
        }
      }
    }
  });

  var w = $(document).width();
  function coursePopup(content){
    if(w<=600){
      $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
    }

  }
  //load more course in mobile mode
  for(i=1;i<=3;i++){
    $('.more-item-box:nth-child('+i+')').css('display', 'inline-block');
  }
  $('.more-button').click(function() {
    var count =0,current=0;
    var steps=3;
    var lengthOfCourses=$(this).parent().find('div.more-item-box').length;
    for(i =1;i<=lengthOfCourses;i++){
      var name = $(this).parent().find('.more-item-box:nth-child('+i+')');
      if(name.css('display')=='none' && count <steps){
        name.css('display', 'inline-block');
        count++;
        current=i;
      }

    }
    if(count<steps || current ==lengthOfCourses){//keep track to hide the more button
      $(this).css('display', 'none');
    }

  });




});
