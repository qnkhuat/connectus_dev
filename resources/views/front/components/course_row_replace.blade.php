<div class="course-ielts courses-row">
  <h3 class="courses-row-title padding-0-15"><a href="">Khoá học IELTS</a></h3>
  <div class="courses-group more-group">
    @foreach($courses as $course)
    <!-- CHANGED original:single_course instead of single_course_replace -->
    @include('front.components.single_course_replace')
    @endforeach
    <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
  </div><!-- //.courses-group -->

  <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
</div><!-- //.courses-row -->
<div id="course-popup-mobile">
  <div class="course-popup-mobile-content">
    <div class="course-popup">

    </div>
  </div>
  <div class="wrapup-button">
    <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
    <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
  </div>

</div>
