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

<div id="profile" style="background-image: url('../images/landing/itd.jpg');">
  <div class="avatar">
    <img src="../images/partners/itd.jpg" alt="" class="full">
  </div>
  <h1>Ielts Thầy Diễn</h1>
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
    <p>Không hoa văn, lòng vòng, IELTS THẦY DIỄN, như bạn thấy đấy, là trung tâm dạy ôn IELTS (chủ lực)  của một thầy giáo tên là Diễn (tất nhiên không phải trung tâm chỉ có mỗi thầy Diễn đâu nha)</p>
    <p>Và để dùng 3 từ đánh giá về trung tâm này thì connectUs đánh giá đây là một nơi Đáng - Tin - Cậy để gửi gắm.</p>
    <p>Vì sao đáng tin cậy thì hãy chiu khó đọc tiếp dưới đây nhé:</p>
    <ol>
      <li>Khóa học siêu đa dạng từ giao tiếp tới TOEIC, IELTS: tính riêng IELTS đã có tới 4 khóa từ cấp tốc tới thông thường cho 3 trình độ 0-3.5 ; 3.5 - 5.5 và 6.5 trở đi là các bạn đủ hiểu sự đa dạng của IELTS thầy Diên rồi phải không nào.</li>
      <li>Liên tục Update thông tin: dạo qua fanpage của trung tâm này các bạn sẽ thấy vô số thông tin mới mẻ như bình luận trận đấu giữa U23 Việt Nam - Qatar, hay các video dạy Idioms hay ho, rất bổ ích để học nữa.</li>
      <li>Cơ sở vật chất: phòng học được thiết kế theo mô hình Coworking mini, với chất lượng bàn ghế, TV, máy chiếu xịn xò và tất nhiên điều hòa là thứ không thể thiếu được rồi</li>
      <li>Giáo viên, giảng viên trẻ chất lượng, tận tình quan tâm tới học viên.</li>
      <ul>
        <li>Update: thầy giáo tên Diễn mà ConnectUs đề cấp ở đầu post chính là thầy Nguyễn Tài Diễn, tốt nghiệp thạc sĩ tiếng Anh trường southern New hamshire, USA nhé. Thầy là giảng viên dạy chính các khóa chứng chỉ ở trung tâm, và có hơn 16 năm kinh nghiệm trong nghề, rất đáng để tin cậy gửi gắm.</li>
      </ul>
      <li>Chương trình học bài bản: có tặng thêm khóa học, test đầy đủ cho học viên, cung cấp dầy đủ slides, tư liệu học cho học viên mà không ngại bị ăn cắp bản quyền</li>
      <li>Có đầu ra vô cùng đảm bảo: bằng chứng là rất nhiều các bạn học viên sau khi tốt nghiệp các khóa IELTS, TOEIC ở đây thì đều nhận chứng chỉ với số điểm rất cao, trung tâm cũng chăm chỉ khoe thành tích học viên trên fanpage lắm, các bạn có thể xem và kiểm chứng nha, riêng mình thì tin lắm vì bạn mình học ở đây rồi :D</li>
    </ol>

    <p>Góc tối: rất “buồn” là hiện tại ConnectUs chưa tìm thấy điểm gì để chê IELTS Thầy Diễn cả, vậy nên hi vọng các bạn có thể giúp ConnectUs có thêm những feedback chất lượng sau khi đăng kí học nha!</p>

    <h4>Địa chỉ:</h4>
    <ul>
      <li>474 Xã Đàn, Hà Nội</li>
      <li>Số 2 ngõ 27 Huỳnh Thúc Kháng, Đống Đa, Hà Nội</li>
    </ul>

    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>

    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại IELTS thầy Diễn</h3>
        <a class="example-image" href="../images/landings/itd/class 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/class 8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/class 8.jpg" alt="image-1" /></a>
        <h3>Học viên xuất sắc tại IELTS Thầy diễn</h3>

        <a class="example-image" href="../images/landings/itd/feedback 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 8.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 9.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 9.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 10.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 10.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 11.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 11.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/itd/feedback 12.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/itd/feedback 12.jpg" alt="image-1" /></a>
      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/minh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Quang Minh Trịnh</a></div>
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
                <p>Đã bao giờ bạn tự hỏi đi ôn luyện IELTS mãi mà chưa thành công?</p>
                <p>Bạn học rất nhiều nơi mà chủ yếu là các trung tâm có giáo viên bản ngữ, tuy nhiên thành công chủ yếu không nằm ở đó. Ví lí do gì? Đó là nằm ở chỗ người bản ngữ không hiểu được điểu yếu của người Việt, không thể hiểu được văn hoá hay đúng hơn là tư duy của người Việt.</p>
                <p>Thật may mắn và trên cả sự mong đợi khi mình tham gia IELTS Thầy Diễn, thật lòng mà nói mình hiểu ra một điều đơn giản nằm ở chỗ : chỉ có người Việt mới đêm lại hạnh phúc cho nhau thôi. Vì sao? Vì người Việt sẽ tìm ra con đường ngắn nhất để bạn chung phục IELTS.</p>
                <p>Em xin chân thành cảm ơn thầy Diễn đã giúp em chinh phúc ước mơ IELTS</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/duong.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Lê Dương</a></div>
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
                <p>Mình có may mắn được tham gia một khóa học tiếng anh cơ bản của thầy vào hồi lớp 12. Lúc đó mục tiêu chỉ đơn giản là thi đại học nhưng thật bất ngờ là cả trong quá trình học mình đã được thầy và các chị xây cho một cái nền cho cả 4 kĩ năng. Sau đó thì việc học tiếng anh của mình không còn khó khăn như ngày trước nữa. Mà trở nên thật thú vị! </p>
                <p>Cảm ơn thầy! Và cảm ơn các anh chị ở ITD nhé!!!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/chi.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/lonton.ng?hc_ref=ARSHurCQnQ9SMEk2EUU_kE8oYFrZFr3HlvUYI1f7701zb6Dph5SpD0KWYh4Xx8dAWGg">Nguyễn Vũ Quỳnh Chi</a></div>
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
                <p>Học Tiếng Anh trong một thời gian không phải ngắn nhưng mình vẫn loay hoay tìm hướng học Tiếng Anh thực sự khoa học và hiệu quả. Chỉ trong một thời gian ngắn theo học tại trung tâm và nhận được sự hướng dẫn nhiệt tình của Giáo viên và đội ngũ Tutor nhiệt tình, mình đã nhận được kết quả tương đối hài lòng. Minh đặc biệt ấn tượng với dịch vụ Speaking kèm 1-1 trước ngày thi, Tutor đã giúp mình rất nhiều trong việc sửa lỗi từ vựng đến mẫu câu và cách sử dụng :"). </p><p>Chúc trung tâm sẽ ngày càng thành công trong tương lai ạ </p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/minh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Nguyễn Đạt</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 76%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>After a long time learning and working here, it brings a number of different feelings. my trainers teach me how is IELTS. sometimes, they cannot put up with me because i am lazy and nguxi, but they do not let me alone. thank you for standing by me and supporting me i love Ielts thầy diễn... After getting over many difficulties, i achieve my target. special thanks to Diễm Hương cute, Nguyễn Hiền baby, Phạm Hương funny and P.anh crazyy!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/linh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Linh Phí</a></div>
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
              <p>Từ một đứa lười biếng được tiếp thêm động lực từ các trainer xinh đẹp ở trung tâm, mình có động lực học hơn hẳn. (như chân dài xinh xắn, ăn bao nhiêu dáng vẫn chuẩn Vân Anh ý :x )</p>
              <p>Đặc biệt thích Writing của Hương dạy ạ. Rất logic và rõ ràng, kiến thức đủ dùng. Vận dụng tất cả và chăm gửi bài cho Hương chữa, chăm đọc sample để rút kinh nghiệm thì sẽ gain 6.5 Writing như mình chỉ sau 1 khoá học hơn 1 tháng ạ .Cảm ơn trung tâm </p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->


        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/hoang.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/hem.beo?hc_ref=ARRqYKOMyveDAnJS2QYlUU-4xPUIqVk392zSI108r1eZfDR538KsPXrHK67eHVFmfhk">Hoang Anh Bui Thi</a></div>
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
                <p>Ngày nhận điểm vừa vui vì đạt target, vừa thấy biết ơn vì đã tìm được 1 trung tâm thực sự phù hợp với bản thân mình.</p>
                <p>Em cảm ơn thầy vì những bài giảng thú vị và đầy tính áp dụng, cảm ơn chị Hương vì sự nhiệt tình chữa những bài văn ngây ngốc của em, và đặc biệt cảm ơn Phương Anh vì đã cực kì nhẫn nại với người nói dở từ vựng cũng chán như mềnhhh </p>
                <p>Em đã học được rất nhiều trong gần 4 tháng đồng hành cùng Ielts Thầy Diễn ahhhh</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/thu.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/tailorbird12294?hc_ref=ARRTqeahZL9Da7h1HwnwwXJzoVQIJqP-D_mji1EBph6tZAIpPnsO75MduH_wJ-rWrxA">Hà Thu Nguyễn</a></div>
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
                <p>lần đầu tiên đi học ôn thi ielts, từ đứa chả biết ielts là j ngoài cái tên, sau khi học xong 1 khoá pre speaking của e Hiền đã biết thêm được bn cụm hay từ hay cho ielts, rồi cách lấy idea khiến bài speaking nào cũng as easy as a pie ^^ còn lớp writing của thầy Diễn thì đúng là một bầu trời tri thức, to quá nên đè mình tí chết. toàn từ hay mỗi tội mình target thấp nên lười học thôi</p>
                <p>khoái nhất là các dịch vụ đi kèm của trung tâm. được em trainer kèm cặp speaking đến tận lúc thi luôn, chữa bài cũng thế. các e nhiệt tình quá làm đứa lười học như mình thấy ngại quá</p>
                <p>sau chuỗi ngày bám rễ ở trung tâm từ sáng tới tối thì kết quả đạt được là 6.0 với 6.5 listen and read, 6.0 speak and 5.0 wr, cơ bản wr quá lười cơ chả chịu học chứ ko thì đã cố lên đc 6.5</p>
                <p>Cám ơn thầy và e Hiền xinh xắn nhiều nha!</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/van.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/cloudy.ngo.5?fref=nf">Vũ Thị Vân An</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 100%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Thầy Diễn vô đối nhá! Khà khà</p>
                <p>Yêu Phương Anh và các bạn trainers.</p>
                <p>Suốt hơn hai tháng ôn luyện gấp cho đủ target đi du, thầy và phương Anh đã rất nhiệt tình. </p>
                <p>Yêu thầy vì có phong cách dạy quá độc, dí dỏm, lại cực kì dễ hiểu. </p>
                <p>Còn Anh em thì khỏi chê level speaking rồi. Cảm ơn em đã stand by me through all the hardship</p>
                <p>Cảm ơn thầy, phương Anh và trainer lần nữa. Cho ngàn sao luôn ấy</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/itd/students/quoc.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/the4v3ng3rs?hc_ref=ARQFkp-5zSynsanP1xOfJ3F-IHes_-PftnxtvKuiIDHyP8afnNxDWpsKwzsSG2VfXGU">Đạt Lê Quốc</a></div>
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
                <p>Trong 2 tháng ngắn ngủi thì 2 kĩ năng viết và nói của mình có sự tiến bộ đáng kể với sự giúp đỡ của trung tâm. Đội ngũ giảng viên nhiệt tình lại còn vui vẻ khiến học sinh ở đây rất thoải mái trong và ngoài giờ học. </p>
                <p>Điểm nhấn chính là thời gian học vô cùng linh động cũng như có thể được chữa bài ngay tận ngày thi luôn.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->




    </div>

    </div>
  </div>
</div>

@endsection
