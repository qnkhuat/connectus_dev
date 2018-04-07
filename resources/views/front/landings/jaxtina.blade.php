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

<div id="profile" style="background-image: url('../images/landing/jaxtina.png');">
  <div class="avatar">
    <img src="../images/partners/jaxtina.png" alt="" class="full">
  </div>
  <h1>Jaxtina</h1>
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
      <p>Nếu bạn đang cần tìm một địa chỉ đào tạo chuyên về ứng dụng kĩ năng nghe nói đọc viết tiếng Anh vào công việc và cuộc sống thì JAXTINA ENGLISH CENTER chính xác là nơi bạn cần ghé qua đấy!</p>
      <p>Là trung tâm dạy tiếng Anh 4 kĩ năng đầu tiên và duy nhất ở Hà Nội, với 5 cơ sở đào tạo thu hút tới 3000 học viên, Jaxtina mang tới những ưu điểm:</p>
      <ol>
        <li><span style="color:#d61e2a">Khóa học</span>: Vì là nơi đào tạo tiếng Anh kĩ năng thay vì chuyên sâu, Jaxtina nhận tất cả các học sinh với mọi trình độ, lứa tuổi, nói chung miễn là bạn có đam mê học, Jaxtina sẽ dạy bạn :D</li>
        <li><span style="color:#d61e2a">Cơ sở vật chất</span>: xinh xắn sạch sẽ, toàn tông đỏ, và đạc biệt là có máy lạnh để chinh chiến cho mùa hè (cái này quan trọng lắm nè)</li>
        <li><span style="color:#d61e2a">Giảng viên</span>: nếu các bạn để ý những livestream dạy học trên fanpage Jaxtina thì có thể thấy giảng viên ở đây toàn là những người trẻ nhưng profile cũng rất khủng, như cô Thùy Anh tốt nghiệp thạc sĩ tại Anh, cô Ngọc Quỳnh làm việc ở đại sứ quan Malaysia nữa</li>
        <li><span style="color:#d61e2a">Chăm sóc học viên</span>:</li>
        <ul>
          <li>Đây là một điểm rất đáng khen của Jaxtina khi có chế độ hoàn tiền tới 200% nếu trải nghiệm sau khóa học của mem không tốt. Đấy là chưa kể trong quá trình học bạn còn được giáo viên kèm mỗi ngày, gia sư nếu trót lỡ học yếu quá nữa đấy.</li>
          <li>Và cuối cùng là quà tặng, ai lại chả thích tặng quà đúng không nào, học ở Jaxtina thì các bạn sẽ rất hay được nhận quà xinh như áo phông, sổ bút, rồi bonus thêm khóa học nữa :D</li>
        </ul>
      </ol>


      <p>Khen nhiều rồi, bây giờ tới phần chê thôi:</p>
      <ul>
        <li>Điểm trừ đầu tiên mà ConnectUs nhận thấy ở Jaxtina đó chính là thời lượng học: chỉ vọn vẹn 1.5h cho mỗi buổi học, tuy nhiên với mức giá quá kia thì thật khó để đòi hỏi thêm bạn cần tiếp thu kiến thức với tốc độ tên lửa thôi!</li>
        <li>Thêm một điều nữa là Jaxtina không public thông tin giảng viên các khóa học lên website hay Fanpage, vậy nên nếu các bạn muốn chọn mặt gửi vàng một chuyên gia nào đó thì cũng không có đâu.</li>
      </ul>

    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>
    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại Jaxtina</h3>
        <a class="example-image" href="../images/landings/jaxtina/class1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class8.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/class9.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/class9.jpg" alt="image-1" /></a>
        <h3>Hoạt động ngoại khoá của Jaxtina</h3>

        <a class="example-image" href="../images/landings/jaxtina/hoi-thao2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/hoi-thao2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/hoi-thao3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/hoi-thao3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/hoi-thao4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/hoi-thao4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/hoi-thao1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/hoi-thao1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/khai-truong1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/khai-truong1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jaxtina/khai-truong2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jaxtina/khai-truong2.jpg" alt="image-1" /></a>
      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/phuong.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Đặng Thị Phượng</a></div>
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
                <p>Thời gian thấm thoát trôi qua mà đã hơn 3 tháng được học tập tại Jaxtina, đến bây giờ mọi thứ trong tâm trí em vẫn như ngày đầu tiên. Sau khóa học, trình độ tiếng Anh của em đã được cải thiện rất đáng kể. Từ 1 người mất gốc tiếng Anh, bây giờ em đã nắm chắc được những kiến thức cơ bản, phát âm tiếng Anh khá chuẩn và có thể tự tin Nghe Nói tiếng Anh với mọi người mà không còn ngại ngùng như ngày xưa nữa. Cô giáo, trợ giảng và các anh chị ở Jaxtina rất thân thiện, nhiệt tình và sẵn sàng giúp đỡ em bất cứ lúc nào. Chính vì thế em luôn duy trì được cảm hứng và động lực học tập. </p>
                <p>Một lần nữa em muốn cảm ơn Jaxtina rất nhiều.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/nhung.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Đào Hồng Nhung</a></div>
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
                <p>Tôi rất hài lòng sau khi học xong khóa tiếng Anh cho người mới bắt đầu tại Jaxtina. Sau 3 tháng học tại đây tôi đã học lại được toàn bộ kiến thức nền tảng tiếng Anh, nghe nói được các chủ đề thông dụng để chuẩn bị lên giai đoạn tiếp theo. Lớp S51 rất vui và hòa đồng, mọi người giúp nhau cùng cố gắng học tập. Cách dạy của cô giáo Lan Phương rất hay và thực sự hiểu quả đối với tôi. </p>
                <p>I Love Jaxtina and I Love S51 Class!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/thuy.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Bùi Thúy</a></div>
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
                <p>Jaxtina có nhiều hoạt đồng trong lớp rất hay giúp mình nhớ được bài luôn trên lớp. Không khí ở lớp rất thoải mái, không có cảm giác là mình đang đi học. Mình rất quý cô giáo và các bạn làm việc ở Jaxtina vì mọi người nhiệt tình, cởi mở và thân thiện. Nhờ Jaxtina mà mình trở nên yêu tiếng tiếng Anh và trình độ tiếng Anh của mình đã tiến bộ lên rất nhiều. </p>
                <p>Em muốn cảm ơn trung tâm và cô Phương đã tạo cho em sự phấn khích, hứng thú với việc học tiếng Anh!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/ly.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Trần Thị Ly</a></div>
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
                <p>Sau khi hoàn thành khóa học tại trung tâm Jaxtina em thấy mọi người rất nhiệt tình, chua đáo, tạo môi trường học tập rất thân thiện. Giáo viên cô Nhi rất giỏi, luôn quan tâm sát sao tới từng học viên. Cô rất gần gũi với học trò của mình, thường hay động viên các bạn trong lớp cố gắng học tập tốt đơn, đặc biệt là các buổi học cô đều tổ chức nhiều các hoạt đông bên lề hấp dẫn. Các anh chị tiếp tân cũng rất đáng yêu, ai cũng nhớ tên chúng em.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/thach.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Văn Thạch</a></div>
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
                <p>Sau một nửa khóa học tại trung tâm Jaxtina em thấy trình độ Tiếng Anh của mình tiến bộ lên rất nhiều chẳng hạn như có thể dịch được một đoạn tiếng Anh dài mà gần như chỉ có một vài từ mới, xem Let’s talk hiểu gần hết nội dung, khả năng nói của em cũng đã tiến bộ hơn trước nhiều, được thế là nhờ em có động lực học bài và làm bài mỗi khi đến lớp. Sự nhiệt tình, tâm huyết và trình độ tiếng Anh tuyệt vời của chị đã truyền động lực rất lớn cho em.</p>
                <p> Em xin chân thành cảm ơn chị và trung tâm rất nhiều!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/mai.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Trần Thị Mai </a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 87%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Mình khi đến với lớp học mới chi bình thường: đọc phát âm sai, thời gian đầu mình rất tự ti nhưng sau mỗi buổi học mình nhận thấy mình cần phải cố gắng thật nhiều hơn để theo kịp với các thành viên khác trong lớp. Mình lúc đầu rất ngại ngùng khi nói nhưng sau đó mình cảm thấy được cải thiện rất nhiều. Mình đã theo được với lớp tới cuối khóa học. Phong cách giảng dạy của cô gần gũi, dễ hiểu, phát âm chuẩn và đặc biệt sau mỗi bài giảng của cô giúp mọi người mở rộng thêm vốn từ vựng để triển khai ý kiến bản thân sao cho chuyên nghiệp, logic hơn. Bên cạnh đó, phong cách của cô giúp còn giúp mọi người luôn duy trì để có thể hoàn thiện các kĩ năng của mình trên lớp. </p>
                <p>Cảm ơn cô và Jaxtina rất nhiều vì đã giúp mình có thể tự tin sử dụng tiếng Anh khi giao tiếp với người bản địa</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/thu.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Văn Thu </a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 80%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Mình thực sự thích cách dạy của giáo viên và kiến thức của cô. Sau khóa học này mình học được vô cùng nhiều kiến thứ thú vị và bổ ích, đặc biệt là cách diễn đạt trong đó có cách dử dụng các techniques để có bài nói tốt hơn. Phong cách, thái đội của CBNV là rất thân thiện và tạo được một môi trường tốt cho học tiếng Anh. Cảm ơn cô Jenna và Jaxtina Center trong thời gian qua. Mình tin rằng Jaxtina sẽ là nơi mà học viên được đào tạo tiếng Anh toàn diện tốt nhất. Chúc trung tâm ngày càng phát triển. </p>
                <p>Thanks and hope to see you!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/nam.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Hồng Hưng Nam</a></div>
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
                <p>Sau khóa học tiếng Anh 4 kĩ năng Nghe-Nói-Đọc-Viết tại Jaxtina thì hiện tại mình có thể dùng tiếng anh rất tự tin tất cả các kĩ năng. Giáo viên tại trung tâm với phong cách và phương pháp dạy rất hấp dẫn giúp mình trở nên yêu thích tiếng Anh, tiếp thu nhanh và tiến bộ cũng rất nhanh so với lúc đầu.</p>
                <p>Cảm ơn Jaxtina rất nhiều!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jaxtina/students/hieu.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Phùng Chí Hiếu</a></div>
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
                <p>Khóa học cho người mới bắt đầu đã giúp em ôn lại những kiến thức cơ bản nhất của Tiếng Anh và giúp em thích thú, muốn tiếp tục theo đuổi môn này. Đến với Trung Tâm em mang một quyết tâm học tập và mong muốn có thể sử dụng Tiếng Anh như một thứ tiếng thứ 2 trong đời sống chứ không phải để đi thi lấy điểm. Mong là em có thể tiếp tục học tại Trung Tâm và mang về cho mình những bài học bổ ích, giúp em giỏi Tiếng Anh hơn!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->




    </div>

    </div>
  </div>
</div>

@endsection
