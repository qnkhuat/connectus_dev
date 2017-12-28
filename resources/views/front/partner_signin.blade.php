@extends('front.layout')

@section('latter_css')
<link rel="stylesheet" href="/css/partner_signin.css" media="screen" >
@endsection

@section('business_form')

<div class="partner_signin">
  <h3>Tham gia ConnectUs để đón nhận học viên mỗi ngày</h3>
  <div class="modal-background-partner"></div>
  <form class="partner_signin_form" action="" method="post">
    <p>Trung tâm:</p>
    <input type="text" name="" placeholder="Trung tâm ABC">
    <p>Email liên hệ:</p>
    <input type="email" name="" placeholder="abc@abc.com">
    <p>Số điện thoại liên hệ:</p>
    <input type="phone" name="" placeholder="0123456789">
    <p>Người đại diện:</p>
    <input type="text" name="" placeholder="Nguyễn Văn An">
    <p>Nội dung:</p>
    <input type="text" name="" placeholder="Trung tâm ABC">
    <button type="submit">Gửi</button>
  </form>
</div>
@endsection
