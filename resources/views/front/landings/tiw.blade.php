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

<div id="profile" style="background-image: url('../images/landing/tiw.jpg');">
  <div class="avatar">
    <img src="../images/partners/tiw.jpg" alt="" class="full">
  </div>
  <h1>The IELTS Workshop</h1>
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
      <h3>Tại sao bạn nên học tại The IELTS Workshop?</h3>
      <p>Không phô trương và cần nhiều mỹ từ, The IELTS Workshop tự hào khi mang lại cho học viên của mình những giá trị về một phương pháp giảng dạy hiện đại, sáng tạo, môi trường rèn luyện, học tập, vui chơi cùng tiếng Anh thân thiện , và đội ngũ giáo viên chuyên môn xuất sắc, dày dặn kinh nghiệm, chu đáo đầy trách nhiệm</p>
      <p>Đặc biệt, chúng tôi vô cùng tự hào khi có thầy giáo Đặng Trần Tùng - người đã xuất sắc đạt con điểm 9.0 IELTS hiếm hoi và đem những gì tinh túy nhất của quá trình chinh phục đỉnh cao đó vào trong giáo trình IELTS của trung tâm</p>
      <h3>The IELTS Workshop có gì khác biệt?</h3>
      <p>Cùng bạn đồng hành tới đỉnh cao 9.0</p>
      <p>The IELTS Workshop xây dựng một tiêu chuẩn mới cho việc học IELTS tại trung tâm. Ưu tiên hàng đầu của The IELTS Workshop là kết quả đầu ra của học viên. Không chỉ là học trên lớp cùng giáo viên, chúng tôi luôn khuyến khích và hướng dẫn học viên tự-học-chủ-động, biến tiếng Anh trở thành một thói quen không chỉ trong học tập, mà là cả trong cuộc sống. TIW là trung tâm có thư viện tài liệu, sách ngoại văn mở dành cho học viên và mọi người sử dụng hoàn toàn miễn phí.</p>
      <p>Ngoài ra, The IELTS Workshop là trung tâm duy nhất học viên có thể chủ động đặt lịch hẹn với giáo viên và trợ giảng để được bổ trợ kiến thức ngoài giờ học. Chúng tôi cam kết sẽ mang đến kết quả tốt nhất trong lớp học, và hỗ trợ nhiều nhất ngoài lớp học, tất cả nhằm giúp bạn đạt được điểm số IELTS mà bạn xứng đáng nhận được.</p>
      <p>Ngoài giờ lên lớp và học ở nhà, học viên hoàn toàn có thể vào thư viện và học hỏi, luyện Speaking với các bạn trợ giảng tại The IELTS Workshop bất kỳ lúc nào trong giờ hành chính. Đội ngũ trợ giảng trẻ, tận tụy với trình độ chuyên môn trên 7.0 IELTS sẽ là người bạn đồng hành không thể thiếu được trong chặng đường ôn luyện của học viên.</p>

    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>
    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại The IELTS workshop</h3>
        <a class="example-image" href="../images/landings/tiw/tiw_classes1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_classes8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_classes8.jpg" alt="image-1" /></a>
        <h3>Những học viên xuất sắc tại The IELTS workshop</h3>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/tiw/tiw_students_certi7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/tiw/tiw_students_certi7.jpg" alt="image-1" /></a>

      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">
        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/trangnguyen.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/youaremyheaven.valerie.smile">Đoan Trang Nguyễn</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 73%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Trước giờ học khá nhiều trung tâm nhưng chưa bao giờ học một trung tâm mà khác lạ đến vậy. Mất một năm trên Hà Nội để tìm kiếm một trung tâm có thể đặt trọn niềm tin giao phó cuộc đời mình sau này và qua một người bạn đã biết đến TIW.</p>
                <p>Cũng làm bài test rồi đến học. Kết thúc một khoá học mà muốn học luôn khoá thứ 2 vì đơn giản là tin tưởng TIW, muốn gặp gỡ những người bạn học cùng vui tính. Điều thấy hứng thú hơn cả là đội ngũ giáo viên của TIW toàn là những giáo việc cực trẻ mà rất giỏi, mỗi người đều mang một màu sắc riêng. </p>
                <p>Chưa bao giờ mình thấy giáo viên lại mang hết vũ khí bí mật của mình mà truyền đạt đến học viên một cách nhiệt tình đến vậy. Hay tại gặp được Ms. Giang xinh xắn, đáng yêu ngay từ khoá học đầu tiên mà em càng có thêm động lực để theo đuổi mục tiêu đến cùng đây</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/lenanh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/profile.php?id=100007748850602&hc_ref=ARQLqAUUL8oz-lOvm8_wZmSEEWeBVsVmo8f73PdhdYMcG7rUOlEYmtg4eRSgub9MEzY">Le NAnh</a></div>
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
                <p>1 lần nữa xin chân thành cảm ơn TIW cùng các thầy cô giáo với các anh chị trợ giảng ở nơi đây đặc biệt là Miss Thủy và Miss Giang đã khiến e có được ngày hôm nay=) Thật sự thì e có rất nhiều điều muốn nói dành cho trung tâm vì e đã có rất nhiều kỉ niệm từ FM19 tới SO22 (trở thành 1 sponsor của lớp=). Ấn tượng của e dành cho 2 cô giáo mà e quý mến nhất là 2 cô rất xinh đẹp và tài năng cùng đó là sự nhiệt huyết trong giảng dạy đã giúp e có 1 bước tiến dài trên con đường mà e đã chọn.</p>
                <p>To be honest, e đã cảm nhận được sự nhiệt tình đó khi mà mỗi tối các cô đều dành thời gian speaking và sửa lỗi cho e, nhờ đó mà đã tạo cho e nền tảng để tự tin bước vào phòng thi speaking ngày 23/1 vừa qua dù e biết mình trả lời chưa tốt lắm nhưng đó là tất cả những gì e đã trải qua và nhờ bài học mà các cô giáo đã truyền đạt=) Tuy là 1 học sinh SO và vừa đi thi sau khi kết thúc khóa nhưng e vẫn sẽ chọn gắn bó với trung tâm đến lớp cuối cùng vì mình đã có cảm giác vô cùng thân thuộc nơi đây.</p>
                <p>Anyway, thanks all of the people of here for helping me pretty much.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/khanhlinh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/nklinh1997">Khanh Linh</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 95%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Hiuhiu, phải nói thật là mình rất có duyên với TIW ấy ! </p>
                <p>Nói thế nào nhỉ, mình biết và có ý định thi IELTS được 5,6 năm rồi, từ khi mình mới vào lớp 10 cho đến tận bây giờ lận, cũng đi học nhiều trung tâm, cũng học ở nhà, cũng lên mạng đủ kiểu mà do cái tính lầy ông trời ưu ái ban cho nên đến tận năm ba đại học mới quyết tâm tu để lấy chiếc bằng:v</p>
                <p>Mình nhớ trước khi quyết định học thầy Tùng (lúc đó thầy mới mở TIW thì phải) mình cũng đắn đo rất nhiều, thứ nhất là mình đã đi học QUÁ NHIỀU trung tâm rồi, nhưng kết quả thì không thấy rõ và mình chẳng còn nhiều niềm tin nữa, thứ 2 là giữa hàng hà xa số các trung tâm Tiếng anh mọc lên như nấm sau mưa được quảng cáo rầm rộ đủ kiểu nên gây confuse kinh dị.... Cơ mà, tự nhiên có hôm xem được clip của ông thầy béo béo giọng anh mỹ chất chất xong cute vcg cũng thú vị nên thôi, thử làm test xem sao. Và thế là, .... cái duyên nó bắt đầu...</p>
                <p>Lúc có kết quả, chị Hoa, vợ của thầy Tùng trực tiếp gọi điện hỏi mình có muốn học lớp Master không, nghĩ thế nào quyết cái rụp và đi học:v</p>
                <p>Học thầy Tùng thích nhất là cái không khí thoải mái, có thể do thầy trẻ và vui tính nên với đứa như mình học rất vào. Cá nhân mình thì mình thích học writing của thầy, kiểu nó dễ triển khai, dễ nhớ, dễ tự xử nếu đi thi thật, và đặc biệt, với 1 đứa base chuyên hóa từ không biết viết essay như thế nào mà điểm writing nát trong mức chấp nhận được thì rõ ràng thầy dạy k tồi rồi =))</p>
                <p>Ngoài thầy Tùng, người suốt ngày đòi "hàng" (bài writing mình tự viết nhờ thầy sửa), thì mình cũng rất thích các bạn trợ giảng ở đây. Có em Tài, người ban đầu lạnh lùng kinh khủng, còn 3 tuần trước thi thằng bé lắc đầu nói với mình speaking thảm họa:v nhưng lại vẫn luôn kiên nhẫn nghe mình nói và sửa từng phát âm và cách sắp xếp câu trả lời của mình=) Nói chung em ấy ngoan. Và có cả Hiền, cô bạn có ước muốn thành giáo viên tiếng anh sau này, hết lòng vì học viên của TIW, sáng sớm vẫn sẵn sàng đợi mình ở ngoài cửa phòng thi nói ở BC :'> U chao ấm lòng =) Đó, cái hành trình ở TIW tầm nửa năm cũng khép lại bằng việc mình đạt được mục tiêu 7 chấm- tuy khiêm tốn và còn phải học hỏi nhiều nhưng nhờ vào nỗ lực cả thầy và trò nên mình rất chân trọng .</p>
                <p>p.s: mình còn thi lại nên chắc bám càng đây lâu dài :3 Có ai hỏi mình học đâu thì mình sẵn sàng trả lời THE IELTS WORKSHOP </p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/tronghieu.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/hieubeo0">Ng Trọng Hiếu</a></div>
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
                <p>Mình là thành viên của lớp FM 25 - lớp của thầy Phát . Trải nghiệm ban đầu của mình khi mới vào lớp cảm thấy rất thoải mái , sạch sẽ , không khí không bị gò bó , khó chịu . Thầy giáo và các bạn rất năng động và tích cực trong việc học và dậy</p>
                <p>Điều đáng khen ở lớp học là lớp có hệ thống cách âm khá tốt giúp chúng mình có thể học 1 cách thoải mái nhất mà không chịu tiếng ồn từ bên ngoài, cộng thêm là có cầu thang máy nên rất tiện cho những thằng lười như mình . Các bạn trong lớp thì rất hoà đồng và cực kì hăng hái trong việc học và chơi , thầy Phát thì nhiệt tình và luôn giải đáp mọi thắc mắc của cả lớp và đặc biệt thầy còn có 1 sự chịu đựng , nhẫn nhịn 1 cách phi thường.</p>
                <p>Túm lại là tuyệt vời.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/hieulai.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/hieu.lai.39142">Hieu Lai</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 73%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Thật sự mình muốn gửi lời cám ơn tới trung tâm và Cô Lương Thu Thủy rất nhiều. Mình biết tới trung tâm qua sự chỉ dẫn của bạn bè cũng có, nghe tiếng thầy Tùng cũng có vì thế những ngày đầu khi theo học mình đã có rất nhiều băn khoăn. Thật sự mới chỉ 2 tháng trước đây mình từng như các bạn mới vào, băn khoăn về chất lượng giảng dạy, đọc lời đánh giá và inbox cho học viên để hỏi xem cảm nhận của họ thế nào.</p>
                <p>Mình muốn cám ơn nhiều tới đội ngũ hỗ trợ của trung tâm, các anh chị như chị Luong Bao Hoa theo mình gọi đã hỗ trợ mình nhiệt tình, cũng như cám ơn cô Thủy rất nhiều vì đã giúp mình tìm được cách học hợp lý cho bản thân và sự tận tụy của côcám ơn cô và các học viên lớp F.M 24 với nhiều trải nghiệm đáng nhớ.</p>
                <p>Thật sự cám ơn mọi người nhiều, hi vọng sẽ có cơ hội gắn bó với mọi người trong thời gian tới.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/hientrang.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/phunghientrang6">Phùng Hiền Trang</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 83%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Sau khi tham khảo rất nhiều điểm học IELTS, mình và gia đình quyết định chọn Ielts workshop theo sự giới thiệu của bạn bè. Các chị ở đây thì luôn theo sát hỗ trợ, tư vấn cho mình những khóa học bổ ích và nhanh nhất để có thể đạt được điểm số IELTS như mục tiêu đạt ra. Cơ sở vật chất đầy đủ điều hòa, quạt, bàn, ghế, bảng và máy chiếu. Quan trọng nhất là chất lượng giảng dạy thì cũng tuyệt vời luôn.</p>
                <p>Một người mất gốc tiếng anh như mình, với sự giảng dạy nhiệt tình của Cô Thủy thì mình đã tiến bộ lên rất nhiều. Mình mới hoàn thành xong lớp freshman và mình sẽ tiếp tục học lên các khóa trên.</p>
                <p>Mình rất thích nơi đây.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/thangle.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/profile.php?id=100007759307048">Thắng Lê</a></div>
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
                <p>Mình có may mắn được làm việc và tiếp xúc với thầy Tùng cô Hoa và một vài thành viên của TIWS , và cũng là thành viên của các group học IELTS của trung tâm một thời gian dài, mình nhận ra một điều thứ quý giá nhất trung tâm trao đến học viên không chỉ là kiến thức bài bản chỉn chu mà còn là động lực, cảm hứng học và cảm hứng để chinh phục mọi thử thách.</p>
                <p>Nhìn những thế hệ học viên đã từng qua các lớp, say mê chia sẻ kinh nghiệm, say mê động viên nhau cùng tiến bộ tôi hiểu TIWS chính xác là trung tâm hàng đầu Việt Nam không chỉ là dạy IELTS mà còn là để cùng các bạn trẻ hướng đến một tinh thần học tích cực - học để vươn ra biển lớn. </p>
                <p>Thay mặt cho những fan yêu quý trung tâm cảm ơn thầy Tùng, cô Hoa, các thầy cô đã và đang luôn tận hiến vì những mục tiêu gỉan dị nhưng cao đẹp: một thế hệ người trẻ Việt dùng ngoại ngữ để thật văn minh.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/oanhha.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/oanh.ha.94651?hc_ref=ARSZLqg-qjqDogIzGFYf52HVtSPoKY6CUQjCJ8wB1_R8M5jf32nKqvjSadodoag0jzE">Oanh Hà</a></div>
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
                <p>Cô Hương Giang max dễ tính đáng yêu nữa ạ , e thích nhất khoản làm vài tập nhóm cảm giác thoải mái hoà đồng với mọi người dễ dàng hơn . Cô dạy dễ hiểu lại hay giải đáp thắc mắc cho bn e nữa . Ngày trước e nhát speaking lắm nhưng giờ có tự tin hơn trước nhiều rồi ạ . Nói chung yêu cô nhiều lắm</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/tiw/students/vonhung.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/profile.php?id=100003270996039&hc_ref=ARR1qrtRJ3Pqw7OBOCx7-ZZvb5GBG0tU6_t4xntkIiq19zr-L89kHMx4UjqDIp8bvoA">Võ Nhungg</a></div>
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
                <p>E là thành viên của lớp FM27 do cô Thủy phụ trách. Cuộc đời thật bất công khi lại có 1 người đã xinh gái lại giỏi như cô :(( và e cảm thấy may mắn khi được học lớp của cô. Nhờ giáo trình học của TIW và cách giảng dạy của cô Thủy mà 1 lần nữa e có hứng thú với tiếng anh. Cô Thủy rất nhiệt tình, sẵn sàng giải đáp mọi thắc mắc của học sinh, cách giảng dạy của cô cực kì dễ hiểu, có thể hiểu hết toàn bộ nội dung bài học ngay ở trên lớp. Cô lại rất hòa đồng, thân thiện, gần gũi với học sinh. Mặc dù cô là người trẻ tuổi nhưng phong cách giảng dạy của cô lại rất chuyên nghiệp và thu hút. Và cuối cùng là Iam a big fan of ms.Thuy</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->




        <!-- <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div> -->
      </div>






      <!-- <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div> -->
    </div>

    </div>
  </div>
</div>

@endsection
