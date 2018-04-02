@extends('front.layout')

@section('banner')
<div id="banner">

  <div class="banner-slogan">
    <h1>CONNECTUS</h1>
    <h3>Học nhiều hơn - Tiết kiệm hơn</h3>
    <!-- <button type="button" class="search-button" name="button"><a href="/search">Lọc khoá học <i class="fa fa-search" aria-hidden="true"></i> </a></button> -->
    <div class="search-bar-container">
      <form class="" action="" method="get">
        <div class="search-bar">
          <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Khoá học <span class="caret"></span></button>
            <ul class="dropdown-menu">
            @foreach($couseType as $type)
            <li><a href="#" class="small" data-value="{{$type->id}}" tabIndex="-1"><input name="courseTypes[]" {{ in_array($type->id, $pCouseType) ? "checked" : "" }} value="{{$type->id}}" type="radio"/>{{$type->name}}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="button-group ielts-target hidden">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Mục tiêu <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input name="target_ielts" type="radio"/>Pre ielts</a></li>
              <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input name="target_ielts" type="radio"/>5.0-6.0</a></li>
              <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input name="target_ielts" type="radio"/>6.0-7.0</a></li>
              <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input name="target_ielts" type="radio"/>7.0-8.0</a></li>
              <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input name="target_ielts" type="radio"/>8.0-9.0</a></li>
            </ul>
          </div>

          <div class="button-group toeic-target hidden">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Mục tiêu <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input name="taget_toieic" type="radio"/>Pre toeic</a></li>
              <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input name="taget_toieic" type="radio"/>250-500</a></li>
              <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input name="taget_toieic" type="radio"/>500-750</a></li>
              <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input name="taget_toieic" type="radio"/>750-990</a></li>
            </ul>
          </div>

          <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
            <ul class="dropdown-menu">
              @foreach($districts as $district)
              <li><a href="#" class="small" data-value="{{$district->key}}" tabIndex="-1"><input onchange="handleCheck(this)" name="districts[]" {{ in_array($district->key, $pDistricts) ? "checked" : "" }} value="{{$district->key}}" type="radio"/>{{$district->name}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Học phí <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="small" data-value="0-1000000" tabIndex="-1"><input name="tuition" onchange="handleCheck(this)" {{ $pTuition == "0-1000000" ? "checked" : "" }} value="0-1000000" type="radio"/>< 1.000.000</a></li>
              <li><a href="#" class="small" data-value="1000000-4000000" tabIndex="-1"><input name="tuition" onchange="handleCheck(this)" {{ $pTuition == "1000000-4000000" ? "checked" : "" }} value="1000000-4000000" type="radio"/>1.000.000-4.000.000</a></li>
              <li><a href="#" class="small" data-value="4000000-8000000" tabIndex="-1"><input name="tuition" onchange="handleCheck(this)" {{ $pTuition == "4000000-8000000" ? "checked" : "" }} value="4000000-8000000" type="radio"/>4.000.000-8.000.000</a></li>
              <li><a href="#" class="small" data-value="8000000-12000000" tabIndex="-1"><input name="tuition" onchange="handleCheck(this)" {{ $pTuition == "8000000-12000000" ? "checked" : "" }} value="8000000-12000000" type="radio"/>8.000.000-12.000.000</a></li>
              <li><a href="#" class="small" data-value="12000000-1000000000" tabIndex="-1"><input name="tuition" onchange="handleCheck(this)" {{ $pTuition == "12000000-1000000000" ? "checked" : "" }} value="12000000-1000000000" type="radio"/>> 12.000.000</a></li>
            </ul>
          </div>

          <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Số học viên 1 lớp <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="small" data-value="1-1" tabIndex="-1"><input name="student_per_class" value="1-1" {{ $pStudentPerClass == "1-1" ? "checked" : "" }} type="radio"/>1:1</a></li>
              <li><a href="#" class="small" data-value="1-4" tabIndex="-1"><input name="student_per_class" value="1-4" {{ $pStudentPerClass == "1-4" ? "checked" : "" }} type="radio"/>1-4</a></li>
              <li><a href="#" class="small" data-value="4-8" tabIndex="-1"><input name="student_per_class" value="4-8" {{ $pStudentPerClass == "4-8" ? "checked" : "" }} type="radio"/>4-8</a></li>
              <li><a href="#" class="small" data-value="8-12" tabIndex="-1"><input name="student_per_class" value="8-12" {{ $pStudentPerClass == "8-12" ? "checked" : "" }} type="radio"/>8-12</a></li>
              <li><a href="#" class="small" data-value="12-20" tabIndex="-1"><input name="student_per_class" value="12-20" {{ $pStudentPerClass == "12-20" ? "checked" : "" }} type="radio"/>12-20</a></li>
              <li><a href="#" class="small" data-value="20-20000" tabIndex="-1"><input name="student_per_class" value="20-20000" {{ $pStudentPerClass == "20-20000" ? "checked" : "" }} type="radio"/>> 20</a></li>
            </ul>
          </div>

          <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Giáo viên <span class="caret"></span></button>
            <ul class="dropdown-menu">
              @foreach($teacherTypes as $key => $type)
              <li><a href="#" class="small" data-value="{{$key}}" tabIndex="-1"><input name="teacher_type" {{$pTeacherType == $key ? "checked" : ""}} value="{{$key}}" type="radio"/>{{$type}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Thời gian học <span class="caret"></span></button>
            <ul class="dropdown-menu">
              @foreach($learnTime as $key => $time)
              <li><a href="#" class="small" data-value="{{$key}}" tabIndex="-1"><input name="time" {{$pLearnTime == $key ? "checked" : ""}}  value="{{$key}}" type="radio"/>{{$time}}</a></li>
              @endforeach
            </ul>
          </div>

         <button type="submit" class="submit-button">Lọc</button>

      </div>
       </form>


       <ul class="checked-box">

       </ul>
    </div>
  </div>

  <!-- <div class="category">

    <div class="language catigories">
      <i class="fa fa-connectdevelop" aria-hidden="true"></i>
      <p>TIẾNG ANH</p>
      <!-- <a href=""></a> -->
    <!-- </div>

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

  </div> -->

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
  @include('front.components.course_row_replace')
</div>
@endsection


@section('partners')
<div id="partners">
  <h3>Tìm hiểu về đối tác của chúng tôi</h3>
  <div class="partners-box">
    <!-- @foreach($partners as $partner)
    <div class="partners-item">
      <img src="img/avatar/{{$partner->avatar}}" alt="">
    </div>
    @endforeach -->
    <div class="partners-item">
      <img src="images/partners/if.jpg" alt="">
    </div>

    <div class="partners-item">
      <a href="/landing/tn"><img src="images/partners/ieltstrangnguyen.jpg" alt=""></a>
    </div>

    <div class="partners-item">
      <a href="/landing/kos"><img src="images/partners/kos.jpg" alt=""></a>
    </div>

    <div class="partners-item">
      <a href="/landing/tiw"><img src="images/partners/tiw.jpg" alt=""></a>
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
<link rel="stylesheet" href="css/search.css" media="screen" >
<link rel="stylesheet" href="css/courses.css" media="screen" >
@endsection


@section('latter_js')
  <script src="js/checkbox.js"></script>
@endsection
