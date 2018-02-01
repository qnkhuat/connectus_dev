jQuery(document).ready(function($) {



  //In case there is less than 3/4 courses contained
  // rows= $('.courses-row .pagination-button').parent('div');
  // rows.each(function(i, obj) {
  //   group=obj.find('.courses-group');
  //   lengthOfGroup=group.width();
  //   courseItems=group.find('.courses-item-box');
  //   lengthOfACourse=courseItems.width();
  //   ratioOfAItems=Math.round(lengthOfGroup/lengthOfACourse);
  //   numberOfCourses=group.children('div').length -1;// -1 of more button div
  //   console.log(numberOfCourses);
  //   if(numberOfCourses<ratioOfAItems){
  //     $('.courses-row .pagination-button').css('display','none');
  //   }
  //
  //   $('.courses-row .prev-button').css('display', 'none');//hide the pre button from the beginning
  // });

    $('.courses-row .pagination-button').click(function() {


    row= $(this).parent('div');
    group=row.find('.courses-group');
    courseItems=group.find('.courses-item-box');

    numberOfCourses=group.children('div').length -1; // -1 of more button div
    lengthOfACourse=courseItems.width();
    lengthOfGroup=group.width();
    lengthOfRow=row.width();

    ratioOfAItems=Math.round(lengthOfGroup/lengthOfACourse);


    a=$(this).parent();
    b=a.find('.courses-group').css('transform');
    c=matrixToArray(b);
    currentTransform=c[4]/lengthOfGroup;


    //control the hide and display of button
    row.find('.prev-button').css('display', 'initial');
    row.find('.next-button').css('display', 'initial');


    if(ratioOfAItems==4){
      if(currentTransform+0.5==0 || currentTransform +0.25==0){
        row.find('.prev-button').css('display', 'none');
      }

      if($(this).hasClass('next-button')){
        if(Math.abs(currentTransform)+0.5<=(numberOfCourses-4)/4){
          transformTo= (currentTransform-0.5)*100;
          handle_css(transformTo);
          if(Math.abs(currentTransform)+0.5==(numberOfCourses-4)/4){
            tooggleButton(2,row);
          }
        }else{
          transformTo= (currentTransform-0.25)*100;
          handle_css(transformTo);
          tooggleButton(2,row);
        }

      }else if($(this).hasClass('prev-button')){
        if(Math.abs(currentTransform)-0.5>=0){
          transformTo= (currentTransform+0.5)*100;
          handle_css(transformTo);
        }else{
          transformTo= (currentTransform+0.25)*100;
          handle_css(transformTo);
          // tooggleButton(1,row);
        }
      }
    }else if(ratioOfAItems==3){
      if(currentTransform+2/3==0 || currentTransform +1/3==0){
        row.find('.prev-button').css('display', 'none');
      }
      if($(this).hasClass('next-button')){
        if(Math.abs(currentTransform)+2/3<=(numberOfCourses-3)/3){
          transformTo= (currentTransform-2/3)*100;
          handle_css(transformTo);
          if(Math.abs(currentTransform)+2/3==(numberOfCourses-3)/3){
            tooggleButton(2,row);
          }
        }else{
          transformTo= (currentTransform-1/3)*100;
          handle_css(transformTo);
          tooggleButton(2,row);
        }

      }else if($(this).hasClass('prev-button')){
        if(Math.abs(currentTransform)-2/3>=0){
          transformTo= (currentTransform+2/3)*100;
          handle_css(transformTo);
        }else{
          transformTo= (currentTransform+1/3)*100;
          handle_css(transformTo);
          // tooggleButton(1,row);
        }
      }
    }

  });

  var w = $(document).width();
  // function coursePopup(content){
  //   if(w<=600){
  //     $('#course-popup-mobile').find(".course-popup-mobile-content").html(content[0].outerHTML);
  //   }
  //
  // }


  //load more course in mobile mode
  if(w<=600){
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
  }


});


function tooggleButton(mode,row){
  if(mode==1){//next-button appear
    // $('.courses-row .prev-button').css('display', 'none');
    // $('.courses-row .next-button').css('display', 'initial');
    row.find('.prev-button').css('display', 'none');
    row.find('.next-button').css('display', 'initial');
  }else if(mode==2){//prev-button appear
    // $('.courses-row .prev-button').css('display', 'initial');
    // $('.courses-row .next-button').css('display', 'none');
    row.find('.prev-button').css('display', 'initial');
    row.find('.next-button').css('display', 'none');
  }
}

function handle_css(currentTransform){
  value="translate("+currentTransform+"%)";
  group.css('transform', value);
}

function matrixToArray(matrix) {
    return matrix.substr(7, matrix.length - 8).split(', ');
}
