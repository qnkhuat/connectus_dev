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

<div id="profile" style="background-image: url('../images/landing/langmaster.jpg');">
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
      <p>Giữa hàng trăm trung tâm tiếng Anh lớn nhỏ có cả ở Hà Nội, Langmaster vẫn mang một vẻ vô cùng đặc biệt, một màu sắc riêng mà ít cơ sở đào tạo nào có thể có...</p>
      <p>Nói văn vẻ là vậy còn tất nhiên chúng ta sẽ tiến hành đánh giá trung tâm này luôn nhé:</p>
      <p>Những điểm cộng hấp dẫn của Langmaster:</p>
      <ol>
        <li>Khóa học thiết kế chuẩn chỉnh: như mô tả: Trung tâm tiếng Anh Langmaster - tiếng Anh giao tiếp cho người mất gốc, những khóa học của Langmaster sẽ có hai đặc điểm nổi trội:</li>
        <li>
          <ul>
            <li>Dành cho những ai mất gốc tiếng Anh và muốn “trồng” lại từ đầu</li>
            <li>Học chủ yếu về giao tiếp, các kĩ năng tiếng Anh để ứng dụng vào thực tiễn</li>
          </ul>
        </li>
        <li>Lộ trình học rõ ràng, bài bản, đi từ khơi gợi đam mê đến phát triển thành thói quen học tiếng Anh, qua 06 bước rèn luyện mà theo ConnectUs là rất kĩ càng</li>
        <li>Phương pháp giảng dạy mới mẻ, khoa học:nghe có vẻ rất kì cục nhưng Effortless English (tiếng Anh khỏi cần nỗ lực) lại là một phương pháp mang lại hiệu quả rất cao, đã được kiểm chứng trên thế giới và nay được Langmaster “bê” vào những bài giảng của mình, kết quả thu được là học viên tiến bộ một cách vượt bậc luôn đấy!</li>
        <li>Đội ngũ giảng viên xịn, chuyên gia tiếng tăm lẫy lừng: bên cạnh cô Liesel - người vốn rất có tiếng trên các kênh truyền thông như youtube, Facebook hay chiếm sóng truyền hình VTV7, đội ngũ chuyên gia của trung tâm này cũng sẽ khiến các bạn choáng ngợp không kém khi quy tụ những nhân vật “đình đám” như:</li>
        <li>
          <ul>
            <li>GS. Paul Gruber: chuyên gia ngôn ngữ hàng đầu thế giới</li>
            <li>TS AJ.Hoge: cha đẻ phương pháp Effortless English đình đám</li>
            <li>TS Lê Thẩm Dương ( chắc các bạn đều nghe qua)</li>
          </ul>
        </li>
        <li>Cơ sở vật chất xịn:  không cần phải bàn cãi gì thêm nữa bởi nhìn vào hàng ngũ chuyên gia của trung tâm này đã có thể suy ra ngay rằng Langmaster đầu tư “không phải dạng vừa đâu” nhỉ</li>
        <li>Kênh thông tin bổ ích, nội dung hấp dẫn: điểm này thì các trung tâm tiếng Anh khác hẳn phải chạy dài theo Langmaster rồi, bởi chỉ cần điểm qua các video dạy giao tiếp với chủ đề từ Anh sang Mỹ sang  u của Langmaster là đã đủ hiểu nơi này chất lượng ra sao rồi đấy!</li>
        <li>Và cuối cùng, những gì bạn sẽ được nhận còn nhiều hơn một khóa học: đó còn là những buổi Talkshow thú vị đến từ những chuyên gia hàng đầu như TS AJ.Hoge, TS Lê Thẩm Dương hay TS Phan Quốc Việt ( chủ tịch HĐQT Tâm Việt Group) - những người mà hiếm hoi lắm bạn mới được nghe họ chia sẻ một lần (mình cũng thế :<)</li>
      </ol>

      <p>“Xấu tính” mode lại được bật lên rồi, chúng ta sẽ thử vạch lá tìm sâu ra vài khuyết điểm của Langmaster nha:</p>
      <ul>
        <li>Langmaster có lớp học khá đông đúc, với 36 học viên cho một lớp Basic, điều này đòi hỏi các bạn phải thật tập trung và giáo viên cũng phải kiên nhẫn vô cùng đó nha :<</li>
      </ul>

      <h4>Địa chỉ:</h4>
      <ul>
        <li>Số 17, Ngõ 27, Đại Cồ Việt, Hai Bà Trưng, HN</li>
        <li>Số 76 Trần Đại Nghĩa, Hai Bà Trưng, HN</li>
        <li>Số 144 Trần Vĩ, Mai Dịch, Cầu Giấy, HN</li>
        <li>140 Nguyễn Lương Bằng, Đống Đa, HN</li>
        <li>Số 32, Ngõ 168, Nguyễn Xiển, Thanh Xuân, HN</li>
        <li>Tầng 15 Tòa Nhà CTM, Số 139 Cầu Giấy, HN</li>
        <li>Số 485 Hoàng Quốc Việt, Cầu Giấy, Hà Nội</li>
        <li>14 Nam Đồng, Đống Đa, Hà Nội</li>
        <li>Số 3 Ngõ 130 Hồ Tùng Mậu, Cầu Giấy, Hà Nội</li>
        <li>297 Bạch Mai, Hai Bà Trưng, HN</li>
      </ul>
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
                <img src="../images/landings/langmaster/students/hoang.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/huong1.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/oanhha.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/thu.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/lenanh.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/minhthanh.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/thu.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/nhat.jpg" alt="" class="full">
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
                <img src="../images/landings/langmaster/students/thach.jpg" alt="" class="full">
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
