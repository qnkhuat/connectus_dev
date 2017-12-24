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
  @include('front.components.course-row')
  
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
