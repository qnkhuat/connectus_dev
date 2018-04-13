<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nền tảng kết nối học viên với các lớp học, khóa học một cách nhanh nhất, phù hợp nhất và tiết kiệm nhất.">
    <meta name="author" content="Coderthemes">
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="/images/logo/favicon.png">
    <title>ConnectUs - Học nhiều hơn,tiết kiệm hơn</title>
    <!-- file js nay tao rat nhieu class o html -->
    <script src="/backend/assets/js/modernizr.min.js"></script>
    <!------------FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <!------------ LIBARIES -->
    <link rel="stylesheet" href="/css/drooltip.css" media="screen" >
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" >


    <!------------CSS -->

    <link rel="stylesheet" href="/css/reset.css" media="screen" >
    <link rel="stylesheet" href="/css/variables.css" media="screen" >
    <link rel="stylesheet" href="/css/layout.css" media="screen" >
    <link rel="stylesheet" href="/css/common.css" media="screen" >
    <link rel="stylesheet" href="/css/responsive.css" media="screen" >
    <link rel="stylesheet" href="/css/courses.css" media="screen">
    <link rel="stylesheet" href="/css/temporary.css" media="screen">

    <link rel="stylesheet" href="/css/succeed.css" media="screen" >
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700" rel="stylesheet">
  </head>
  <body>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110481219-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110481219-1');
  </script>



  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '486530838414237',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/vi_VN/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>

  <div class="fb-customerchat"  data-href="http://connectus.vn" messenger_app_id="486530838414237" page_id="497359463938807"> </div>
  <div id="search-mobile">
    <a href="/search" class="blog"><i class="fa fa-search" aria-hidden="true"></i></a>
  </div>
  </div>

  <div id="announce">
  <div class="announce-wrap">
    <p class="message">Nhận voucher khi đăng ký tại ConnectUs!</p>
    <p class="turn-off" onclick="hide($(this).parent().parent())"><i class="fa fa-times" aria-hidden="true"></i></p>
  </div>
  </div>

  <!-- #menu -->
  <div id="menu">
  <div id="login-popup" class="lightbox_self login-popup">
    <div class="modal-background"></div>
    <div class="modal-dialogs">

    </div>
  </div>
  <!-- //#login-popup -->

  <!-- #menu -->
  <div id="menu-desktop" class="padding-0-15 df">
    <div class="menu-left">
      <a href="/search" class="blog"><i class="fa fa-search" aria-hidden="true"></i></a>

    </div>
    <div class="middle">
      <a href="/" class="logoBrand"><img src="/images/logo/logo_rectangle.png" class="full" alt="logo"></a>
    </div>

    <div class="menu-right">


      <!-- <p class="lightbox-button test-online-button">Test online</p> -->


    </div>
  </div>
  <!-- //#menu-desktop -->

  <!-- #menu-mobile -->
  <div id="menu-mobile">

    <div class="menu-logo df fixed-bottom">
      <img src="/images/logo/logo_small.png" alt="logo" class="lightbox-button menu-mobile-popup-box full menu-logo-button" title=".menu-mobile-popup">
      <div class="lightbox_self menu-mobile-popup-box">
        <div class="modal-background"></div>
        <div class="modal-dialogs">
          <div class="menu-mobile-popup text-center">
          <div class="menu-mobile-popup-wrap">
            <div class="menu-mobile-popup-pages">
              <a href="" class="menu-follw-popup-blog">BLOG</a>
              <a href="" class="menu-mobile-popup-catigories">Khoá học Tiếng Anh</a>
              <a href="https://www.facebook.com/connectus.vn/" class="menu-mobile-popup-fanpage">Fanpage</a>
            </div>
            <div class="menu-mobile-popup-login-tab">
          </div><!-- //.menu-mobile-popup-second-sence -->
          </div>
        </div><!--// .menu-mobile-popup -->
        </div>
      </div>

    </div>
  </div><!-- #menu-mobile -->

  </div><!-- //#menu -->



  <img src="images/header/musk.jpg" class="succeed" alt="">
  <div class="overlay"></div>
  <div class="content">
    <div>
      <h3>Voucher của bạn đã được kích hoạt</h3>
      <p>ConnectUs sẽ liên lạc với bạn trong vòng 2 tiếng.</p>
      <p>Chúc bạn một ngày tốt lành!</p>
    </div>


  </div>



  </body>
  </html>
