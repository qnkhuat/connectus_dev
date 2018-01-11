-
<?php
  use Carbon\Carbon;
  Carbon::setLocale('vi');
?>
<!-- <div class="courses-item-box more-item-box" title=".course-popup" onclick='coursePopup($(this).find(".course-popup"))'> -->
<div class="courses-item-box more-item-box" title=".course-popup" onclick='expandCourse()'>
  <div class="course-item-content">
    <div class="course-image-box">
      <img src="{{$course->avatar}}" class="course-image full" alt="">
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

      <!-- conflict cho nay -->
      <a class="course-info-title" href="">{{$course->name}}</a>
      <!-- <p class="course-info-start">Khai giảng : <span class="course-info-start-day">{{$opening}}</span></p> -->
      <!-- conflict cho nay -->


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
