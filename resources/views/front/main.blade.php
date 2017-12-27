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
<div id="courses">
  <!-- CHANGED original:course_row instead of course_row_replace -->
  @include('front.components.course_row_replace')

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
