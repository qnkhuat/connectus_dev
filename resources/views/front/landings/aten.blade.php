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

<div id="profile" style="background-image: url('../images/landing/aten.jpg');">
  <div class="avatar">
    <img src="../images/partners/aten.jpg" alt="" class="full">
  </div>
  <h1>Aten</h1>
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
    <p>Chỉ vọn vẹn 6 - 8 học viên cho một lớp học, và dạy chủ yếu về kĩ năng nghe nói thay vì các chứng chỉ chuyên sâu,  Aten cũng có thể được xem là ngôi nhà nhỏ xinh của các bạn trẻ yêu thích tiếng Anh và muốn bắt đầu học tiếng Anh như một thói quen vậy đó:</p>
    <ol>
      <li>Mô hình lớp học mini: không như nhiều lò luyện tiếng Anh khác thì ở Aten chỉ có các lớp nhỏ xinh cho từ 6-8 người thôi, và dĩ nhiên là học viên sẽ được giáo viên quan tâm tận tình hơn rồi!</li>
      <li>Vẫn là mô hình lớp học: 04 thầy một trò là những gì mà Aten mang lại cho học viên, với 01 giảng viên, 02 trợ giảng, 03 chăm sóc học viên và 04 quản lí chất lượng cho mỗi lớp, thật không ngoa ngoắt khi nói rằng Aten chăm học viên tới tận kẽ răng luôn ý (tuy nhiên không dành cho các mem ghét bị để ý và không thích nuông chiều nha :D)</li>
      <li>Khóa học - Bài giảng:  Aten tập trung vào việc hoàn thiện những kĩ năng giao tiếp cho học viên, với việc xây dựng các phương pháp học mới mẻ như phương pháp phản xạ 2s, phương pháp học phát âm nâng cao này…</li>
      <li>Giảng viên - trợ giảng: các giảng viên được feedback vô cùng tích cực về sự đáng iu và nhiệt tình của mình đấy, có thể kể đến cô giáo NiNa, cô giáo Dương thùy này</li>
      <li>Có quỹ từ thiện: đây là một nét đẹp rất riêng của Aten mà ConnectUs cảm thấy rất thích thú, khoan hãy đặt câu hỏi nghi vấn xem dòng tiền từ thiện đổ đi đâu, bởi vì tấm lòng nhân hậu, biết cho đi là điều rất đáng quý rồi phải không nào ^^</li>
    </ol>

    <p>Khen thì rất nhiều rồi, nhưng chúng ta vẫn phải kể xấu Aten chút thôi:</p>
    <ul>
      <li>Điểm trừ mà cũng không biết có phải trừ không: khi mà Aten chỉ có vỏn vẹn 03 khóa học: khóa học phát âm chuẩn, khóa giao tiếp trọn đời và khóa tiếng anh giao tiếp cho doanh nghiệp, chấm hết.</li>
    </ul>

    <p>Vì vậy, nếu các bạn muốn học thêm các kĩ năng đọc, viết tiếng Anh thì sẽ phải tìm thêm các khóa học của trung tâm khác nhé. còn nếu chỉ cần cải thiện  speaking skills thì mình rất recommend trung tâm anh ngữ ATEN English school này nha.</p>

    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>

    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại Aten</h3>
        <a class="example-image" href="../images/landings/aten/class 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/class 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/class 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/class 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/class 6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/class 7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/class 8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/class 8.jpg" alt="image-1" /></a>
        <h3>Học viên xuất sắc tại Aten</h3>

        <a class="example-image" href="../images/landings/aten/out door 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/out door 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/out door 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/out door 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/out door 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/out door 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/out door 3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/out door 3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/aten/out door 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/aten/out door 5.jpg" alt="image-1" /></a>
      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/hue.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Thị Thanh Huệ</a></div>
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
                <p>Aten English Center là một trung tâm anh ngữ tốt. Đến với Aten em gặp được các cô, các anh chị rất nhiệt tình. Aten là nơi giao lưu, học hỏi, làm quen được với các anh chị. Cô Nina là một cô giáo rất nhiệt tình trong công việc, cô tận tình chỉ bảo, dạy chúng em từng li từng tí, trong buổi học cô cho lớp chơi các trò chơi, hoạt động hấp dẫn cho học viên. Chị Vân là coach rất nhiệt tình trong công việc, vui vẻ. Care Chung rất hòa đồng, nhiệt tình trong công việc, chị thường quan tâm đến học viên. I love Aten English Center</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/ha.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Thanh Hà</a></div>
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
                <p>Trước khi đến với Aten, tiếng Anh của tôi là con số 0, sau 2 khóa  học, tôi thấy tiếng Anh của tôi đã lên rất nhiều (đối với riêng bản thân tôi). Cô giáo Danny, nói sao nhỉ?...1 giáo viên vô cùng tuyệt vời, nhiệt huyết. Coach và care rất nhiệt tình và luôn quan tâm, nhắc nhở các bạn trong lớp. Aten là nơi cho tôi động lực để học tiếng Anh.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/thuy.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Đỗ Thị Thuý </a></div>
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
                <p>Aten yêu dấu !</p>
                <p>Trong quá trình học phát âm tuy chỉ là 6 tuần nhưng đối với em là cả một thời gian quý báu và vui vẻ. Em được học rất nhiều từ cô Heidi, Coach cũng như các bạn trong lớp. Tập thể lớp mình rất vui và hòa đồng, ai cũng luôn cố gắng hết mình để đạt được kết quả tốt nhất. Điều quan trọng là lớp luôn đoàn kết, giúp đỡ nhau và vui vẻ.Em muốn các khóa tiếp sẽ được đồng hành cùng lớp cô Heidi, Coach và Care nữa. </p>
                <p>Cô Heidi và Coach là 2 người con gái đẹp và tuyệt nhất lớp hehehe!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/an.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Linh An </a></div>
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
                <p>Em rất vui khi đươch tham gia khóa học tại Aten, và sau một thời gian học em khá hài lòng với sự tiến bộ của bản thân.  Em có một số chia sẻ với Aten ạ: Teacher Ms.Dương Thủy: Dạy học một cách nhiệt huyết, chu đáo, tận tình và luôn tạo cho em hứng thú lúc bước vào mỗi buổi học. Cô cũng rất dễ thương và giọng nói dễ nghe ạ. </p>
                <p> Coach MsTrang dạy dễ hiểu và nói khá hay, Care Vân rất tốt luôn.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/huong2.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Tô Thị Thanh Hương </a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 74%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Aten là trung tâm Tiếng Anh đầu tiên tôi học và hi vọng cũng là điểm dừng cuối cùng trong quá trình chinh phục tiếng anh. Các giảng viên, coach, care ở ATEN rất nhiệt huyết, nhiều năng lượng và giúp đỡ bọn e rất nhiều.Hi vọng mọi người vẫn sẽ giữ vững tinh thần đó để tiếp thêm sức mạnh cho tất cả mọi người.</p>

              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/anh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Võ Phương Anh</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 74%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Sau hơn một tháng học tại Aten, tôi cảm thấy trung tâm Aten là sự lựa chọn phù hợp và good dto me sau bao nhiêu trung tâm Anh ngữ khác tôi đã từng học. Giảng viên, Coach, Care đều rất tận tâm, lớp học thân thiện. </p><p>Xin cảm ơn Aten rất nhiều!</p>

              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/lam.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Hồng Lam</a></div>
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
                <p>Đội ngũ Aten rất nhiệt tình,vui tính. Các giảng viên dạy hay, vui, giúp đỡ mình rất nhiều. Cảm thấy mình đã cải thiện rất nhiều sau gần 2 khóa hoc. Bạn Care cũng rất chu đáo, ai cũng dễ "xương" ơi là dễ "xương", người viết là dễ "xương" nhất.</p>

              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->




        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/aten/students/my.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Trần Thị Hà My</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 89%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                  <p>Bạn đã từng yêu chưa? </p>
                  <p>Mình yêu rồi đó, yêu gia đình, yêu bạn bè, yêu người thân và bây giờ là yêu thêm lớp Com1.15 nữa đấy. Qua lớp này, chúng mình đã cùng nhau học tập, vui chơi bên nhau trong mọi thời khắc học tập đó và cùng nhau hát cùng 1 bài trong Aten got talent nữa</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->





    </div>

    </div>
  </div>
</div>

@endsection
