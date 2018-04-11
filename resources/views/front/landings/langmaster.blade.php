@extends('front.layout')

@section('latter_css')
<link rel="stylesheet" href="/css/landings.css">
<link rel="stylesheet" href="/css/courses.css" media="screen" >
<link rel="stylesheet" href="/css/lightbox.min.css">
@endsection

@section('latter_js')
<script src="/js/lightbox.min.js"></script>
<script src="/js/landing_click.js"></script>
@endsection

@section('user_portfolio')

<div id="profile" style="background-image: url('../images/landing/langmaster.png');">
  <div class="avatar">
    <img src="../images/partners/langmaster.png" alt="" class="full">
  </div>
  <h1>Langmaster</h1>
</div>


@endsection

@section('info_portfolio')
<div id="port_bar">
  <div class="entries info"><span>Giới thiệu</span></div>
  <div class="entries courses"><span>Khoá học</span></div>
  <div class="entries images"><span>Hình ảnh</span></div>
  <div class="entries feedbacks"><span>Feedbacks</span></div>
</div>


<div id="info-display">
  <div class="container">
    <div class="info tab">
    <p>Chỉ vọn vẹn 6 - 8 học viên cho một lớp học, và dạy chủ yếu về kĩ năng nghe nói thay vì các chứng chỉ chuyên sâu,  Langmaster cũng có thể được xem là ngôi nhà nhỏ xinh của các bạn trẻ yêu thích tiếng Anh và muốn bắt đầu học tiếng Anh như một thói quen vậy đó:</p>
    <ol>
      <li>Mô hình lớp học mini: không như nhiều lò luyện tiếng Anh khác thì ở Langmaster chỉ có các lớp nhỏ xinh cho từ 6-8 người thôi, và dĩ nhiên là học viên sẽ được giáo viên quan tâm tận tình hơn rồi!</li>
      <li>Vẫn là mô hình lớp học: 04 thầy một trò là những gì mà Langmaster mang lại cho học viên, với 01 giảng viên, 02 trợ giảng, 03 chăm sóc học viên và 04 quản lí chất lượng cho mỗi lớp, thật không ngoa ngoắt khi nói rằng Langmaster chăm học viên tới tận kẽ răng luôn ý (tuy nhiên không dành cho các mem ghét bị để ý và không thích nuông chiều nha :D)</li>
      <li>Khóa học - Bài giảng:  Langmaster tập trung vào việc hoàn thiện những kĩ năng giao tiếp cho học viên, với việc xây dựng các phương pháp học mới mẻ như phương pháp phản xạ 2s, phương pháp học phát âm nâng cao này…</li>
      <li>Giảng viên - trợ giảng: các giảng viên được feedback vô cùng tích cực về sự đáng iu và nhiệt tình của mình đấy, có thể kể đến cô giáo NiNa, cô giáo Dương thùy này</li>
      <li>Có quỹ từ thiện: đây là một nét đẹp rất riêng của Langmaster mà mình cảm thấy rất thích thú, khoan hãy đặt câu hỏi nghi vấn xem dòng tiền từ thiện đổ đi đâu, bởi vì tấm lòng nhân hậu, biết cho đi là điều rất đáng quý rồi phải không nào ^^</li>
    </ol>

    <p>Khen thì rất nhiều rồi, nhưng chúng ta vẫn phải kể xấu Langmaster chút thôi:</p>
    <ul>
      <li>Điểm trừ mà cũng không biết có phải trừ không: khi mà Langmaster chỉ có vỏn vẹn 03 khóa học: khóa học phát âm chuẩn, khóa giao tiếp trọn đời và khóa tiếng anh giao tiếp cho doanh nghiệp, chấm hết.</li>
    </ul>

    <p>Vì vậy, nếu các bạn muốn học thêm các kĩ năng đọc, viết tiếng Anh thì sẽ phải tìm thêm các khóa học của trung tâm khác nhé. còn nếu chỉ cần cải thiện  speaking skills thì mình rất recommend trung tâm anh ngữ ATEN English school này nha.</p>

    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>

    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại Langmaster</h3>
        <a class="example-image" href="../images/landings/langmaster/class 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/class 8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/class 8.jpg" alt="image-1" /></a>
        <h3>Học viên xuất sắc tại Langmaster</h3>

        <a class="example-image" href="../images/landings/langmaster/outdoor 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/langmaster/outdoor 8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/langmaster/outdoor 8.jpg" alt="image-1" /></a>
      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Hà Phương</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 72%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Giáo viên nhiệt tình Môi trường năng động</p>
                <p>Nhược điểm: Lớp đông Chưa được quan tâm hết mức Chưa cải thiện đc nhiều sau khóa học</p>
                <p>Trải nhiệm: Lớp học vui, sôi động nhưng sau khóa học chưa đạt đc mục tiêu đầu ra, một phần do bản thân còn lười học</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyen Thị Phương</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 79%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Chất lượng tốt; cơ sở vật chất đầy đủ; giảng viên nhiệt tình</p>
                <p>Nhược điểm: Nên cho tham gia hoạt động ngoại khoá nhiều hơn</p>
                <p>Trải nhiệm: Được học và thực hành nâng cao kĩ năng nói , viết tiếng anh Tự tin giao tiếp với người nước ngoài hơn</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn thị mỹ duyên</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 62%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Giáo viên giảng dạy tốt nhân viên tư vấn nhiệt tình lớp có số học viên vừa phải phù hợp</p>
                <p>Nhược điểm: Học phí đắt offline ít hiệu quả các khóa có ít kiến thức quá</p>
                <p>Trải nhiệm: Vẫn còn những thứ chưa hài lòng nhưng hài lòng nhiều hơn vui hơn cả là trình độ tiếng anh được cải thiện</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Phạm Thị Hồng Điệp</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 75%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Giáo viên bản ngữ nhiệt tình Tư vấn tận tình Cơ sở vật chất tốt</p>
                <p>Nhược điểm: Học phí cao Số lượng học viên trong lớp hơi đông</p>
                <p>Trải nhiệm: Hoạt động ngoại khóa của trung tâm khiến tôi rất hứng thú vì đây là lần đầu tiên tôi tự tin nói chuyện bằng Tiếng Anh</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Quang Hà</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 77%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Được học với giáo viên người nước ngoài Trợ giảng nhiệt tình Cơ sở vật chất tốt</p>
                <p>Nhược điểm: Học phí khá cao Sĩ số lớp đông Ít hoạt động ngoại khóa</p>
                <p>Trải nhiệm: Qua khóa học mình cảm thấy tiếng anh của mình tiến hộ, giờ mình có thể nói chuyện cơ bản với người nước ngoài</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Đoàn Minh Tâm</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 82%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Giáo viên bản ngữ có kinh nghiệm xếp lớp phù hợp tư vấn nhiệt tình</p>
                <p>Nhược điểm: Học phí đắt sĩ số học viên trong lớp đông chỗ để xe chật</p>
                <p>Trải nhiệm: Biết nhiều hơn về văn hóa của các nước phương tây và tự tin giao tiếp với người nước ngoài</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Lê Thị Thảo</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
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
                <p>Ưu điểm: Giảng viên nhiệt tình . Môi trường năng động</p>
                <p>Nhược điểm: Thời gian học còn ngắn .</p>
                <p>Trải nhiệm: Một kỷ niệm khó mà quên được với những người bạn người chị</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Phạm Thảo Trang</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 70%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Nhiệt tình tư vấn. Đắng giá xếp lp phù hợp. Giảng dạy dễ hiểu</p>
                <p>Nhược điểm: Thiếu hoạt động ngoại khoá, tham gia ấp dụng thực tiên nhá bên ngoài. Cơ sở vật chất chưa thực sự đồng đều. Chi phí hơi cao.</p>
                <p>Trải nhiệm: Vui, thêm kiến thức</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/langmaster/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Trịnh Văn Minh</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 72%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Ưu điểm: Giáo viên bản ngữ nhiệt tình Trợ giảng luôn giải đáp những thắc mắc của học viên nhanh chóng Cơ sở vật chất tốt</p>
                <p>Nhược điểm: Học phí cao Chỗ để xe chật Sĩ số lớp hơi đông</p>
                <p>Trải nhiệm: Tôi hứng thú với cách dạy của người bản ngữ vì lần đầu tiên được học với họ, học thoải mái và rất vui vẻ</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



    </div>

    </div>
  </div>
</div>

@endsection
