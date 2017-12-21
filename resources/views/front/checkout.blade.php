<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="/images/header/logo_transparent.png">
    <title>ConnectUs - Học nhiều hơn,tiết kiệm hơn</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="/backend/assets/js/modernizr.min.js"></script>

    <!------------FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- LIBARIES -->
    <link rel="stylesheet" href="css/drooltip.css" media="screen" >
    <link rel="stylesheet" href="css/swiper.min.css" media="screen" >


    <!------------CSS -->
    <link rel="stylesheet" href="css/reset.css" media="screen" >

    <link rel="stylesheet" href="css/variables.css" media="screen" >
    <link rel="stylesheet" href="css/header.css" media="screen" >
    <link rel="stylesheet" href="css/courses.css" media="screen" >
    <link rel="stylesheet" href="css/main.css" media="screen" >
    <link rel="stylesheet" href="css/footer.css" media="screen" >
    <link rel="stylesheet" href="css/common.css" media="screen" >
    <link rel="stylesheet" href="css/responsive.css" media="screen" >
    <link rel="stylesheet" href="css/single.css" media="screen" >
  </head>
  <body>
    <!-- #login-popup -->
    <div id="menu">
      <div id="login-popup" class="fixed-top full">
        <div class="modal-background full"></div>
        <div class="modal-dialogs">
          <div class="login-tab">

            <div class="login-facebook login-tab-button">
              <a href="" class="df"><i class="fa fa-facebook" aria-hidden="true"></i>Đăng nhập bằng Facebook</a>
            </div>

            <div class="signup-button login-tab-button">
              <p class="df"><i class="fa fa-rocket" aria-hidden="true"></i> Đăng ký tài khoản</p>
            </div>

            <div class="separate df">
              <hr>
              <p>Hoặc</p>
              <hr>
            </div>

            <div class="user-infomations">

              <div class="email input-user-infomations">
                <input type="email" placeholder="E-mail">
              </div>

              <div class="password input-user-infomations">
                <input type="password" placeholder="Mật khẩu">
              </div>

              <div class="username input-user-infomations">
                <input type="text" placeholder="Tên hiện thị">
              </div>

              <hr>

              <div class="login-submit submit">
                <input type="submit" class="button" Value="Đăng nhập">
              </div>

              <div class="signup-submit submit">
                <input type="submit" class="button" Value="Đăng ký">
              </div>

              <div class="forget-password">
                <a href="">Quên mật khẩu</a>
              </div>
            </div><!-- .user-infomations -->
          </div><!-- .login-tab -->
        </div>
      </div>
      <!-- //#login-popup -->

      <!-- #menu -->
      <div id="menu-desktop" class="padding-0-15 df fixed-top">
        <div class="menu-left">
          <a href="" class="blog">Blog</a>

        </div>
        <div class="middle">
          <a href="" class="logoBrand"><img src="/images/header/logo_transparent.png" class="full" alt="logo"></a>
        </div>

        <div class="menu-right">
          <p class="login-button">Đăng nhập</p>
          <div class="cart">
            <a href="" class="fa fa-shopping-cart cart-icon"></a>
            <span class="cart-count"><span class="cart-count-items">1</span> khoá</span>
            <div class="cart-popup"></div>

          </div>
        </div>
      </div>
      <!-- //#menu-desktop -->

      <!-- #menu-mobile -->
      <div id="menu-mobile">

        <div class="menu-logo df fixed-bottom">
          <img src="/images/header/logo_small.png" alt="logo" class="full menu-logo-button" title=".menu-mobile-popup">
          <div id="menu-mobile-popup" class="menu-mobile-popup text-center">
            <div class="menu-mobile-popup-wrap">
              <div class="menu-mobile-popup-first-sence">
                <a class="menu-mobile-popup-blog">BLOG</a>
                <a class="menu-mobile-popup-blog">Khoá học Tiếng Anh</a>
                <div class="menu-mobile-popup-account">Quản lý tài khoản</div>
                <div class="menu-mobile-popup-login">Đăng nhập</div>
              </div>
              <div class="menu-mobile-popup-second-sence">
              <div class="login-tab">

                <div class="login-facebook login-tab-button">
                  <a href="" class="df"><i class="fa fa-facebook" aria-hidden="true"></i>Đăng nhập bằng Facebook</a>
                </div>

                <div class="signup-button login-tab-button">
                  <p class="df"><i class="fa fa-rocket" aria-hidden="true"></i> Đăng ký tài khoản</p>
                </div>

                <div class="separate df">
                  <hr>
                  <p>Hoặc</p>
                  <hr>
                </div>

                <div class="user-infomations">

                  <div class="email input-user-infomations">
                    <input type="email" placeholder="E-mail">
                  </div>

                  <div class="password input-user-infomations">
                    <input type="password" placeholder="Mật khẩu">
                  </div>

                  <div class="username input-user-infomations">
                    <input type="text" placeholder="Tên hiện thị">
                  </div>

                  <hr>

                  <div class="login-submit submit">
                    <input type="submit" class="button" Value="Đăng nhập">
                  </div>

                  <div class="signup-submit submit">
                    <input type="submit" class="button" Value="Đăng ký">
                  </div>

                  <div class="forget-password">
                    <a href="">Quên mật khẩu</a>
                  </div>
                </div><!-- //.user-infomations -->
              </div><!-- //.login-tab -->
            </div><!-- //.menu-mobile-popup-second-sence -->
            </div>
          </div><!--// .menu-mobile-popup -->
        </div>
        <div class="cart">
          <a href="" class="fa fa-shopping-cart cart-icon "></a>
          <h1 class="cart-count"><p class="cart-count-items">1</p></h1>
        </div>
      </div><!-- #menu-mobile -->

    </div><!-- //#menu -->



    <!-- //#footer -->
    <footer class="text-center">
      <p class="copyright">© 2017 ConnectUs. All rights reserved</p>
      <a class="facebook-icon" href="https://www.facebook.com/connectus.vn/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </footer>
    <!-- //#footer -->


    <script src="/backend/assets/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js"></script>

    <script src="js/header.js"></script>
    <script src="/js/drooltip.src.js"></script>
    <script src="js/popup-item.js"></script>
    <script src="js/courses.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/single.js"></script>
</body>
</html>


<!--FRONT-END CREATED BY: QUANG NGOC-->
<!--EMAIL: qn.khuat@gmail.com-->
