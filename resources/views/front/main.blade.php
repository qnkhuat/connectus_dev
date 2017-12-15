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


    <!------------CSS -->
    <link rel="stylesheet" href="css/reset.css" media="screen" >
    <link rel="stylesheet" href="css/common.css" media="screen" >
    <link rel="stylesheet" href="css/variables.css" media="screen" >
    <link rel="stylesheet" href="css/header.css" media="screen" >
    <link rel="stylesheet" href="css/courses.css" media="screen" >
    <link rel="stylesheet" href="css/main.css" media="screen" >
    <link rel="stylesheet" href="css/footer.css" media="screen" >
    <link rel="stylesheet" href="css/responsive.css" media="screen" >
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
          <span class="cart-count"><span class="cart-count-items">1</span></span>
        </div>
      </div><!-- #menu-mobile -->

    </div><!-- //#menu -->

    <!-- #banner -->
    <div id="banner">
      <div class="banner-slogan">
        <h1>CONNECTUS</h1>
        <h3>Học nhiều hơn - Tiết kiệm hơn</h3>
      </div>
      <div class="category">

        <div class="language catigories">
          <i class="fa fa-connectdevelop" aria-hidden="true"></i>
          <p>TIẾNG ANH</p>
          <a href=""></a>
        </div>

        <div class="design catigories">
          <i class="fa fa-laptop" aria-hidden="true"></i>
          <p>THIẾT KẾ</p>
          <a href=""></a>
        </div>

        <div class="code catigories">
          <i class="fa fa-anchor" aria-hidden="true"></i>
          <p>KỸ NĂNG MỀM</p>
          <a href=""></a>
        </div>

        <div class="marketing catigories">
          <i class="fa fa-rocket" aria-hidden="true"></i>
          <p>MARKETING</p>
          <a href=""></a>
        </div>

      </div>
    </div>
    <!-- //#banner -->

    <!-- #courses -->
    <div id="courses">

      <div class="course-ielts courses-row">
        <h3 class="courses-row-title padding-0-15">Khoá học IELTS</h3>
        <div class="courses-group">
          <?php for($i = 1; $i <= 8; $i ++) { ?>
          <div class="courses-item-box" title=".course-popup" onclick='coursePopup("/khoahoc/{{$i}}", $(this).find(".course-popup").html())'>
            <div class="course-item-content">
              <div class="course-image-box">
                <img src="/images/courses/english/English-courses 1.png" class="course-image full" alt="">
              </div>
              <div class="course-info-box">
                <a class="course-info-title title-blue">
                  IELTS 8.5 ({{$i}})
                </a>

                <div class="course-info-centre">
                  KOS
                </div>

                <div class="course-price-box">
                  <span class="course-price-origin">5.000.000</span>
                  <span class="course-price-sale">4.000.000</span>
                </div>
              </div>

              <div class="course-popup">
                <div class="">
                  <strong>Khoa {{$i}}</strong>
                </div>
                <div class="course-info-start">Khai giảng : 3/2/2017</div>

                <div class="course-price-box">
                  <span class="course-price-origin">5.000.000</span>
                  <span class="course-price-sale">4.000.000</span>
                </div>

                <div class="course-popup-detail">
                  <a class="course-info-title" href="">IELTS 8.5</a>


                  <div class="course-info-category">
                    <div class="best-seller-tag"></div>
                    in <span class="course-info-catigory-in"><a href="">IELTS</a></span> | <span class="course-info-category-name"> Tiếng anh</span>
                  </div>

                  <div class="course-info-short">
                    <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> 80 </span> giờ</span>
                    <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> 40 </span> buổi</span>
                    <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ <span class="course-info-day-number-1">2</span> , <span class="course-info-day-number-2">3</span> , <span class="course-info-day-number-3">4</span> </span>
                  </div>


                  <div class="course-info-intro">
                    <div class="course-info-intro-summary">Không học thì quên mẹ nó đời đi còn gì nữa:))</div>
                    <ul class="course-info-intro-features">
                      <li>Học là auto đẹp trai</li>
                      <li>Không học làm chó</li>
                      <li>Học một khoá là muốn học lại</li>
                    </ul>
                  </div>
                </div>



                <div class="details-box"><a href="" class="details-button">Chi tiết</a></div>

              </div><!-- .course-popup -->
            </div>
          </div><!-- //item -->
          <?php } ?>

        </div><!-- //.courses-group -->
        <div class="more-course-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
      </div><!-- //.courses-row -->

    </div>

    <div id="course-popup-mobile">
      <div class="course-popup-mobile-content"></div>
      <div class="wrapup-button">
        <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
        <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
      </div>

    </div>
    <!-- //#courses -->

    <!-- #partners -->
    <div id="partners">
      <h3>Đối tác chính của chúng tôi</h3>
      <div class="partners-box">

        <div class="partners-item">
          <img src="/images/partners/gln.png" alt="">
        </div>

        <div class="partners-item">
          <img src="/images/partners/ila.png" alt="">
        </div>

        <div class="partners-item">
          <img src="/images/partners/langmaster.png" alt="">
        </div>

        <div class="partners-item">
          <img src="/images/partners/ieltstrangnguyen.jpg" alt="">
        </div>

        <div class="partners-item">
          <img src="/images/partners/kos.jpg" alt="">
        </div>

      </div>

    </div>
    <!-- //#partners -->

		<div id="becomePartner" class="text-center">
      <h3>Bạn là Trung Tâm Đào tạo?</h3>
      <p>Hãy tham gia vào cộng đồng ConnectUs để đón nhận thêm học viên mỗi ngày</p>
      <div class="become-button">
        <a href="">Hợp tác cùng ConnectUs</a>
      </div>
    </div>


    <!-- //#footer -->
    <footer class="text-center">
      <p class="copyright">© 2017 ConnectUs. All rights reserved</p>
      <a class="facebook-icon" href="https://www.facebook.com/connectus.vn/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </footer>
    <!-- //#footer -->


    <script src="/backend/assets/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="js/header.js"></script>
    <script src="/js/drooltip.src.js"></script>
    <script src="js/popup-item.js"></script>
    <script src="js/courses.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>


<!--FRONT-END CREATED BY: QUANG NGOC-->
<!--EMAIL: qn.khuat@gmail.com-->
