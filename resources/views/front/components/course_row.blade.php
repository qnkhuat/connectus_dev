<div class="course-ielts courses-row">
  <h3 class="courses-row-title padding-0-15"><a href="">Khoá học IELTS</a></h3>
  <div class="courses-group more-group">
    @foreach($courses as $course)
    @include('front.components.single_course')
    @endforeach
    <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
  </div><!-- //.courses-group -->

  <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
</div><!-- //.courses-row -->
<div id="course-popup-mobile" class="hey">
  <div class="course-popup-mobile-content">
    <div class="course-popup">
      <a class="course-info-title one-line-text" href="">khoa thu 2</a>
      <p class="course-info-start">Khai giảng : <span class="course-info-start-day">2017-12-13</span></p>

      <div class="course-price-box">
                <span class="course-price-origin">20</span>
        <span class="course-price-sale">16</span>
              </div>

      <div class="course-popup-detail">
        <div class="course-info-category">
          in <span class="course-info-catigory-in"><a href="">IELTS</a></span> | <span class="course-info-category-name"> Tiếng anh</span>
        </div>

        <div class="course-info-short">
          <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number">  </span> giờ</span>
          <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number">  </span> buổi</span>
          <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ  </span>
        </div>

        <div class="course-info-intro">
          <p class="course-info-intro-summary">dsad</p>
        </div>
      </div>

      <div class="details-box"><a href="/khoahoc/2" class="details-button">Chi tiết</a><p class="interest-button" onclick="interest( $(this).parent().parent().parent().html() )">Quan tâm</p></div>

    </div>
  </div>
  <div class="wrapup-button">
    <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
    <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
  </div>

</div>
