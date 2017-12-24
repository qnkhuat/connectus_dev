
@extends('front.layout')


@section('latter_css')
<link rel="stylesheet" href="/css/courses.css" media="screen" >
<link rel="stylesheet" href="/css/single.css" media="screen" >
@endsection

@section('latter_js')
<script src="/js/single.js"></script>
@endsection



@section('courseDetails')
<div id="course-details">
  <!-- .course-details-headline -->
  <div class="course-details-headline">
    <div class="container course-details-box">
      <div class="course-details-info-left">
        <h1 class="course-info-title">Học tiếng anh cho người nghèo</h1>
        <p class="course-info-intro-summary">Người giàu cũng học được</p>
        <div class="course-info-rating">
          {!! strlen($course->sale) > 1 ? '<div class="best-seller-tag best-seller-non-fix"><span>Best seller</span></div>' : "" !!}
          <div class="stars-rating-static">
            <span class="star-rating-static-first fa fa-star">
                <span class="star-rating-static-second fa fa-star" style="width: 69%;"></span>
            </span>
          </div>
          <div class="course-info-enrolled-student"><span class="course-info-enrolled-student-count">100</span> Học viên đã đăng ký khoá học này</div>
        </div>

        <div class="course-info-centre">Trung tâm : <span class="course-info-centre-name">{{$course->name}}</span></div>
      </div><!-- //.course-details-info-left -->

      <div class="course-details-info-right">
        <div class="course-details-feature-image">
          <img src="/img/courses/{{$course->avatar}}" alt="" class="full">
        </div>
        <div class="course-details-info-right-content">
          <div class="course-price-box">
            @if($course->new_price_only)
            <span class="course-price-sale">{{number_format($course->new_price)}}</span>
            @else
            <span class="course-price-origin">{{number_format($course->old_price)}}</span>
            <span class="course-price-sale">{{number_format($course->new_price)}}</span>
            @endif
          </div>
          <div class="choose-class-box"><p class="lightbox-button choose-class choose-class-button ">Chọn lớp</p></div>
          <div class="course-details-addition-info">
            <ul>
              <li><i class="fa fa-star" aria-hidden="true"></i> anh yeu em</li>
              <li><i class="fa fa-cloud-upload" aria-hidden="true"></i> anh yeu em</li>
              <li><i class="fa fa-cog" aria-hidden="true"></i> anh yeu em</li>
              <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> anh yeu em</li>
              <li><i class="fa fa-star" aria-hidden="true"  ></i> anh yeu em</li>
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

          <!-- .courses-row -->

          <!-- //.courses-row -->

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

    <div class="course-ielts courses-row">
      <h3 class="courses-row-title padding-0-15"><a href="">Khoá học IELTS</a></h3>
      <div class="courses-group more-group">
        @foreach($courses as $course)
        <div class="courses-item-box more-item-box" title=".course-popup" onclick='coursePopup("/khoahoc/{{$course->id}}", $(this).find(".course-popup").html())'>
          <div class="course-item-content">
            <div class="course-image-box">
              <img src="/img/courses/{{$course->avatar}}" class="course-image full" alt="">
            </div>
            <div class="course-info-box">
              <a class="course-info-title one-line-text">{{$course->name}}</a>

              <p class="course-info-centre">Trung tâm : <span class="course-info-centre-name">{{$course->user->name}}</span></p>
              {!! strlen($course->sale) > 1 ? '<div class="best-seller-tag"><span>Best seller</span></div>' : "" !!}
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
              <p class="course-info-start">Khai giảng : <span class="course-info-start-day">{{$course->opening}}</span></p>

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
                  in <span class="course-info-catigory-in"><a href="">IELTS</a></span> | <span class="course-info-category-name"> Tiếng anh</span>
                </div>

                <div class="course-info-short">
                  <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> {{$course->hours_total}} </span> giờ</span>
                  <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> {{$course->sessions_total}} </span> buổi</span>
                  <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> {{$course->day_in_week}}</span>
                </div>

                <div class="course-info-intro">
                  <p class="course-info-intro-summary">{{$course->description}}</p>
                </div>
              </div>

              <div class="details-box"><a href="/khoahoc/{{$course->id}}" class="details-button">Chi tiết</a><p class="interest-button">Quan tâm</p></div>

            </div><!-- .course-popup -->
          </div>
        </div><!-- //item -->
        @endforeach
        <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
      </div><!-- //.courses-group -->

      <div class="next-button pagination-button"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      <div class="prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div><!-- //.courses-row -->
    <div id="course-popup-mobile">
      <div class="course-popup-mobile-content"></div>
      <div class="wrapup-button">
        <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
        <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
      </div>
    </div>
  </div><!-- #courses -->
</div>
@endsection

@section('checkoutForm')
<div id="checkout">
  <div class="lightbox choose-class">
    <div class="modal-background"></div>

    <div class="modal-dialogs">

      <div class="course-options-box">

        <div class="course-option-general">
          <h3 class="course-info-title">IELTS 8.5</h3>
          <div class="course-price-box">
            <span class="course-price-origin">5.000.000</span>
            <span class="course-price-sale">4.000.000</span>
          </div>
          <div class="course-info-short">
            <span class="course-info-total-hours"><i class="fa fa-play-circle" aria-hidden="true"></i><span class="course-info-total-hours-number"> 80 </span> giờ</span>
            <span class="course-info-total-periods"><i class="fa fa-book" aria-hidden="true"></i><span class="course-info-total-periods-number"> 40 </span> buổi</span>
            <span class="course-info-day"><i class="fa fa-calendar" aria-hidden="true"></i> Thứ <span class="course-info-day-number-1">2</span> , <span class="course-info-day-number-2">3</span> , <span class="course-info-day-number-3">4</span> </span>
          </div>
        </div>

        <?php for($i=1;$i<=4;$i++) {?>
        <div class="course-option">
          <div class="course-option-info">
            <p class="course-info-start">Khai giảng : <span class="course-info-start-day">3/2/2017</span></p>
            <div class="course-info-agent">Số {{$i}} Phạm Văn Đồng</div>
            <div class="course-info-learning-time">Thứ 2 + 3 + {{$i}} (19:30 - 20:30)</div>
          </div>
          <div class="choose-course-box">
            <p class="choose-course-button">Tham gia</p>
            <p class="interest-button">Quan tâm</p>
          </div>
        </div>
        <?php } ?>

      </div>

      <div class="checkout-box">

        <div class="checkout-step1 checkout-login-step checkout-steps">
          <div class="login-tab">

            <div class="login-facebook login-tab-button">
              <a href="" class="df"><i class="fa fa-facebook" aria-hidden="true"></i>Đăng nhập bằng Facebook</a>
            </div>

            <div class="signup-button login-tab-button">
              <p class="df"><i class="fa fa-rocket" aria-hidden="true"></i> Đăng ký tài khoản</p>
            </div>

            <div class="separate df">
              <hr>
              <p>Hoặc</p>
              <hr>
            </div>

            <div class="user-infomations">

              <div class="email input-user-infomations">
                <input type="email" placeholder="E-mail">
              </div>

              <div class="password input-user-infomations">
                <input type="password" placeholder="Mật khẩu">
              </div>

              <div class="username input-user-infomations">
                <input type="text" placeholder="Tên hiện thị">
              </div>

              <hr>

              <div class="login-submit submit">
                <input type="submit" class="button" Value="Đăng nhập">
              </div>

              <div class="signup-submit submit">
                <input type="submit" class="button" Value="Đăng ký">
              </div>

              <div class="forget-password">
                <a href="">Quên mật khẩu</a>
              </div>
            </div><!-- .user-infomations -->
          </div><!-- .login-tab -->
        </div>

        <div class="checkout-step2 checkout-input-step checkout-steps">
          <h3>Hoàn thiện thông tin</h3>
          <div class="checkout-input">

            <div class="checkout-input-name">
              <input type="text" placeholder="Tên đẩy đủ:">
            </div>

            <div class="checkout-input-phone">
              <input type="number" placeholder="Số điện thoại">
            </div>

            <div class="checkout-input-email">
              <input type="email" placeholder="E-mail">
            </div>

            <p>Bạn có thể nộp học phí vào:</p>
            <div class="checkout-input-pay-day">
              <input type="date" data-date-inline-picker="true" >
            </div>

            <p>Bạn có mã ưu đãi?</p>
            <div class="checkout-input-coupon">
              <input type="text">
              <button type="submit">Áp dụng</button>
            </div>

            <p>Bạn biết đến ConnectUs qua:</p>
            <div class="checkout-input-methods">
              <select>
                <option value="default" selected disabled hidden>Bạn vui lòng chọn 1 lí do</option>
                <option value="facebook">Qua Facebook</option>
                <option value="google">Qua Google</option>
                <option value="friend">Qua người quen</option>
                <option value="event">Qua các sự kiện</option>
              </select>
            </div>

            <div class="addcart-box"><a href="" class="addcart-button">Tham gia khoá học</a></div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>
@endsection
