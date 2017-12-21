$(function() {

  //click login button
  $('.lighbox-button.login-popup').click(function() {
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
