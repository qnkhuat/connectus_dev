@extends('front.layout')

@section('latter_js')
  <script src="js/checkbox.js"></script>
@endsection


@section('latter_css')
<link rel="stylesheet" href="css/search.css" media="screen" >

@endsection

@section('header-bar')

  <div class="header-bar">
    <div class="container">
      <h1 class="header-bar-topic">Tìm kiếm</h1>
    </div>
  </div>

@endsection


@section('search_section')
<div class="container">
  <div class="search-bar">

   <div class="button-group">
      <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Ba đình</a></li>
        <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Cầu giấy</a></li>
        <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Hai bà trưng</a></li>
      </ul>
    </div>

    <div class="button-group">
       <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
       <ul class="dropdown-menu">
         <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Ba đình</a></li>
         <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Cầu giấy</a></li>
         <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Hai bà trưng</a></li>
       </ul>
   </div>

     <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Ba đình</a></li>
          <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Cầu giấy</a></li>
          <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Hai bà trưng</a></li>
        </ul>
    </div>

      <div class="button-group">
         <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
         <ul class="dropdown-menu">
           <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Ba đình</a></li>
           <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Cầu giấy</a></li>
           <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Hai bà trưng</a></li>
         </ul>
     </div>

       <div class="button-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Ba đình</a></li>
            <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Cầu giấy</a></li>
            <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Hai bà trưng</a></li>
          </ul>
      </div>

        <div class="button-group">
           <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
           <ul class="dropdown-menu">
             <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Ba đình</a></li>
             <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Cầu giấy</a></li>
             <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>Hai bà trưng</a></li>
           </ul>
       </div>
       <button type="submit" class="submit-button">Lọc</button>
  </div>
</div>
@endsection

@section('search_course')
<div class="course-result">
  <div class="container">
    <?php for($i = 1; $i <= 7; $i ++) { ?>
    <div class="courses-item-box more-item-box" title=".course-popup" onclick='coursePopup("/khoahoc/{{$i}}", $(this).find(".course-popup").html())'>
      <div class="course-item-content">
        <div class="course-image-box">
          <img src="/images/courses/english/English-courses {{$i}}.png" class="course-image full" alt="">
        </div>
        <div class="course-info-box">
          <a class="course-info-title one-line-text">
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

          <div class="details-box"><a href="" class="details-button">Chi tiết</a><p class="interest-button">Quan tâm</p></div>

        </div><!-- .course-popup -->
      </div>
    </div><!-- //item -->
    <?php } ?>
    <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
  </div>
</div>
<div id="course-popup-mobile">
  <div class="course-popup-mobile-content"></div>
  <div class="wrapup-button">
    <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
    <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
  </div>
</div>
@endsection
