<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="/images/header/logo_transparent.png">
    <title>ConnectUs - Học nhiều hơn,tiết kiệm hơn</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="/backend/assets/js/modernizr.min.js"></script>

    <!------------FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- LIBARIES -->
    <link rel="stylesheet" href="css/drooltip.css" media="screen" >
    <link rel="stylesheet" href="css/swiper.min.css" media="screen" >


    <!------------CSS -->
    <link rel="stylesheet" href="css/reset.css" media="screen" >
    <link rel="stylesheet" href="css/common.css" media="screen" >
    <link rel="stylesheet" href="css/variables.css" media="screen" >
    <link rel="stylesheet" href="css/header.css" media="screen" >
    <link rel="stylesheet" href="css/courses.css" media="screen" >
    <link rel="stylesheet" href="css/main.css" media="screen" >
    <link rel="stylesheet" href="css/footer.css" media="screen" >
    <link rel="stylesheet" href="css/responsive.css" media="screen" >
    <link rel="stylesheet" href="css/single.css" media="screen" >
  </head>
  <body>
    <!-- #login-popup -->
    <div id="menu">
      <div id="login-popup" class="fixed-top full">
        <div class="modal-background full"></div>
        <div class="modal-dialogs">
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
      </div>
      <!-- //#login-popup -->

      <!-- #menu -->
      <div id="menu-desktop" class="padding-0-15 df fixed-top">
        <div class="menu-left">
          <a href="" class="blog">Blog</a>

        </div>
        <div class="middle">
          <a href="" class="logoBrand"><img src="/images/header/logo_transparent.png" class="full" alt="logo"></a>
        </div>

        <div class="menu-right">
          <p class="login-button">Đăng nhập</p>
          <div class="cart">
            <a href="" class="fa fa-shopping-cart cart-icon"></a>
            <span class="cart-count"><span class="cart-count-items">1</span> khoá</span>
            <div class="cart-popup"></div>

          </div>
        </div>
      </div>
      <!-- //#menu-desktop -->

      <!-- #menu-mobile -->
      <div id="menu-mobile">

        <div class="menu-logo df fixed-bottom">
          <img src="/images/header/logo_small.png" alt="logo" class="full menu-logo-button" title=".menu-mobile-popup">
          <div id="menu-mobile-popup" class="menu-mobile-popup text-center">
            <div class="menu-mobile-popup-wrap">
              <div class="menu-mobile-popup-first-sence">
                <a class="menu-mobile-popup-blog">BLOG</a>
                <a class="menu-mobile-popup-blog">Khoá học Tiếng Anh</a>
                <div class="menu-mobile-popup-account">Quản lý tài khoản</div>
                <div class="menu-mobile-popup-login">Đăng nhập</div>
              </div>
              <div class="menu-mobile-popup-second-sence">
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
                </div><!-- //.user-infomations -->
              </div><!-- //.login-tab -->
            </div><!-- //.menu-mobile-popup-second-sence -->
            </div>
          </div><!--// .menu-mobile-popup -->
        </div>
        <div class="cart">
          <a href="" class="fa fa-shopping-cart cart-icon "></a>
          <h1 class="cart-count"><p class="cart-count-items">1</p></h1>
        </div>
      </div><!-- #menu-mobile -->

    </div><!-- //#menu -->

    <!-- #course-details -->
    <div id="course-details">
      <!-- .course-details-headline -->
      <div class="course-details-headline">
        <div class="container course-details-box">
          <div class="course-details-info-left">
            <h1 class="course-info-title">Học tiếng anh cho người nghèo</h1>
            <p class="course-info-intro-summary">Người giàu cũng học được</p>
            <div class="course-info-rating">
              <div class="best-seller-tag best-seller-non-fix"><span>Best seller</span></div>
              <div class="stars-rating-static">
                <span class="star-rating-static-first fa fa-star">
                    <span class="star-rating-static-second fa fa-star" style="width: 85%;"></span>
                </span>
              </div>
              <div class="course-info-enrolled-student"><span class="course-info-enrolled-student-count">100</span> Học viên đã đăng ký khoá học này</div>
            </div>

            <div class="course-info-centre">Trung tâm : <span class="course-info-centre-name">KOS</span></div>
          </div><!-- //.course-details-info-left -->

          <div class="course-details-info-right">
            <div class="course-details-feature-image">
              <img src="/images/courses/english/English-courses 1.png" alt="" class="full">
            </div>
            <div class="course-details-info-right-content">
              <div class="course-price-box">
                <span class="course-price-origin">5.000.000</span>
                <span class="course-price-sale">4.000.000</span>
              </div>
              <div class="addcart-box"><a href="" class="addcart-button">Đăng ký</a></div>
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
                        <div class="swiper-slide"><img class="full" src="/images/header/banner.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner2.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner2.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner2.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="full" src="/images/header/banner2.jpg" alt=""></div>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next next-button pagination-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev prev-button pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                </div>
              </div>
              <div class="course-details-info-left-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A excepturi cumque tenetur illo, quisquam quibusdam atque accusamus placeat fugiat vitae dignissimos dolorem deserunt nesciunt, explicabo qui minus labore saepe magnam corporis delectus soluta repellendus sint ad! Voluptate, consequuntur molestias, dignissimos iste, quis commodi quod aliquam sit nam voluptatem saepe, officia dolor ullam atque. Adipisci soluta vero aliquam culpa quisquam cumque optio, delectus architecto deleniti eos velit consectetur enim vitae quod officia magni. Perspiciatis, aliquid? Praesentium ab voluptates autem maxime corrupti. Distinctio deserunt recusandae ducimus autem fuga voluptates et repellat, fugiat. Nulla incidunt autem eius temporibus eos quod molestias deserunt et quibusdam minus officiis ducimus, aliquid odio eveniet beatae, libero doloremque quisquam maxime quos provident explicabo. Animi, reiciendis iusto tenetur perferendis excepturi vel commodi, soluta fugiat nam pariatur laudantium, quasi aspernatur in quisquam mollitia magni dolor provident architecto autem dolorem natus praesentium. Dignissimos voluptate officia provident repellendus ratione voluptatibus eligendi voluptatum aspernatur, nesciunt maxime sequi veniam nulla quae laboriosam optio iusto? Ipsum adipisci, voluptates placeat maxime provident! Hic perferendis saepe maiores eum qui eligendi, architecto repellendus animi dolor enim impedit quam nemo neque, tempore laudantium ipsum necessitatibus minus quibusdam, minima consequuntur obcaecati! Fugit quo maxime expedita architecto similique dolore repellat accusamus molestias natus. Dolor possimus veniam enim voluptates, iure, sit animi adipisci laudantium modi, ipsum fugit maiores illo ex accusantium voluptate! Deleniti error, explicabo delectus ipsum rerum mollitia optio sunt possimus, esse fuga numquam repudiandae illum inventore quos, autem cumque ut et sed. Sapiente eligendi molestiae quis voluptatum consectetur quaerat neque minima accusamus saepe dignissimos. Facilis nemo, hic veritatis neque aspernatur mollitia distinctio nihil, optio nulla pariatur ipsum architecto repudiandae, ducimus voluptate labore quia! Eos enim ad, necessitatibus, facere assumenda dolor veniam, quod, inventore animi quas fugiat aperiam iusto modi eveniet sit ex minima tempore cumque officiis. Repellendus ea quam non, impedit. Ullam voluptatum perspiciatis praesentium excepturi libero vero vitae, earum. Similique, cumque, perspiciatis! Necessitatibus sequi, tempora inventore, animi eligendi fuga, minus nostrum dolor voluptatum sit similique! Consectetur culpa aspernatur quaerat, minima voluptatum tempora. Earum voluptatem aliquam ipsum mollitia corporis quod velit quia accusantium quaerat, natus fugit magnam blanditiis modi reprehenderit cumque, nesciunt molestias vero eos dolores soluta quo ab architecto vel obcaecati exercitationem. Deserunt adipisci incidunt voluptate cupiditate at laborum quas eos molestias, tenetur. Quos quod, sequi deserunt aliquid nihil facilis numquam est esse voluptates beatae ad vero. Totam veritatis saepe quibusdam perferendis maxime recusandae facere sunt! Veniam rem, amet saepe non sint at architecto, soluta ad provident, accusamus beatae. Similique sunt perspiciatis nobis? Rerum enim tenetur praesentium voluptatem beatae recusandae dicta expedita quod quas eum maxime voluptas inventore architecto harum hic ducimus, corporis consequuntur dolor voluptatum necessitatibus pariatur suscipit deserunt aspernatur? Unde ipsa magnam, eum omnis, repudiandae delectus. Repudiandae aliquam debitis numquam qui nesciunt quod ea quo alias quibusdam mollitia sapiente, consequuntur vitae est, voluptatum soluta. Soluta quaerat voluptatem quibusdam maiores magnam voluptates praesentium, ipsum doloremque aperiam qui minus esse dicta, culpa, est voluptatum aut reprehenderit libero quidem adipisci sunt, harum dolorum. Minus in unde eaque repudiandae saepe. Corrupti ad illum repudiandae cum aspernatur blanditiis deleniti, ex delectus excepturi asperiores, quia voluptate laborum minima, dolor obcaecati tempore. Error quo debitis odit accusantium adipisci aliquam praesentium rerum amet, esse! Quos modi aut ut voluptatem laudantium repudiandae, reprehenderit sequi ratione earum odit nam similique laborum voluptatibus doloremque architecto obcaecati error, temporibus beatae sint distinctio officia optio odio? At voluptatum perferendis placeat, velit! Qui culpa earum perferendis commodi assumenda numquam eaque rem, asperiores velit veritatis sed architecto minima debitis odio eligendi dolore ipsam reiciendis dolor illo. Rerum porro ratione alias pariatur voluptates placeat esse, voluptate odit quae dicta, minus nostrum mollitia commodi deleniti, repudiandae numquam. Esse amet, iste non officiis ipsum distinctio fugit sit. Quidem, nostrum. Minima iste obcaecati repellat sapiente odit reprehenderit magnam tempora itaque tempore quod aliquam et illo fugit inventore quisquam eos aut, possimus quam, unde amet delectus. Ullam a laboriosam temporibus, eum inventore hic. Ducimus eaque cumque aut deleniti necessitatibus ex error reprehenderit vitae culpa laborum saepe omnis neque, similique, numquam obcaecati minus nisi alias. Expedita nam, non molestias deleniti fugit dolor sapiente aut earum eveniet quisquam? Deleniti nemo, enim! Quae, repellat! Asperiores, consequatur cumque autem consequuntur et reiciendis ipsam nisi alias modi magnam quasi sunt. Corrupti, minus ex soluta aut tempora adipisci, molestias distinctio vero expedita temporibus. Suscipit vero, beatae dolorem id tempora eum neque, itaque qui deserunt error, necessitatibus, debitis nemo? Aut incidunt fugiat numquam, fugit dolor ipsum aliquid neque ab non harum velit dolores iusto, odit. At ad et vel aspernatur dignissimos nihil repellendus, inventore enim reiciendis excepturi, eum pariatur! A, nihil! Laboriosam quae officiis nam consectetur eius, architecto facilis. Iste expedita, sit harum iusto, accusantium obcaecati labore alias suscipit aperiam! Asperiores illo cupiditate quidem consequuntur, ipsa quae id, pariatur possimus facere optio distinctio. Unde laboriosam soluta, voluptatibus nostrum quas fugiat est omnis maiores enim, explicabo veritatis excepturi. Nulla repudiandae, vitae ad quisquam ea, aperiam voluptate ullam a odit veritatis, provident praesentium in. Eos delectus accusamus laudantium cumque sint ab nesciunt odit ipsa molestias at odio adipisci excepturi doloremque molestiae natus magni, magnam! Quae iure atque labore ex explicabo consequatur tenetur sapiente. Tempora laborum quos, ad, deleniti reiciendis nobis similique earum, quia dignissimos ducimus dolor tempore, minus placeat! At veniam dolorum, maxime animi repellendus voluptatibus quasi rem ratione laboriosam, impedit unde. Adipisci explicabo laborum accusamus. Laudantium magnam voluptatem sunt, architecto officiis, porro aut quia delectus perferendis iste provident eum possimus, minima aliquam maxime veritatis magni eligendi! Doloribus vero aperiam, ipsa inventore veritatis cumque sed reprehenderit corrupti eius perferendis magnam, perspiciatis sit natus assumenda, quam neque beatae, unde expedita? Dicta placeat suscipit dignissimos enim incidunt quas consequatur non rerum, atque fugiat fuga tenetur, provident consequuntur recusandae modi voluptatum. Explicabo quod nisi deleniti natus porro odit? Maiores, eius numquam earum adipisci et in excepturi, temporibus tempora iusto accusamus laudantium repellendus porro exercitationem consequuntur nisi expedita culpa accusantium cum delectus reiciendis commodi soluta sequi debitis. Porro veritatis illum deserunt a voluptatum? Quidem mollitia dignissimos inventore magnam laudantium architecto vitae quam, labore, corrupti et dicta, ducimus expedita recusandae suscipit.
              </div>
            </div>
            <!-- //.course-details-info-left -->
            <div class="course-details-info-right"></div>
            <!-- //.course-details-info-right -->
          </div>
        </div>
      </div>
      <!-- //.course-details-main -->

      <!-- .course-details-comment -->
      <div class="course-detials-comment-box">
        <div class="course-details-comment-input">

        </div>

        <div class="course-details-comments-list">
          <div class="course-details-comment">
            <div class="course-details-comment-left">
              <div class="course-details-comment-avatar"></div>
              <div class="course-details-comment-username"></div>
            </div>
            <div class="course-details-comment-right">
              <div class="course-details-comment-stars">

              </div>
              <div class="course-details-comment-content">
                <p>>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ullam odio iusto doloremque tempore eum. Expedita voluptate corporis exercitationem beatae quas inventore eveniet iusto sint. Obcaecati rem quia natus accusamus.</p
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //.course-details-comment -->

    </div>
    <!-- //#course-details -->


    <!-- //#footer -->
    <footer class="text-center">
      <p class="copyright">© 2017 ConnectUs. All rights reserved</p>
      <a class="facebook-icon" href="https://www.facebook.com/connectus.vn/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </footer>
    <!-- //#footer -->


    <script src="/backend/assets/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js"></script>

    <script src="js/header.js"></script>
    <script src="/js/drooltip.src.js"></script>
    <script src="js/popup-item.js"></script>
    <script src="js/courses.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/single.js"></script>
</body>
</html>


<!--FRONT-END CREATED BY: QUANG NGOC-->
<!--EMAIL: qn.khuat@gmail.com-->
