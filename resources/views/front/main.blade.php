@extends('front.layout')

@section('banner')
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
@endsection

@section('courseInMainPage')
<div id="courses">
  <div class="course-ielts courses-row">
    <h3 class="courses-row-title padding-0-15">Khoá học IELTS</h3>
    <div class="courses-group more-group">
      <?php for($i = 1; $i <= 7; $i ++) { ?>
      <div class="courses-item-box more-item-box" title=".course-popup" onclick='coursePopup("/khoahoc/{{$i}}", $(this).find(".course-popup").html())'>
        <div class="course-item-content">
          <div class="course-image-box">
            <img src="/images/courses/english/English-courses {{$i}}.png" class="course-image full" alt="">
          </div>
          <div class="course-info-box">
            <a class="course-info-title title-blue one-line-text">
              IELTS 8.5 ({{$i}})
            </a>

            <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">KOS</span></p>
            <div class="best-seller-tag"><span>Best seller</span></div>
            <div class="course-price-box">
              <span class="course-price-origin">5.000.000</span>
              <span class="course-price-sale">4.000.000</span>
            </div>
          </div>

          <div class="course-popup">
            <a class="course-info-title" href="">IELTS 8.5</a>
            <p class="course-info-start">Khai giảng : <span class="course-info-start-day">3/2/2017</span></p>

            <div class="course-price-box">
              <span class="course-price-origin">5.000.000</span>
              <span class="course-price-sale">4.000.000</span>
            </div>

            <div class="course-popup-detail">


              <div class="course-info-category">
                in <span class="course-info-catigory-in"><a href="">IELTS</a></span> | <span class="course-info-category-name"> Tiếng anh</span>
              </div>

              <div class="course-info-short">
                <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> 80 </span> giờ</span>
                <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> 40 </span> buổi</span>
                <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ <span class="course-info-day-number-1">2</span> , <span class="course-info-day-number-2">3</span> , <span class="course-info-day-number-3">4</span> </span>
              </div>

              <div class="course-info-intro">
                <p class="course-info-intro-summary">Không học thì quên mẹ nó đời đi còn gì nữa:))</p>
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
      <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </div><!-- //.courses-group -->

    <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
  </div><!-- //.courses-row -->
  <div id="course-popup-mobile">
    <div class="course-popup-mobile-content"></div>
    <div class="wrapup-button">
      <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
      <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
    </div>

  </div>
</div>
@endsection


@section('partners')
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
@endsection

@section('becomePartner')

<div id="becomePartner" class="text-center">
  <h3>Bạn là Trung Tâm Đào tạo?</h3>
  <p>Hãy tham gia vào cộng đồng ConnectUs để đón nhận thêm học viên mỗi ngày</p>
  <div class="become-button">
    <a href="">Hợp tác cùng ConnectUs</a>
  </div>
</div>
@endsection


@section('latter_css')
<link rel="stylesheet" href="css/main.css" media="screen" >
<link rel="stylesheet" href="css/courses.css" media="screen" >
@endsection
