$(function() {

  //click login button
  $('.lightbox-button').click(function() {
    el=this.classList;//get the list of classes of clicked button. The button have to has class obey the rules : lightbox-button {class of the openbox}
    lightboxDiv=".lightbox."+el[1];

    $(lightboxDiv).css('display', 'initial');
    setTimeout(function(){
      $(lightboxDiv).css('z-index', '10000');
      $(lightboxDiv).css('opacity', '1');
    }, 1);
  });
  $('.modal-background').click(function() {
    $('.lightbox').css('z-index', '-1');
    $('.lightbox').css('opacity', '0');
    setTimeout(function(){
      $('.lightbox').css('display', 'none');
    },300);
  });

});
