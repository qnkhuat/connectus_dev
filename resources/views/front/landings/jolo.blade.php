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

<div id="profile" style="background-image: url('../images/landing/jolo.jpg');">
  <div class="avatar">
    <img src="../images/partners/jolo.jpg" alt="" class="full">
  </div>
  <h1>Jolo</h1>
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
      <p>Mặc dù có cái tên đáng yêu dễ khiến người ta nhầm tưởng ở những giây đầu rằng đây là một trung tâm anh ngữ nhỏ bé xinh xắn, JOLO English kì thực là một đơn vị đào tạo rất “khủng” và rất đáng để theo học đấy nha.</p>
      <p>Không lòng vòng nữa, chúng ta cùng đến với phần khen - chê JOLO nhé:</p>
      <p>Những điểm cộng to đùng cho JOLO:</p>
      <ol>
        <li>Xuất xứ xịn: là thương hiệu mới của GLN International Education (một trung tâm tiếng Anh khác có tiếng ở mảng du học) vậy nên có thể tóm gọn JOLO English là một trung tâm có - hệ - thống </li>
        <li>Khóa học đa dạng, nhiều lựa chọn: dù bạn là người muốn học để ứng dụng hay học sâu các chứng chỉ, JOLO đều đáp ứng được cho bạn, đây là một điểm rất tiện vì các bạn sẽ không cần phải chạy đi chạy lại giữa các trung tâm để chọn những khóa hoc khác nhau nữa</li>
        <li>Giảng viên xịn: Đây có lẽ là một trong những trung tâm nhiều thầy cô ngoại quốc nhất trong số các cơ sở đào tạo ở Hà Nội, có thể kể ra hai trong 9 giáo viên nước ngoài xịn tại đây như:</li>
        <ul>
          <li>Thầy Paul  Germino Tốt nghiệp từ trường đại học Canterbury nước Anh; bằng cử nhân ngành Ngôn ngữ Anh và đã có gần 10 năm kinh nghiệm trong việc giảng dạy Anh ngữ tại các trường khắp các quốc gia châu Á</li>
          <li>Hay cô Sherwin: Tốt nghiệp trường đại học CEBU NORMAL với tấm bằng cử nhân Anh văn. Cô đã có 7 năm kinh nghiệm trong sự nghiệp giảng dạy tiếng Anh cho người nước ngoài.</li>
        </ul>
        <li>Cơ sở vật chất xịn nốt: dạo qua một vòng các lớp học của JOLO thì có thể rút ra các đặc điểm ngắn gọn: phòng học rộng, sạch đẹp với tông nền chủ đạo là cam, máy lạnh, TV, thiết bị chiếu sáng, thiết bị giảng dạy đầy đủ không thiếu gì</li>
        <li>Có chương trình du học, trại hè: với chính sách hỗ trợ du học tận tình thì học viên của JOLO cũng có thêm cơ hội đi trao đổi, học tập ở nước ngoài nữa, với các bạn đang có nhu cầu “xuất ngoại” thì JOLO quả thực không nên bỏ qua đâu nha</li>
        <li>Đảm bảo chất lượng đầu ra: bằng chứng là web của JOLO có bất tận những hình ảnh của các bạn học viên với thành tích tốt nghiệp khủng, IELTS 7.0 trở lên, toàn là con nhà người ta đấy :<</li>
      </ol>

      <p>Rất nhiều điểm cộng rồi nhưng connectUs vẫn phải trừ đi của JOLO ít điểm thôi:</p>
      <ul>
        <li>Và điểm trừ duy nhất của trung tâm tiếng Anh “xịn xò” này đó là mức học phí khá cao, ví dụ một khóa General sẽ có giá chưa giảm là: 13.860.000 VND, một mức giá không thân thiện lắm với sinh viên. Tuy nhiên bởi các khóa học được giảng dạy 100% là giáo viên nước ngoài, vậy nên các bạn có thể tin tưởng vào chất lượng mà JOLO mang lại sẽ tương xứng với túi tiền của mình nha!!</li>
      </ul>



    </div>
    <div class="courses tab">
      @include('front.components.course_row_replace')

    </div>

    <div class="images tab">
      <div class="wrap">
        <h3>Lớp học tại JOLO</h3>
        <a class="example-image" href="../images/landings/jolo/class 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 4.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 4.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 5.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 5.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 6.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 6.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 7.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 7.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 8.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 8.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 9.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 9.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 10.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 10.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 11.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 11.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 12.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 12.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/class 13.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/class 13.jpg" alt="image-1" /></a>
        <h3>Hoạt động ngoại khoái tại JOLO</h3>

        <a class="example-image" href="../images/landings/jolo/fun 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/fun 1.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/fun 2.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/fun 2.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/fun 3.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/fun 3.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/outdoor.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/outdoor.jpg" alt="image-1" /></a>
        <a class="example-image" href="../images/landings/jolo/xinh gai 1.jpg" data-lightbox="example-set"><img class="example-image" src="../images/landings/jolo/xinh gai 1.jpg" alt="image-1" /></a>
      </div>
    </div>

    <div class="feedbacks tab">
      <div class="course-details-comments-list">

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/vy.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/viratxinhdep">Nhật Vy</a></div>
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
                <p>Nhân Viên vô cùng thân thiện, thầy giáo rất cool. Thích nhất cái góc chỗ kệ sách có rất nhiều sách hay, hơn nữa lúc noà cũng có bánh kèo , trà và cafe. Sau mỗi giờ học mình thường hay ra góc đó ngồi cafe và trai đổi bài với bạn bè</p>
                <p>Thật sức rất thích jolo</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/trang.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/nht1211?ref=br_rs">Trang Nguyen</a></div>
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
                <p>Mình rất thích môi trường học tập ở đây, Cực kì thoải mái và gần gũi. Nó giúp mình hứng thú hơn trong việc học tiếng anh, dù mình là dân khối A, Trước đây không hề thích học tiếng anh.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/minh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="">Minh Thu</a></div>
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
                <p>Jolo là một lựa chọn tuyệt vời để chinh phục Anh Ngữ và cũng là nơi để trải nghiệm sự chuyên nghiệp, tận tình, nhiệt huyết của đội ngũ giáo viên và nhân viên. Đến với jolo việc học trở nên thú vị hơn bởi cách giảng dạy phong phú, hấp dẫn của các thầy cô. Học viên luôn nhận được sự quan tâm sâu sắc và hỗ trợ hết mình của trung tâm về chất lượng và học, những nhu cầu và mong muốn luôn được đáp ứng tốt nhất.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/truc.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/truc.tran.543792">Thanh Trúc</a></div>
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
                <p>MÌnh có biết Jolo English vì trung tâm khá nổi về IELTS ở hà nội. Trong TP.HCM này thì mới chỉ mở 1 chi nhánh ở VŨ Văn Tần. Không gian thì hởi nhỏ, cơ sở vật chất tương đối ổn, các hị nhân viên cũng nhiệ titnhf. Còn về kiến thức thì thật sự không hối hận khi học được ở đây.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/ho.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/drothy.ho">Hồ Vy</a></div>
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
                <p>Giáo viên ở đây rất có kinh nghiệm luôn bạn ơi. MÌnh học thầy Jacques, Thầy đến từ canada và có nhiều năm kinh nghiệm giảng dạy ở Đài Loan và Thái Lan. Thầy luôn tạo không khí thoải mái trong lớp học và rất tận tình quan tâm đến từng học viên. Thực sự học ở đây rất tuyệt vời.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/huy.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/huy.phamduc.64">Phạm Đức Huy</a></div>
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
                <p>Mình thích Jolo lắm vì không gian đẹp và chất lượng giảng dạy ở đây quá tuyệt vời luôn! Học ở đây, mình không chỉ có rèn grammar một cách khô khan như hồi phổ thông mà còn được train toàn diện hết 4 kỹ năng luôn, Đặc biệt là có môi trường giao tiếp với người bản xứ nữa nên speaking và listening của mình đã được cải thiện rõ rệt.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/anh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/xinchaocacbanminhlaanh">Trương Ngọc Ánh</a></div>
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
                <p>Sau khi học xong 1 khoá IELTS ở đây mình cảm thấy trình của mình lên hẳn. Đặc biệt là kỹ năng listening và spearking. MÌnh không còn thấy 'ngượng' khi nói và mình nói ngày càng fluency. </p>
                <p>Về writing thì mình nghĩ các bạn nên chủ động tựo học, làm bài tập đến lớp để thầy chữa, vì cái này phải tự học mới lên trình nhanh được. những cũng không thể bỏ qua một người thầy rất tận tâm. Thầy chỉ cho mình từng lỗi sai và cách dùng từ cho đúng. </p>
                <p>Reading thì tụi mình học theo sách IELTS ở trung tâm rất đa dạng và phong phú. và lượng thông tin rất bổ ích. </p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/nhat.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/vynhat1991">Vy Phạm</a></div>
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
                <p>Nhân Viên vô cùng thân thiện, thầy giáo rất cool. Thích nhất cái góc chỗ kệ sách có rất nhiều sách hay, hơn nữa lúc noà cũng có bánh kèo , trà và cafe. Sau mỗi giờ học mình thường hay ra góc đó ngồi cafe và trai đổi bài với bạn bè</p>
                <p>Thật sức rất thích jolo</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->

        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/linh.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/le.maihuyenlinh">Lê Mai Huyền Linh</a></div>
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
                <p>Thực sự rất ấn tượng với phương pháp giảng dạy của trung tâm. Vô cùng chất lượng và hiệu quả. Cả giảng viên và nhân viên đều rất nhiệt tình vui vẻ. Nhất định sẽ recommend cho bạn bè :3</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->



        <div class="course-details-comment-individuals more-item-box">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar">
                <img src="../images/landings/jolo/students/thu.jpg" alt="" class="full">
              </div>
              <div class="course-details-comment-date-username">
                <div class="course-details-comment-username"><a href="https://www.facebook.com/anhthudoancao?ref=br_rs">Đoàn Cao Anh Thư</a></div>
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
                <p>Hồi bước vô Jolo thấy hơi bất ngờ, tại trung tâm nhỏ quá. mình còn tưởng là thêm 1 tầng nữa kìa ;)) </p>
                <p>Nhỏ nhỏ mà có vũ, từ khi học ở đây thấy đỡ ghét tiếng anh hơn hẳn học cũng vô đầu nhiều, thấy không khó như mình nghĩ</p>
                <p>Má má ơi anh thầy cool quá không chịu nổi huhu.</p>
              </div>

            </div>
          </div>
        </div><!-- .course-details-comment-individuals -->





    </div>

    </div>
  </div>
</div>

@endsection
