$(function() {

  //click login button
  $('p.login-button').click(function() {
    $('#login-popup').css('z-index', '1');
    $('#login-popup').css('opacity', '1');
  });
  $('.modal-background').click(function() {
    $('#login-popup').css('z-index', '-1');
    $('#login-popup').css('opacity', '0');
  });



  //click create accout
  $('.signup-button p').click(function() {

    $('.username').css('display', 'initial');
    $('.signup-submit').css('display', 'initial');
    $('.login-submit').css('display', 'none');
    console.log('fuck');
  });
});
