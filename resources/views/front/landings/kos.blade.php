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

<div id="profile">
  <div class="avatar">
    <img src="../images/partners/kos.jpg" alt="" class="full">
  </div>
  <h1>KOS English Center</h1>
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
      <h3>Tại sao bạn nên học tại KOS?</h3>
      <p>- Mô hình lớp học nhóm nhỏ chỉ từ 6-8 học viên và các lớp học cá nhân (1 kèm 1, 1 kèm 2), KOS tự tin đi đầu trong việc xây dựng mô hình nhóm nhỏ ưu việt nhất ở địa bàn Hà Nội.</p>
      <p>- Đội ngũ giáo viên 100% có chứng chỉ TESOL và CELTA với nhiều năm kinh nghiệm và tâm huyết trong giảng dạy, luôn cố gắng tạo động lực và niềm đam mê với Tiếng Anh cho học viên.</p>
      <p>- Giáo trình được xây dựng và biên soạn khoa học theo các chủ điểm mang tính ứng dụng thực tiễn cao.</p>
      <p>- Có tới 3 cơ sở trên địa bàn hà nội.</p>
      <ul>
        <li>  Cơ Sở 1: Số 72E Ngõ 283 Trần Khát Chân Hoàn Kiếm. Tel: (024) 637 0047 - (024) 637 0052 </li>
        <li>  Cơ Sở  2: Số 8 Ngõ 20 Nguyễn Công Hoan, Ba Đình. Tel: (024) 724 7269 - (024) 724 7270 </li>
        <li>  Cơ Sở 3: Số 62A Hồ Tùng Mậu, Cầu Giấy. Tel: (024) 724 7269 - (024) 724 7270</li>
      </ul>

    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>
    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại KOS</h3>
        <a class="example-image" href="../images/landings/kos/kos_classes1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_classes8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_classes8.jpg" alt="image-1" /></a>
        <h3>Những học viên xuất sắc tại KOS</h3>

        <a class="example-image" href="../images/landings/kos/kos_students_certi2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi8.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi9.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi9.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/kos/kos_students_certi10.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/kos/kos_students_certi10.jpg" alt="image-1" /></a>
      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/kos/students/phuonghoa.png" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/phuonghoa.nguyenthi.98?hc_ref=ARTGnP4TljJMmQy0zkRvNnhnnUNf7Q0qpZzPznUpn1zWt64C4-0D3dC-aG3pB-6Bses">Phương Hoa</a></div>
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
                <p>Mình học tại trung tâm qua lời giới thiệu của đứa bạn, được gặp thầy, cô giáo rất vui tính và tốt bụng ( cô Dettie, nếu các bạn muốn học lại căn bản và giao tiếp nhé. Cô dễ thương lắm ^^) , các chị nhân viên thì nhiệt tình, lại còn xênh đẹp, các chị ns tiếng anh rất hay nữa❤ Sau khi học thì bg mình tự tin nói hơn rất nhiều rồi. Mọi người ở trung tâm luôn sẵn sàng gíup đỡ học viên, nên kể cả sau khi kết thúc khóa học, các bạn cũng đừng ngại hỏi bài nha ^^.</p>
                <p>Chúc các bạn thành công.</p>
              </div>
            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/kos/students/touyen.png" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/tjt.nguyen?hc_ref=ARTMg7P7evsWyk7LdK2cALpCK8a3SllMTnledXyox1dS7woOPIv9UsgFUsUsU7aAb-w">Nguyễn Tố Uyên</a></div>
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
                <p>Cảm thấy rất may mắn vì tìm được trung tâm KOS. Các chị tư vấn rất nhiệt tình, xinh gái, , giáo viên có nhiều phương pháp giảng dạy vừa học vừa chơi rất thoải mái, dễ tiếp thu và củng cố được bài học:) đặc biệt là mỗi lớp chỉ có 6 thành viên, giáo viên có thể quan tâm đến tất cả các học viên:) chứ không như các trung tâm khác lớp rất đông, giáo viên k thể sát xao được. Sau khi học 1 khoá học ở trung tâm, điều e thích nhất là có thể học với giáo viên người nước ngoài, giúp em có thể luyện nghe nói, phản xạ, trau dồi được vốn từ của mình. Hơn nữa, phía trung tâm còn rất tạo điều kiện để sắp xếp thời gian học cho hợp lý với thời gian biểu của e giúp e có thể tham gia lớp học đầy đủ. E rất hài lòng về chất lượng và dịch vụ của trung tâm</p>
              </div>
            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/kos/students/congpham.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/cong190296?hc_ref=ARSgRclgzDgVnKVaPHVaoBJSxfewMPMmOY5mULdunF4BeCDSbwtr73zumOll8_bVN9U">Công Phạm</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 90%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
                <p>Trung tâm tốt, thích nhất ở việc chỉ có tối đa 6 học viên 1 lớp, giáo viên cả nước ngoài lẫn người Việt đều vui vẻ, tận tình với học viên, nhân viên tư vấn nhiệt tình, phòng học thoáng mát, đẹp.Nhưng công tác truyền thông, quảng cáo của trung tâm còn chưa tốt nên khó biết đến quá, mong sẽ cải thiện hơn</p>
              </div>
            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/kos/students/nguyenthuy.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/profile.php?id=100008853437431&hc_ref=ARTap22tMFMtbQupHlDePVKlCIxiKlhSmJTiujaMaTszYjfvb2Xcgs4l_sXXbhcTcxM">Nguyễn Thuỷ</a></div>
                <!-- <div class="course-details-comment-date">30/3/2017</div> -->
              </div>
            </div>

            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">
                <div class="stars-rating-static">
                  <span class="star-rating-static-first fa fa-star">
                      <span class="star-rating-static-second fa fa-star" style="width: 65%;"></span>
                  </span>
                </div>
              </div>
              <div class="course-details-comment-content">
              <p>Mình cũng đã từng học 1,2 trung tâm trước khi tìm đến Kos. Ấn tượng ban đầu vs mình là:</p>
              <ul>
                <li>Các chị tư vấn viên nhiệt tình, chuyên nghiệp(Chị Chung)</li>
                <li>Lịch học linh động</li>
                <li>Lớp học theo mô hình nhóm 4-8 người nên khá hiệu quả, không đông đúc như một số trung tâm mình học trc đó</li>
                <li>Giáo viên( Thầy Công): Vui tính, phương pháp giảng bài dễ hiểu,sau mỗi buổi học có kiểm tra từ và nhờ đó vốn từ m tăng lên đáng kể</li>
              </ul>
              <p>Nói chung là sẽ còn tiếp tục học một số khoá học nữa</p>
            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <!-- <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div> -->
      </div>

      <div class="course-details-comment-individuals more-item-box">
        <div class="course-details-comment">
          <div class="course-details-comment-left">
            <div class="course-details-comment-avatar">
              <img src="../images/landings/kos/students/duykhanh.jpg" alt="" class="full">
            </div>
            <div class="course-details-comment-date-username">
              <div class="course-details-comment-username"><a href="https://www.facebook.com/khanhmax.khanh?hc_ref=ARQujMozmjG9lcUkgWWVKhlPqy7gJ0UfyswkpV9BzkZ4bI_L83jrL7hApwoO6-Kp3ek">Nguyễn Duy Khánh</a></div>
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
              <p>Bản thân cũng đã từng học ở 1,2 trung tâm trước khi đến KOS.(Các trung tâm trước đấy đều không hài lòng tẹo nào. Vì thật sự kĩ năng sư phạm còn rất hạn chế)</p>
              <p>Ấn tượng đầu tiên của mình ở đây chính là sự nhiệt tình của các chị tư vấn viên, luôn cảm thấy các chị như những người bạn, sẵn lòng giúp đỡ, tạo điều kiện tốt nhất cho học viên, đặc biệt là những học viên có lịch tréo ngoe như mình.</p>
              <p>Tuy còn gặp rất nhiều khó khăn trong việc học tiếng Anh (chủ yếu là do mình ko dành được nhiều thời gian học, vướng lịch công việc, việc gia đình etc..), nhưng thật sự cảm thấy khá ưng vì đã tiến bộ rất nhiều so với thời điểm bắt đầu, được các thầy cô chỉ dạy, giúp đỡ (chị Thảo, cô Dette, thầy Mark). Học thì rất vui, cảm nhận rõ được nguồn năng lượng từ các thầy cô khi dạy, rất lôi cuốn.</p>
            </div>

          </div>
        </div>
      </div><!-- .course-details-comment-individuals -->




      <!-- <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div> -->
    </div>

    </div>
  </div>
</div>

@endsection
