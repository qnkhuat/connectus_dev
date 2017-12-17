<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test đăng nhập fắc búc</title>
    <meta name="twitter:" content="">
  </head>
  <body>
    {!! Auth::check() ? '<a href="/logout">Logout</a><br />' : '<a href="redirect/facebook">FB Login</a><br />' !!}


    <?php
    if (Auth::check()) {
        $user = $user = auth()->user();
    ?>
    <img src="{{$user->avatar}}" alt="" style="width: 100px;">
    <p>{{$user->name}}</p>
    <?php } else { ?>
      <br />
      bạn chưa đăng nhập
    <?php } ?>
  </body>
</html>
