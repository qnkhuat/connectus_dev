$(function() {

  //click login button
  $('p.login-button').click(function() {
    $('#login-popup').css('display', 'initial');
    setTimeout(function(){
      $('#login-popup').css('z-index', '1');
      $('#login-popup').css('opacity', '1');
    }, 1);
  });
  $('.modal-background').click(function() {
    $('#login-popup').css('z-index', '-1');
    $('#login-popup').css('opacity', '0');
    setTimeout(function(){
      $('#login-popup').css('display', 'none');
    },300);

    //return to login mode instead of signup mode
    $('.username').css('display', 'none');
    $('.signup-submit').css('display', 'none');
    $('.login-submit').css('display', 'initial');
  });


  //click create accout
  $('.signup-button p').click(function() {
    $('.username').css('display', 'initial');
    $('.signup-submit').css('display', 'initial');
    $('.login-submit').css('display', 'none');
  });

});
