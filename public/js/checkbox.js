jQuery(document).ready(function($) {
  printCheckedBox()
  var options = [];

  $( '.dropdown-menu a' ).on( 'click', function( event ) {


     var $target = $( event.currentTarget ),
         val = $target.attr( 'data-value' ),
         $inp = $target.find( 'input' ),
         idx;

     if ( ( idx = options.indexOf( val ) ) > -1 ) {
        options.splice( idx, 1 );
        setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
     } else {
        options.push( val );
        setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
     }

     $( event.target ).blur();

     return false;
  });

  //toggle when choose ielts courses
  // $('.english-toeic').click(function() {
  //   if($(this).hasClass('clicked')){
  //     $(this).removeClass('clicked');
  //     $('.toeic-target').addClass('hidden');
  //   }else{
  //     $(this).addClass('clicked');
  //     $('.toeic-target').removeClass('hidden');
  //   }
  // });
  //
  // $('.english-ielts').click(function() {
  //   if($(this).hasClass('clicked')){
  //     $(this).removeClass('clicked');
  //     $('.ielts-target').addClass('hidden');
  //   }else{
  //     $(this).addClass('clicked');
  //     $('.ielts-target').removeClass('hidden');
  //   }
  // });


});

function printCheckedBox(){
  var $boxes = $('a.small input:checked');
  $boxes.each(function(index, el) {

    //da thu .closet nhung k ra
    var title=$(this).parent().parent().parent().parent().children('button').text();
    title="<span class='red'>"+title+"</span>";
    var text=$(this).parent().text();
    $(".checked-box").append( "<li>"+title+": "+text+"</li>" );


  });
}

function handleCheck(checkbox){
  console.log('yo');
  if(checkbox.checked == true){
        console.log('1');
    }else{
        console.log('1');
   }
}
