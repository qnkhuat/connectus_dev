<div class="login-tab">

  <div class="login-facebook login-tab-button">
    <div id="mess-if-not-loged" style="display: none;"></div>
    <a href="/redirect/facebook?previousUrlFbLogin={{Request::fullUrl()}}" class="df"><i class="fa fa-facebook" aria-hidden="true"></i>Đăng nhập bằng Facebook</a>
  </div>

  <div class="signup-button login-tab-button">
    <p class="df"><i class="fa fa-rocket" aria-hidden="true"></i> Đăng ký tài khoản</p>
  </div>

  <div class="signin-button login-tab-button">
    <p class="df"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</p>
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
  @yield('addition_login')
</div><!-- .login-tab -->
