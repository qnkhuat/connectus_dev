$(function() {

  //click login button
  $('.modal-background').click(function() {
    //return to login mode instead of signup mode
    $('.username').css('display', 'none');
    $('.signup-submit').css('display', 'none');
    $('.login-submit').css('display', 'block');
  });


  //click create accout
  $('.signup-button p').click(function() {
    $('.username').css('display', 'block');
    $('.signup-submit').css('display', 'block');
    $('.login-submit').css('display', 'none');


    $('.signup-button').css('display', 'none');
    $('.signin-button').css('display', 'block');
  });

  $('.signin-button p').click(function() {
    $('.username').css('display', 'none');
    $('.signup-submit').css('display', 'none');
    $('.login-submit').css('display', 'block');

    $('.signup-button').css('display', 'block');
    $('.signin-button').css('display', 'none');
  });

});
