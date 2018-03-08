<?php
  use Carbon\Carbon;
  Carbon::setLocale('vi');
?>
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
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @else
            <span class="course-price-origin">{{number_format($course->old_price)}}</span>
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
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
