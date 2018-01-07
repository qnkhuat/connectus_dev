$(function() {

  // click login button
  // $('.lightbox-button').click(function() {
  //   el=this.classList;//get the list of classes of clicked button. The button have to has class obey the rules : lightbox-button {class of the openbox}
  //   lightboxDiv=".lightbox."+el[1];
  //   $(lightboxDiv).css('display', 'initial');
  //   setTimeout(function(){
  //     $(lightboxDiv).css('z-index', '10000');
  //     $(lightboxDiv).css('opacity', '1');
  //   }, 1);
  // });

  $(".login-button").click(function(){
    openModalLogin()
  })

  $('.modal-background').click(function() {
      $("#mess-if-not-loged").attr("style", "display: none!important");
      $('.lightbox').css('z-index', '-1');
      $('.lightbox').css('opacity', '0');
      setTimeout(function(){
        $('.lightbox').css('display', 'none');
      },300);
  });

});

function openModalLogin() {
  $("#login-popup").attr("style", "display: initial; z-index: 10000; opacity: 1;");
}