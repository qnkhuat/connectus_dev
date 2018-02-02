$(function() {

  //click lightbox button
  $('.lightbox-button').click(function() {
    el=this.classList;//get the list of classes of clicked button. The button have to has class obey the rules : lightbox-button {class of the openbox}
    lightboxDiv=".lightbox_self."+el[1];
    $(lightboxDiv).css('display', 'initial');
    setTimeout(function(){
      $(lightboxDiv).css('z-index', '10000');
      $(lightboxDiv).css('opacity', '1');
    }, 1);
  });


  $('.modal-background').click(function() {
      $('.lightbox_self').css('z-index', '-1');
      $('.lightbox_self').css('opacity', '0');
      setTimeout(function(){
        $('.lightbox_self').css('display', 'none');
      },300);
      $("#mess-if-not-loged").hide();
  });



});

function openModalLogin(){
  $('.lightbox_self.login-popup').css('display', 'initial');
  setTimeout(function(){
    $('.lightbox_self.login-popup').css('z-index', '10000');
    $('.lightbox_self.login-popup').css('opacity', '1');
  }, 1);
}
