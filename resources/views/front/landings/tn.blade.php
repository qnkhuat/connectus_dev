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

<div id="profile" style="background-image: url('../images/landing/tn.jpg');">
  <div class="avatar">
    <img src="../images/partners/ieltstrangnguyen.jpg" alt="" class="full">
  </div>
  <h1>Ielts Trang Nguyễn</h1>
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
      <p>Ở Trang Nguyễn từng kĩ năng của bạn sẽ được chú trọng đặc biệt và được hướng dẫn tận tình bởi đội ngũ giảng viên trẻ trung và có chuyên môn cao. Hãy cùng tìm hiểu và chọn cho mình khóa học Tiếng Anh phù hợp nhất ở Ielts Trang Nguyễn thôi nào. </p>
      <h3>Tại sao bạn nên học tại Trang Nguyễn?</h3>
      <p> - Học phí rẻ nhất : Đăng kí cả Advance Speaking + Advance Writing còn được tặng luôn 2 khoá: Tips Listening +Reading và khoá Phản xạ học Speaking đến tận lúc thi</p>
      <p> - Giáo viên nhiệt tình nhất: Trước khi học 2 tuần, giáo viên sẽ lập group để học sinh làm quen nhau, đồng thời trao đổi trước những khó khăn vướng mắc khi học Tiếng Anh. </p>
      <p> - Cam kết chuẩn đầu ra 6.5 sau 6 tháng ngoài ra cam kết học sinh đạt mục tiêu đầu ra khi học sinh đến test trình độ đầu vào. Nếu không đạt mục tiêu có thể học lại hoàn toàn Free</p>
    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>
    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại KOS</h3>
        <a class="example-image" href="../images/landings/tn/tn_classes1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes8.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes9.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes9.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes10.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes10.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes11.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes11.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes12.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes12.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tn/tn_classes13.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tn/tn_classes13.jpg" alt="image-1" /></a>

      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tn/students/honglien.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/lienmup16698?hc_ref=ARRcpkRNkrqVZVL2byvep6yiiYCcytwQdS3aJDuZPGd4FA7DaWUNeFr6T9o8fLgBSaM">Hồng liên</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 92%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Dù đã kết thúc khoá học ở đây , nhưng thực lòng chẳng muốn rời xa. Các anh chị rất nhiệt huyết với công việc, rất tâm huyết, nhẫn lại để dạy một đứa mất gốc tiếng anh như mình. Thật lòng rất cảm ơn anh chị trong suốt thời gian qua. Rất nhớ chị Yên , chị Trang nữa. Bây giờ mới để ý, chị Yên à, chị giống Suzy thật đấy. Nhân ngày nhà giáo Việt Nam, em chúc các chị, các cô giáo thật đáng yêu của chúng em ngày càng xinh đẹp, thành công trong sự nghiệp trồng người của mình, chúc IELTS Trang Nguyễn ngày càng phát triển . Chúng em yêu tất cả anh chị.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tn/students/thaobui.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/bui.thao.5667?hc_ref=ARRr9YT2XhQ-7G1geYcnt8U348m-1aJSBIC0_o2x0557bQkSm92zj402xmCSt5JjFagM">Thảo Bùi</a></div>
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
                <p>Học ở ilets Trang Nguyễn rất hay và cực kỳ vui bởi cô giáo ỏ đây khôg những nhiệt tình mà còn dễ thương nữa. 1 buổi học ít người nên hiệu quả học tập rất cao. Bên cạnh đó mỗi buổi học luôn có những trò chơi thú vị đem lại sự hứng thú cho người học. Vì thế mà khi học ỏ ielts Trang Nguyễn tôi cảm thấy rất thoải mái và biét được những thiếu xót khi học t.a. Do đó tôi nghĩ ilets Trang Nguyễn là lựa chọn tốt cho những ai muốn cải thiện t.a và muốn đạt được mục tiêu t.a trong tương lai.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tn/students/maisuong.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/maisuong0210?hc_ref=ARTIYd4TqfNIVEFYkBYMunzqD_73uGeOpRbVxwme3NH5OIKQiGVMHlELvLg5TEFQGS4">Mai Sương</a></div>
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
                <p>Bạn nào đang tìm chỗ học IELTS SPEAKING thì mình rất rất recommend chỗ Cô Thu Trang . Lớp chỉ khoảng 4-5 người nên chả có ngần ngại gì cả mà cứ tự tin khoe cá tính, khi học với chị Trang được chữa bài Record rất kỹ, còn được chỉ cách lấy Idea và cách học từ mới rất hiệu quả nữa. Sau khi học với chị thì mình cảm thấy Speaking trở nên đơn giản hơn rất nhiều, chưa kể cô rất đáng eo và nhiệt tình nhaa.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tn/students/anhnguyen.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/anh96bn?hc_ref=ARQem_W7Ax3tRY5vQLPAXVQRg1UOgMb4y-OUUE9yctVO-NUdw5jjZxzefJCa3nAvrXw">Anh Nguyễn</a></div>
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
                <p>Đến học với cô Trang kiểu như mỗi ngày là một ngày vui ý ạ. Điều e thích đó chính là cô giáo giảng bài dễ hiểu. Những bài nói tiếng Anh được cô giáo hướng dẫn dựa trên những trải nghiệm cá nhân làm em rất dễ nhớ. Và điều quan trọng nhất là, cô giáo chữa bài kĩ lắm ạ, từ phát âm ngữ pháp lẫn ngữ điệu .Em cảm ơn cô giáo rât nhiều, yêu cô và e chúc cô khỏe mạnh và luôn nhiệt huyết và yêu nghề ạ</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tn/students/minhthanh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/thanh.sieunhan?hc_ref=ARTgTn9Sls_J2qBnGMkGnqNbF_KkWvy58N9HLDWf9dvNGaURNhR2l-O0rHozOeCTUQk">Minh Thành</a></div>
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
                <p>Em rất cảm ơn chị Trang rất nhiều vì đã giúp em đạt được target khi đi thi IELTS speaking. Mặc dù lúc học thì chị luôn chấm điểm của em thấp hơn, xong lại còn bắt làm một đống bài tập về nhà nên thành ra là em có muốn lười cũng không được, và dần dần đã khả năng nói đã cải thiện lên nhiều. Một điều em thấy đặc biệt ở chị là luôn luôn nhiệt huyết từ 8g sáng đến 9g tối, nên là đi học lúc nào cũng vui như Tết ấy, không khí ít khi bị căng thẳng, kể cả không làm bài tập cũng chỉ bị nộp phạt thôi chứ không bị mắng ấy. Cũng nhờ đi học ở IELTS Trang Nguyễn mà em đã quen được những người bạn rất tuyệt vời nữa</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tn/students/yennguyen.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/profile.php?id=100006895269873&hc_ref=ARQ5kU6Q23i8825nKBfugwvZKJ6XPwDa3QQICGxI2GE2QEkztpPvoFDUHoJKTj_ufDQ">Yến Nguyễn</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 86%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Cô Trang xinh đẹp, nói tiếng anh siêu hay. Lớp học nhỏ xinh vô cùng gần gũi, thoải mái, cô giáo lúc nào cũng nhiệt tình quan tâm, chỉnh sửa cho từng người nên có thể nói chuyện rất tự nhiên mà chẳng hề ngại ngùng vì phát âm chưa chuẩn. Điều mình thích nhất ở lớp học là việc được cung cấp rất nhiều những từ và cụm từ ăn điểm trong ielts speaking cũng như cách sử dụng linh hoạt cho nhiều hoàn cảnh. Cám ơn cô giáo rất nhiều và mong cô giáo ngày càng thành công hơn nữa </p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


    </div>

    </div>
  </div>
</div>

@endsection
