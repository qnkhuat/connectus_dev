jQuery(document).ready(function($) {

  currentTransform=0;//keep track the transform location
  currentCourses=0;//keeptrack the course in order to know when to need move 1 course
  $('.pagination-button').click(function() {
    row= $(this).parent('div');
    group=row.find('.courses-group');
    courseItems=group.find('.courses-item-box');

    numberOfCourses=group.children('div').length;
    lengthOfACourse=courseItems.width();
    lengthOfGroup=group.width();

    ratioOfAItems=Math.round(lengthOfGroup/lengthOfACourse);
    if($(this).hasClass('prev-button')){
      if(currentCourses==0){
        //donothing
      }else if(currentCourses==1){//move 1 course
        if(ratioOfAItems==4){
          currentTransform=currentTransform+25;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses-=1;
        }
        if(ratioOfAItems==3){
          currentTransform=currentTransform+100/3;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses-=1;
        }
      }else{
        if(ratioOfAItems==4){
          currentTransform=currentTransform+50;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses-=2;
        }

        if(ratioOfAItems==3){
          currentTransform=currentTransform+200/3;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses-=2;
        }
      }
    }else if($(this).hasClass('next-button')){
      if(ratioOfAItems==4){
        if(currentCourses+4==numberOfCourses){
          //do nothing
        }else if(currentCourses+6<numberOfCourses){
          currentTransform=currentTransform-50;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses+=2;
        }else{//move 1 course
          currentTransform=currentTransform-25;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses+=1;
        }
      }else if(ratioOfAItems==3){
        if(currentCourses+3==numberOfCourses){
          //do nothing
        }else if(currentCourses+5<numberOfCourses){
          currentTransform=currentTransform-200/3;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses+=2;
        }else{//move 1 course
          currentTransform=currentTransform-100/3;
          value="translate("+currentTransform+"%)";
          group.css('transform', value);
          currentCourses+=1;
        }
      }
    }
  });


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
