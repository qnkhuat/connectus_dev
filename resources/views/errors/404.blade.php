@extends('front.layout')


@section('banner')
<img src="images/header/error.jpg" class="error" alt="">
<div class="content">
  <p>Sorry...<br>This page is sleeping!</p>
</div>
@endsection

@section('latter_css')
<link rel="stylesheet" href="/css/error.css" media="screen" >
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700" rel="stylesheet">
@endsection
