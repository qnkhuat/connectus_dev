<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="/images/header/logo_transparent.png">
    <title>ConnectUs - Học nhiều hơn,tiết kiệm hơn</title>
    <!-- file js nay tao rat nhieu class o html -->
    <script src="/backend/assets/js/modernizr.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <!------------FONTS -->
    <link href='/fonts/Roboto.css' rel='stylesheet' type='text/css'>

    <!-- LIBARIES -->
    <link rel="stylesheet" href="/css/drooltip.css" media="screen" >
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" >
    <script src="/js/menu.js"></script>

    <!------------CSS -->
    @yield('prior_css')
    <link rel="stylesheet" href="/css/reset.css" media="screen" >
    <link rel="stylesheet" href="/css/variables.css" media="screen" >
    <link rel="stylesheet" href="/css/layout.css" media="screen" >
    <link rel="stylesheet" href="/css/common.css" media="screen" >
    <link rel="stylesheet" href="/css/responsive.css" media="screen" >
    <link rel="stylesheet" href="/css/courses.css">
    <link rel="stylesheet" href="/css/temporary.css">
    @yield('latter_css')
  </head>
  <body>

    <div id="facebook-chat" class="fb-livechat">
    <div class="ctrlq fb-overlay"></div>
    <div class="fb-widget">
      <div class="ctrlq fb-close"></div>
      <div class="fb-page" data-href="https://www.facebook.com/connectus.vn/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">
        <blockquote cite="https://www.facebook.com/connectus.vn/" class="fb-xfbml-parse-ignore"> </blockquote>
      </div>
      <div class="fb-credit">
      </div>
      <div id="fb-root"></div>
    </div>
    <a href="https://m.me/connectus.vn" title="Send us a message on Facebook" class="ctrlq fb-button"></a>
  </div>


    <!-- #menu -->
    <div id="menu">
      <div id="login-popup" class="lightbox login-popup">
        <div class="modal-background"></div>
        <div class="modal-dialogs">
          @include('front.components.login')
        </div>
      </div>
      <!-- //#login-popup -->

      <!-- #menu -->
      <div id="menu-desktop" class="padding-0-15 df fixed-top">
        <div class="menu-left">
          <a href="" class="blog">Blog</a>

        </div>
        <div class="middle">
          <a href="/" class="logoBrand"><img src="/images/logo/logo_rectangle.png" class="full" alt="logo"></a>
        </div>

        <div class="menu-right">

          @if(auth()->user())
            <a href="/profile">
              <p class="lightbox-button personal-site">Trang cá nhân</p>
            </a>
            <a href="/logout"><p class="lightbox-button logout-button">Đăng xuất</p></a>
          @else
            <p class="lightbox-button login-popup login-button">Đăng nhập</p>
          @endif
          <p class="lightbox-button test-online-button">Test online</p>

          <div class="interest-button-top">
            <i class="fa fa-heart-o cart-icon"></i>
            <span class="interest-count"><span class="interest-count-items">0</span></span>
            <div class="cart-popup">
            </div>

          </div>
        </div>
      </div>
      <!-- //#menu-desktop -->

      <!-- #menu-mobile -->
      <div id="menu-mobile">

        <div class="menu-logo df fixed-bottom">
          <img src="/images/logo/logo_small.png" alt="logo" class="lightbox-button menu-mobile-popup-box full menu-logo-button" title=".menu-mobile-popup">
          <div class="lightbox menu-mobile-popup-box">
            <div class="modal-background"></div>
            <div class="modal-dialogs">
              <div class="menu-mobile-popup text-center">
              <div class="menu-mobile-popup-wrap">
                <div class="menu-mobile-popup-pages">
                  <a href="" class="menu-mobile-popup-blog">BLOG</a>
                  <a href="" class="menu-mobile-popup-catigories">Khoá học Tiếng Anh</a>
                  <a href="https://www.facebook.com/connectus.vn/" class="menu-mobile-popup-fanpage">Fanpage</a>
                </div>
                <div class="menu-mobile-popup-login-tab">
                <div class="login-tab">
                  @if(auth()->user())
                    <a href="/logout"><p class="logout-button">Đăng xuất</p></a>
                  @else
                  <div class="login-facebook login-tab-button">
                    <a href="/redirect/facebook" class="df"><i class="fa fa-facebook" aria-hidden="true"></i>Đăng nhập bằng Facebook</a>
                  </div>
                  @endif



                </div><!-- //.login-tab -->
              </div><!-- //.menu-mobile-popup-second-sence -->
              </div>
            </div><!--// .menu-mobile-popup -->
            </div>
          </div>

        </div>
        <div class="interest-button-top">
          <a href="" class="fa fa-heart-o cart-icon "></a>

          <h1 class="interest-count"><p class="interest-count-items">0</p></h1>
          <div class="cart-popup"></div>
        </div>
      </div><!-- #menu-mobile -->

    </div><!-- //#menu -->



<!-- main Page -->
    @yield('banner')

    @yield('courseInMainPage')

    @yield('partners')

    @yield('becomePartner')
<!-- //main Page -->

<!-- single Page -->
    @yield('courseDetails')

    <!-- #courses -->
    @yield('coursesInSinglePate')

    @yield('checkoutForm')
<!-- //single Page -->


<!-- search Page -->

    @yield('header-bar')

    @yield('search_section')

    @yield('search_course')

<!-- //search Page -->


<!-- business Page -->

  @yield('business_form')

<!-- //business Page -->



    <!-- //#footer -->
    <footer class="text-center">
      <p class="copyright">© 2017 ConnectUs. All rights reserved</p>
      <a class="facebook-icon" href="https://www.facebook.com/connectus.vn/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </footer>
    <!-- //#footer -->



    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/header.js"></script>
    <script src="/js/drooltip.src.js"></script>
    <script src="/js/popup-item.js"></script>
    <script src="/js/courses.js"></script>

    <script src="/js/lightbox.js"></script>
    <script src="/js/interest-button.js"></script>
    <script src="/js/facebook.js"></script>
    <script src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9"></script>
    <script src="/backend/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="/backend/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/backend/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="/backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/backend/assets/pages/jquery.form-pickers.init.js"></script>
    @yield('latter_js')
</body>
</html>


<!--FRONT-END CREATED BY: QUANG NGOC-->
<!--EMAIL: qn.khuat@gmail.com-->
