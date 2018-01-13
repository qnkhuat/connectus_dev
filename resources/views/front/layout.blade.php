<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nền tảng kết nối học viên với các lớp học, khóa học một cách nhanh nhất, phù hợp nhất và tiết kiệm nhất.">
    <meta name="author" content="Coderthemes">
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="/images/header/logo_transparent.png">
    <title>ConnectUs - Học nhiều hơn,tiết kiệm hơn</title>
    <!-- file js nay tao rat nhieu class o html -->
    <script src="/backend/assets/js/modernizr.min.js"></script>
    <!------------FONTS -->
    <link href='/fonts/Roboto.css' rel='stylesheet' type='text/css'>

    <!-- LIBARIES -->
    <link rel="stylesheet" href="/css/drooltip.css" media="screen" >
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" >


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
          <a href="/search" class="blog"><i class="fa fa-search" aria-hidden="true"></i></a>

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
          <!-- <p class="lightbox-button test-online-button">Test online</p> -->

          <div class="interest-button-top">
            <i class="fa fa-heart-o cart-icon"></i>
            <span class="interest-count"><span class="interest-count-items">{{ count($courseFollows) }}</span></span>
            <div class="cart-popup">
            @foreach($courseFollows as $course)
            <div class="interested-item">
                <div class="interested-item-content">
                    <div class="course-info-title"><a href="/khoahoc/{{$course->id}}">{{$course->name}}</a></div>
                    <div class="course-price-box"><span class="course-price-origin">{{ number_format($course->old_price) }}</span>
                    <span class="course-price-sale">{{ number_format($course->new_price) }}</span></div>
                    <div class="course-info-centre">{{$course->user->name}}</div>
                </div>
                <div class="interested-item-control-button">
                    <div class="details-button"><a href="/khoahoc/{{$course->id}}"/>Chi tiết</a></div>
                    <div class="delete-button"><i class="fa fa-times" onclick='unInterested($(this).closest(".interested-item"), {{$course->id}})' aria-hidden="true"></i></div>
                </div>
            </div>
            @endforeach
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
                  <a href="" class="menu-follw-popup-blog">BLOG</a>
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

          <h1 class="interest-count"><p class="interest-count-items">{{ count($courseFollows) }}</p></h1>
          <div class="cart-popup">
            @foreach($courseFollows as $course)
            <div class="interested-item">
                <div class="interested-item-content">
                    <div class="course-info-title"><a href="/khoahoc/{{$course->id}}">{{$course->name}}</a></div>
                    <div class="course-price-box"><span class="course-price-origin">{{ number_format($course->old_price) }}</span>
                    <span class="course-price-sale">{{ number_format($course->new_price) }}</span></div>
                    <div class="course-info-centre">{{$course->user->name}}</div>
                </div>
                <div class="interested-item-control-button">
                    <div class="details-button"><a href="/khoahoc/{{$course->id}}"/>Chi tiết</a></div>
                    <div class="delete-button"><i class="fa fa-times" onclick='unInterested($(this).closest(".interested-item"), {{$course->id}})' aria-hidden="true"></i></div>
                </div>
            </div>
            @endforeach
          </div>
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
      <p class="email"><i class="fa fa-envelope" aria-hidden="true"></i> contact@connectus.vn</p>
      <div class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: Số 5, ngõ 100, Cù Chính Lan, Hà Nội </div>
      <p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> Mr Ngọc: 01647843999</p>
      <p class="copyright">© 2017 ConnectUs. All rights reserved</p>
      <a class="facebook-icon" href="https://www.facebook.com/connectus.vn/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </footer>
    <!-- //#footer -->

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/header.js"></script>
    <script src="/js/drooltip.src.js"></script>
    <script src="/js/popup-item.js"></script>
    <script src="/js/courses.js"></script>
    <script src="/js/menu.js"></script>
    <script src="/js/lightbox.js"></script>
    <script src="/js/interest-button.js"></script>
    <!-- <script src="/js/facebook.js"></script> -->
    <!-- <script src="/js/facebook_message_plugin.js"></script> -->
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
