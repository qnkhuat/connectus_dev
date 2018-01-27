@extends('front.layout')

@section('banner')
<div id="banner">
  <div class="banner-slogan">
    <h1>CONNECTUS</h1>
    <h3>Học nhiều hơn - Tiết kiệm hơn</h3>
    <button type="button" class="search-button" name="button"><a href="/search">Tìm khoá học <i class="fa fa-search" aria-hidden="true"></i> </a></button>
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
<div id="banner-features">
  <div class="feature1 feature cash-back">
    <div class="feature-icon">
      <i class="fa fa-undo"></i>
    </div>
    <div class="feature-content">
      <h3 class="feature-title">Hoàn tiền</h3>
      <p class="feature-details">Tiết kiệm lên tới 1.000.000 đồng</p>
    </div>
  </div>

  <div class="feature2 feature searching">
    <div class="feature-icon">
      <i class="fa fa-search"></i>
    </div>
    <div class="feature-content">
      <h3 class="feature-title">Tìm kiếm dễ dàng</h3>
      <p class="feature-details">Lựa chọn khoá học phù hợp nhất</p>
    </div>
  </div>

  <div class="feature3 feature diverse">
    <div class="feature-icon">
      <i class="fa fa-reply"></i>
    </div>
    <div class="feature-content">
      <h3 class="feature-title">Đa dạng</h3>
      <p class="feature-details">Tiếp cận với 50+ trung tâm anh ngữ</p>
    </div>
  </div>
</div>


@endsection

@section('courseInMainPage')
<?php
  use Carbon\Carbon;
  Carbon::setLocale('vi');
?>
<div id="courses">
  @foreach($coursesWithCat as $cat)
  @if(count($cat["courses"]) > 0)
  <div class="course-ielts courses-row">
    <h3 class="courses-row-title padding-0-15"><a href="#">Khóa học: {{$cat["category"]->name}}</a></h3>
    <div class="courses-group more-group">
      @foreach($cat["courses"] as $course)
      <div class="courses-item-box more-item-box" title=".course-popup" onclick='expandCourse($(this))'>
        <div class="course-item-content">
          <a href="/khoahoc/{{$course->id}}" class="one-click-box" ></a>
          <div class="course-image-box">
            <img src="/img/courses/{{$course->avatar}}" class="course-image full" alt="">
          </div>
          <div class="course-info-box">
            <a class="course-info-title one-line-text">
              {{$course->name}}
            </a>
            <p>
              <?php
                $opening = new Carbon($course->opening,"Asia/Ho_Chi_Minh");
                $opening = $opening->diffForHumans();
              ?>
            </p>

            <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">{{$course->user->name}}</span></p>
            @if($course->sale > 0)
            <div class="best-seller-tag"><span>Best seller</span></div>
            @endif
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

            <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">{{$course->user->name}}</span></p>

            <div class="course-popup-detail">
              <div class="course-info-category">
                Khoá học: <span class="course-info-catigory-in"><a href="">{{$course->courseType->name}}</a></span> | Môn <span class="course-info-category-name">Tiếng anh</span>
              </div>

              <div class="course-info-short">
                <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> {{$course->hour_total}} </span> giờ</span>
                <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> {{$course->session_total}} </span> buổi</span>
                <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ {{$course->day_in_week}} </span>
              </div>

              <div class="course-info-intro">
                <p class="course-info-intro-summary">{{$course->description}}</p>
              </div>
            </div>

            <div class="details-box"><a href="/khoahoc/{{$course->id}}" class="details-button">Chi tiết</a><p class="interest-button" onclick='interest({{$course->id}}, "{{$course->name}}" , "{{$course->old_price}}" , "{{$course->new_price}}" , "{{$course->user->name}}" )'>Quan tâm</p></div>

          </div><!-- .course-popup -->
        </div>
      </div><!-- //item -->
      @endforeach
      <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </div><!-- //.courses-group -->

    <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
  </div>
  @endif
  @endforeach
</div>
@endsection


@section('partners')
<div id="partners">
  <h3>Đối tác chính của chúng tôi</h3>
  <div class="partners-box">
    <!-- @foreach($partners as $partner)
    <div class="partners-item">
      <img src="img/avatar/{{$partner->avatar}}" alt="">
    </div>
    @endforeach -->
    <div class="partners-item">
      <img src="images/partners/ieltstrangnguyen.jpg" alt="">
    </div>
    <div class="partners-item">
      <img src="images/partners/kos.jpg" alt="">
    </div>
    <div class="partners-item">
      <img src="images/partners/face.jpg" alt="">
    </div>
    <div class="partners-item">
      <img src="images/partners/geeko.jpg" alt="">
    </div>
  </div>

</div>
@endsection

@section('becomePartner')

<div id="becomePartner" class="text-center">
  <h3>Bạn là Trung Tâm Đào tạo?</h3>
  <p>Hãy tham gia vào cộng đồng ConnectUs để đón nhận thêm học viên mỗi ngày</p>
  <div class="become-button">
    <a href="/business">Hợp tác cùng ConnectUs</a>
  </div>
</div>
@endsection


@section('latter_css')
<link rel="stylesheet" href="css/main.css" media="screen" >
<link rel="stylesheet" href="css/courses.css" media="screen" >
@endsection
