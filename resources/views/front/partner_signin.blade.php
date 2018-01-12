@extends('front.layout')

@section('latter_css')
<link rel="stylesheet" href="/css/partner_signin.css" media="screen" >
@endsection

@section('business_form')

<div class="partner_signin">
  <h3>Tham gia ConnectUs để đón nhận học viên mỗi ngày</h3>
  <div class="modal-background-partner"></div>
  <form class="partner_signin_form" action="" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>Trung tâm:</p>
    <input type="text" name="name" placeholder="Trung tâm anh ngữ">
    <p>Email liên hệ:</p>
    <input type="email" name="email" placeholder="contact@example.com">
    <p>Số điện thoại liên hệ:</p>
    <input type="number" name="phone" placeholder="0123456789">
    <p>Người đại diện:</p>
    <input type="text" name="representative" placeholder="">
    <p>Nội dung:</p>
    <textarea name="message" style="width: 100%; height: 100px;"></textarea>
    <button type="submit">Gửi</button>
  </form>
</div>
@endsection
