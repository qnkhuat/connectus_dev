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
    <h3 class="courses-row-title padding-0-15"><a href="">Khoá học IELTS</a></h3>
    <div class="courses-group more-group">
      @foreach($courses as $course)
      <div class="courses-item-box more-item-box" title=".course-popup" onclick='coursePopup("/khoahoc/{{$course->id}}", $(this).find(".course-popup").html())'>
        <div class="course-item-content">
          <div class="course-image-box">
            <img src="/img/courses/{{$course->avatar}}" class="course-image full" alt="">
          </div>
          <div class="course-info-box">
            <a class="course-info-title one-line-text">{{$course->name}}</a>

            <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">{{$course->user->name}}</span></p>
            {!! strlen($course->sale) > 1 ? '<div class="best-seller-tag"><span>Best seller</span></div>' : "" !!}
            <div class="course-price-box">
              @if($course->new_price_only)
              <span class="course-price-sale">{{number_format($course->new_price)}}</span>
              @else
              <span class="course-price-origin">{{number_format($course->old_price)}}</span>
              <span class="course-price-sale">{{number_format($course->new_price)}}</span>
              @endif
            </div>
          </div>

          <div class="course-popup">
            <a class="course-info-title" href="">{{$course->name}}</a>
            <p class="course-info-start">Khai giảng : <span class="course-info-start-day">{{$course->opening}}</span></p>

            <div class="course-price-box">
              @if($course->new_price_only)
              <span class="course-price-sale">{{number_format($course->new_price)}}</span>
              @else
              <span class="course-price-origin">{{number_format($course->old_price)}}</span>
              <span class="course-price-sale">{{number_format($course->new_price)}}</span>
              @endif
            </div>

            <div class="course-popup-detail">
              <div class="course-info-category">
                in <span class="course-info-catigory-in"><a href="">IELTS</a></span> | <span class="course-info-category-name"> Tiếng anh</span>
              </div>

              <div class="course-info-short">
                <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> {{$course->hours_total}} </span> giờ</span>
                <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> {{$course->sessions_total}} </span> buổi</span>
                <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> {{$course->day_in_week}}</span>
              </div>

              <div class="course-info-intro">
                <p class="course-info-intro-summary">{{$course->description}}</p>
              </div>
            </div>

            <div class="details-box"><a href="/khoahoc/{{$course->id}}" class="details-button">Chi tiết</a><p class="interest-button">Quan tâm</p></div>

          </div><!-- .course-popup -->
        </div>
      </div><!-- //item -->
      @endforeach
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
    @foreach($partners as $partner)
    <div class="partners-item">
      <img src="img/avatar/{{$partner->avatar}}" alt="">
    </div>
    @endforeach
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
