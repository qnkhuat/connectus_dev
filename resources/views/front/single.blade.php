
@extends('front.layout')
<?php
  use Carbon\Carbon;
  Carbon::setLocale('vi');
?>
@section('latter_css')
<link rel="stylesheet" href="/css/swiper.min.css" media="screen" >
<link rel="stylesheet" href="/css/courses.css" media="screen" >
<link rel="stylesheet" href="/css/single.css" media="screen" >
<link href="/backend/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection

@section('latter_js')
<script type="text/javascript">
  var login_status = {{ $isAuth ? "true" : "false" }};
</script>
<script src="/js/swiper.min.js"></script>
<script src="/js/single.js"></script>
@endsection

@section('courseDetails')
<div id="course-details">
    @if (Session::has('messages'))
      <div class="alert alert-{{ Session::get('messages')["type"] }}">
        <div class="container">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{ Session::get('messages')["content"] }}</strong>
        </div>
      </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <!-- .course-details-headline -->
  <div class="course-details-headline">
    <div class="container course-details-box">

      <div class="course-details-info-left">
        <!-- added the interested-course for the purpose of interest-button -->

        <div class="interested-course">
          <div class="details-box"><a href="/khoahoc/{{$course->id}}" class="details-button">Chi tiết</a><p class="interest-button" onclick='interest( $(this).parent().parent().parent().html(),$(this).hasClass("interested"),$(this).addClass("interested") )'>Quan tâm</p></div>
        <!-- added the interested-course for the purpose of interest-button -->



          <h1 class="course-info-title">{{$course->name}}</h1>
          <div class="course-price-box">
            @if($course->new_price_only)
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @else
            <span class="course-price-origin">{{number_format($course->old_price)}}</span>
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @endif
          </div>
          <p class="course-info-intro-summary">{{$course->description}}</p>
          <div class="course-info-rating">
            {!! $course->sale > 0 ? '<div class="best-seller-tag best-seller-non-fix"><span>Best seller</span></div>' : "" !!}
            <div class="stars-rating-static">
              <span class="star-rating-static-first fa fa-star">
                  <span class="star-rating-static-second fa fa-star" style="width: 69%;"></span>
              </span>
            </div>
            <div class="course-info-enrolled-student"><span class="course-info-enrolled-student-count">100</span> Học viên đã đăng ký khoá học này</div>
          </div>

          <div class="course-info-centre">Trung tâm : <span class="course-info-centre-name">{{$course->user->name}}</span></div>
        </div>
      </div><!-- //.course-details-info-left -->

      <div class="course-details-info-right">
        <div class="course-details-feature-image">
          <img src="/img/courses/{{$course->avatar}}" alt="" class="full">
        </div>
        <div class="course-details-info-right-content">
          <div class="course-price-box">
            @if($course->new_price_only)
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @else
            <span class="course-price-origin">{{number_format($course->old_price)}}</span>
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @endif
          </div>
          <div class="choose-class-box"><p class="lightbox-button choose-class choose-class-button ">Nhận voucher</p><p class="interest-button" onclick='interest( $(".course-details-info-left").html(),$(this).hasClass("interested"),$(this).addClass("interested") )'>Quan tâm</p></div>

          <div class="course-details-addition-info">
            <ul>
              <li class="student-per-class-bar"><i class="fa fa-users" aria-hidden="true"></i> Số lượng học viên/lớp: <span class="student-per-class-number">{{$course->student_total}}</span></li>
              <li class="course-info-total-hours-bar"><i class="fa fa-play-circle" aria-hidden="true"></i> Số giờ: <span class="course-info-total-hours-number">{{$course->hour_total}}</span></li>
              <li class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i> Số buổi: <span class="course-info-total-periods-number">{{$course->session_total}}</span></li>
              <li class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ <span class="course-info-day-number-1">{{$course->day_in_week}}</span></li>
              <li class="course-info-braches"><i class="fa fa-building-o" aria-hidden="true"></i> Có <span class="course-info-braches-number">{{$course->branchs()->count()}}</span> lớp học</li>
            </ul>
          </div>
        </div>
      </div><!-- //.course-details-info-right -->
    </div>
  </div>
  <!-- //.course-details-headline -->

  <!-- .course-details-main -->
  <div class="course-details-main">
    <div class="container course-details-box">
      <div class="course-details-info">
        <div class="course-details-info-left">
          <div class="course-details-info-left-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($videos as $video)
                    <div class="swiper-slide">
                      <iframe  class="full" src="{{$video}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                    @endforeach

                    @foreach($slides as $img)
                    <div class="swiper-slide">
                      <img class="full" src="/img/courses/{{$img}}" alt="">
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next next-button pagination-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                <div class="swiper-button-prev prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            </div>
          </div>
          <div class="course-details-info-left-content">{!!$course->content!!}</div>
          <!-- .course-details-comment-box -->
          <div class="course-details-comment-box">

            <h4>Cảm nhận của học viên</h4>
            <div class="course-details-comments-list more-group">

              <?php for($i = 1; $i <= 7; $i ++) { /* ?>
              <div class="course-details-comment-individuals more-item-box">
                <div class="course-details-comment">
                  <div class="course-details-comment-left">


                    <div class="course-details-comment-avatar">
                        <img src="/images/avatars/peace.jpg" alt="" class="full">
                      </div>
                    <div class="course-details-comment-date-username">
                        <div class="course-details-comment-username"><a href="">Quang ngoc</a></div>
                        <div class="course-details-comment-date">30/3/2017</div>
                      </div>
                  </div>

                  <div class="course-details-comment-right">
                        <div class="course-details-comment-stars">
                          <div class="stars-rating-static">
                            <span class="star-rating-static-first fa fa-star">
                                <span class="star-rating-static-second fa fa-star" style="width: 85%;"></span>
                            </span>
                          </div>
                        </div>
                        <div class="course-details-comment-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ullam odio iusto doloremque tempore eum. Expedita voluptate corporis exercitationem beatae quas inventore eveniet iusto sint. Obcaecati rem quia natus accusamus.</p>
                        </div>
                      </div>

                </div>
              </div><!-- .course-details-comment-individuals -->
              <?php */ }?>
              <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
            </div>
            <div class="course-details-comment-input">
              <h4>Cảm nhận của bạn về khoá học</h4>
              <textarea name="" id=""rows="10"></textarea>
              <input type="submit" value="Đăng">
            </div>
          </div>
          <!-- //.course-details-comment-box -->


        </div>
        <!-- //#course-details -->
      </div>
        <!-- //.course-details-info-left -->
      <div class="course-details-info-right"></div>
        <!-- //.course-details-info-right -->
    </div>
  </div>
  <!-- //.course-details-main -->
</div>
@endsection


@section('coursesInSinglePate')
<div class="container">
  <div id="courses">
    <!-- CHANGED ORIGINAL: course_row instead of course_row_replace -->
    @include('front.components.course_row_replace')
  </div><!-- #courses -->

  {{$courses->links()}}
</div>
@endsection

<!-- add the back button in choose course section -->
@section('addition_login')
<div class="back-button"><i class="fa fa-undo" aria-hidden="true"></i> Chọn lớp</div>
@endsection


@section('checkoutForm')
<div id="checkout">
  <div class="lightbox_self choose-class">
    <div class="modal-background"></div>

    <div class="modal-dialogs">

      <div class="course-options-box">

        <div class="course-option-general">
          <h3 class="course-info-title">{{$course->name}}</h3>
          <div class="course-price-box">
            @if($course->new_price_only)
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @else
            <span class="course-price-origin">{{number_format($course->old_price)}}</span>
            <span class="course-price-sale">{{number_format(floor($course->old_price*0.95/1000)*1000)}}</span>
            @endif
          </div>
          <div class="course-info-short">
            <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> {{$course->hour_total}} </span> giờ</span>
            <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> {{$course->session_total}} </span> buổi</span>
            <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ {{$course->day_in_week}} </span>
          </div>
        </div>

        @foreach($branches as $branch)
        <?php
          $opening = new Carbon($branch->opening,"Asia/Ho_Chi_Minh");

          $now = Carbon::now("Asia/Ho_Chi_Minh");
          $are_over= $opening->gt($now);//check if the date loaded has over the current date.
          $opening = $opening->diffForHumans();


        ?>

        <div class="course-option">
          <div class="course-option-info">
            <?php if( $are_over ) { ?>
              <p class="course-info-start">Khai giảng : <span class="course-info-start-day">{{date('d-m-Y', strtotime($branch->opening))}}</span></p>
            <?php } ?>
            <div class="course-info-agent">{{$branch->address->address}}</div>
            <div class="course-info-learning-time">Thứ {{$branch->day_of_week}} ({{$branch->time_from}} - {{$branch->time_to}})</div>
          </div>
          <div class="choose-course-box">
            <p class="choose-course-button" data-branch="{{$branch->id}}">Nhận voucher</p>
            <!-- <p class="interest-button" onclick='interest( $(".course-popup").html(),$(this).hasClass("interested"),$(this).addClass("interested") )'>Quan tâm</p> -->
          </div>
        </div>
        @endforeach

      </div>

      <div class="checkout-box">

        <div class="checkout-step1 checkout-login-step checkout-steps">
          @include('front.components.login')
        </div>

        @if($isAuth)
        <form action="/order" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="course" value="{{$course->id}}">
          <input type="hidden" name="branch" value="" id="studen-reg-course-branch">
          <div class="checkout-step2 checkout-input-step checkout-steps">
            <h3>Hoàn thiện thông tin</h3>
            <div class="checkout-input">

              <div class="checkout-input-name">
                <input name="name" value="{{$nickName}}" type="text" placeholder="Tên đẩy đủ:">
              </div>

              <div class="checkout-input-phone">
                <input type="number" name="phone" value="{{$user->phone}}" placeholder="Số điện thoại">
              </div>

              <div class="checkout-input-email">
                <input type="email" name="email" value="{{$user->email}}" placeholder="E-mail">
              </div>

              <p>Bạn sẽ đến trung tâm vào ngày:</p>
              <div class="checkout-input-pay-day">
                <input type="date" name="payment_schedule" data-date-inline-picker="true" >
              </div>

              <div class="input-group">
                  <span class="input-group-addon bg-custom b-0"><i class="md md-event-note text-white"></i></span>
                  <input type="text" name="payment_schedule" class="form-control" placeholder="yyyy/mm/dd" id="datepicker-autoclose">
              </div><!-- input-group -->

              <p>Bạn có mã ưu đãi?</p>
              <div class="checkout-input-coupon">
                <input type="text">
                <button type="submit">Áp dụng</button>
              </div>

              <p>Bạn có muốn thông tin gì thêm?</p>
              <div class="checkout-input-addition-info">
                <input type="text" name="message" placeholder="Tôi yêu cầu...">
              </div>

              <p>Bạn biết đến ConnectUs qua:</p>
              <div class="checkout-input-methods">
                <select name="know">
                  <option value="default" selected disabled hidden>Bạn vui lòng chọn 1 lí do</option>
                  <option value="facebook">Qua Facebook</option>
                  <option value="google">Qua Google</option>
                  <option value="friend">Qua người quen</option>
                  <option value="event">Qua các sự kiện</option>
                </select>
              </div>

              <div class="addcart-box">
                <button type="submit" class="addcart-button">Đặt lịch</button>
              </div>
            </div>
            <div class="back-button"><i class="fa fa-undo" aria-hidden="true"></i> Đặt lịch</div>
          </div>
        </form>
        @endif
      </div>

    </div>

  </div>
</div>
@endsection
