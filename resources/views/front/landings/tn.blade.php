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
    <!-- <link rel="stylesheet" href="/css/layout.css" media="screen" > -->
    <link rel="stylesheet" href="/css/common.css" media="screen" >
    <!-- <link rel="stylesheet" href="/css/responsive.css" media="screen" > -->
    <link rel="stylesheet" href="/css/landing_tn.css">
    <link rel="stylesheet" href="/css/courses.css">
    <!-- <link rel="stylesheet" href="/css/temporary.css"> -->
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

  <div class="fb-customerchat"  data-href="http://connectus.vn" messenger_app_id="486530838414237" page_id="497359463938807" align="top"> </div>




  <div id="menu" class="padding-0-15 df">
    <div class="menu-left"></div>
    <div class="middle"><a href="/" class="logoBrand"><img src="/images/logo/logo_rectangle.png" alt="logo"></a></div>
    <div class="menu-right">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle menu-right-a" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Trung tâm khác
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">KOS</a></li>
          <li><a href="#">Res</a></li>
        </ul>
      </div>
      <a href="/" class="menu-right-a">Tìm khoá học</a>

    </div>
  </div>

  <div id="heading">
    <img src="/images/landing/ielts_trangnguyen.jpg" alt="">
    <div class="intro">
      <h1>IELTS Trang nguyễn</h1>
      <p>Chắp cánh ước mơ</p>
    </div>
  </div>


  <div id="courses">
    <div class="course-ielts courses-row">
      <h3 class="courses-row-title padding-0-15"><a href="">Khoá học của Trang Nguyễn</a></h3>
      <div class="courses-group more-group">
        <?php for ($x = 0; $x <= 10; $x++) {?>




        <div class="courses-item-box more-item-box" title=".course-popup" onclick='expandCourse($(this))'>
          <div class="course-item-content">
            <div class="course-image-box">
              <img src="/img/courses/1.png" class="course-image full" alt="">
            </div>
            <div class="course-info-box">
              <a class="course-info-title one-line-text">
                Tên khoá học
              </a>


              <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">Ielts Trang Nguyễn</span></p>
              <div class="course-price-box">

                <span class="course-price-origin">vài triệu</span>
                <span class="course-price-sale">vài triệu trừ vài trăm</span>

              </div>
            </div>

            <div class="course-popup">

              <a class="course-info-title" href="">tên khoáhocj</a>


              <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">Ielts Trang Nguyễn</span></p>


              <div class="course-popup-detail">
                <div class="course-info-category">
                  Khoá học: <span class="course-info-catigory-in"><a href="">gì đó</a></span> | Môn <span class="course-info-category-name">Tiếng anh</span>
                </div>

                <div class="course-info-short">
                  <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> 20 </span> giờ</span>
                  <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> 30 </span> buổi</span>
                  <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ 3,4 </span>
                </div>

                <div class="course-info-intro">
                  <p class="course-info-intro-summary">ngắn gọn về khoá học</p>
                </div>
              </div>

              <div class="details-box"><a href="/khoahoc/11" class="details-button">Chi tiết</a></div>

            </div><!-- .course-popup -->
          </div>
        </div><!-- //item -->

        <?php }?>

        <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
      </div><!-- //.courses-group -->

      <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div><!-- //.courses-row -->


  </div>

  <div id="signup">
    <div class="intro">
      <h1>Đăng ký tại connectus để nhận voucher lên đến 200k</h1>
      <h3>Có cách nào để giảm học phí nữa không?</h3>
      <ul>
        <li>ĐK đôi: giảm 200k/ng</li>
        <li>ĐK nhóm 3-4: giảm 300k/ng</li>
        <li>ĐK nhóm 5: giảm 500k/ng</li>
      </ul>
    </div>
    <form action="/order" method="post">

        <div class="checkout-input-name">
          <input name="name" value="" type="text" placeholder="Tên đẩy đủ:">
        </div>

        <div class="checkout-input-phone">
          <input type="number" name="phone" value="" placeholder="Số điện thoại">
        </div>

        <div class="checkout-input-email">
          <input type="email" name="email" value="" placeholder="E-mail">
        </div>

        <p>Bạn có muốn thông tin gì thêm?</p>
        <div class="checkout-input-addition-info">
          <input type="text" name="message" placeholder="Tôi yêu cầu...">
        </div>

        <p>Bạn biết đến ConnectUs qua:</p>
        <div class="checkout-input-methods">
          <select name="know">
            <option value="default" selected disabled hidden>Bạn vui lòng chọn 1 lí do</option>
            <option value="facebook">Qua Facebook</option>
            <option value="google">Qua Google</option>
            <option value="friend">Qua người quen</option>
            <option value="event">Qua các sự kiện</option>
          </select>
        </div>

        <div class="addcart-box">
          <button type="submit" class="addcart-button">Đăng ký</button>
        </div>

      </div>
    </form>
  </div>





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
  @yield('latter_js')
</body>
</html>
