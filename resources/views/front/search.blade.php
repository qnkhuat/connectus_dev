@extends('front.layout')

@section('latter_js')
  <script src="js/checkbox.js"></script>
@endsection


@section('latter_css')
<link rel="stylesheet" href="css/search.css" media="screen" >

@endsection

@section('header-bar')

  <div class="header-bar">
    <div class="container">
      <h1 class="header-bar-topic">Tìm kiếm</h1>
    </div>
  </div>

@endsection


@section('search_section')
<div class="container">
  <form class="" action="" method="get">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="search-bar">
      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Khoá học <span class="caret"></span></button>
        <ul class="dropdown-menu">
        @foreach($couseType as $type)
        <li><a href="#" class="small" data-value="{{$type->id}}" tabIndex="-1"><input name="courseTypes[]" {{ in_array($type->id, $pCouseType) ? "checked" : "" }} value="{{$type->id}}" type="checkbox"/>{{$type->name}}</a></li>
        @endforeach
        </ul>
      </div>

      <div class="button-group ielts-target hidden">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Mục tiêu <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input name="target_ielts" type="checkbox"/>Pre ielts</a></li>
          <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input name="target_ielts" type="checkbox"/>5.0-6.0</a></li>
          <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input name="target_ielts" type="checkbox"/>6.0-7.0</a></li>
          <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input name="target_ielts" type="checkbox"/>7.0-8.0</a></li>
          <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input name="target_ielts" type="checkbox"/>8.0-9.0</a></li>
        </ul>
      </div>

      <div class="button-group toeic-target hidden">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Mục tiêu <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input name="taget_toieic" type="checkbox"/>Pre toeic</a></li>
          <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input name="taget_toieic" type="checkbox"/>250-500</a></li>
          <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input name="taget_toieic" type="checkbox"/>500-750</a></li>
          <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input name="taget_toieic" type="checkbox"/>750-990</a></li>
        </ul>
      </div>

      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Địa điểm <span class="caret"></span></button>
        <ul class="dropdown-menu">
          @foreach($districts as $district)
          <li><a href="#" class="small" data-value="{{$district->key}}" tabIndex="-1"><input name="districts[]" {{ in_array($district->key, $pDistricts) ? "checked" : "" }} value="{{$district->key}}" type="checkbox"/>{{$district->name}}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Học phí <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#" class="small" data-value="0-1000000" tabIndex="-1"><input name="tuition" {{ $pTuition == "0-1000000" ? "checked" : "" }} value="0-1000000" type="radio"/>< 1.000.000</a></li>
          <li><a href="#" class="small" data-value="1000000-4000000" tabIndex="-1"><input name="tuition" {{ $pTuition == "1000000-4000000" ? "checked" : "" }} value="1000000-4000000" type="radio"/>1.000.000-4.000.000</a></li>
          <li><a href="#" class="small" data-value="4000000-8000000" tabIndex="-1"><input name="tuition" {{ $pTuition == "4000000-8000000" ? "checked" : "" }} value="4000000-8000000" type="radio"/>4.000.000-8.000.000</a></li>
          <li><a href="#" class="small" data-value="8000000-12000000" tabIndex="-1"><input name="tuition" {{ $pTuition == "8000000-12000000" ? "checked" : "" }} value="8000000-12000000" type="radio"/>8.000.000-12.000.000</a></li>
          <li><a href="#" class="small" data-value="12000000-1000000000" tabIndex="-1"><input name="tuition" {{ $pTuition == "12000000-1000000000" ? "checked" : "" }} value="12000000-1000000000" type="radio"/>> 12.000.000</a></li>
        </ul>
      </div>

      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Số học viên 1 lớp <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#" class="small" data-value="1-1" tabIndex="-1"><input name="student_per_class" value="1-1" {{ $pStudentPerClass == "1-1" ? "checked" : "" }} type="radio"/>1:1</a></li>
          <li><a href="#" class="small" data-value="1-4" tabIndex="-1"><input name="student_per_class" value="1-4" {{ $pStudentPerClass == "1-4" ? "checked" : "" }} type="radio"/>1-4</a></li>
          <li><a href="#" class="small" data-value="4-8" tabIndex="-1"><input name="student_per_class" value="4-8" {{ $pStudentPerClass == "4-8" ? "checked" : "" }} type="radio"/>4-8</a></li>
          <li><a href="#" class="small" data-value="8-12" tabIndex="-1"><input name="student_per_class" value="8-12" {{ $pStudentPerClass == "8-12" ? "checked" : "" }} type="radio"/>8-12</a></li>
          <li><a href="#" class="small" data-value="12-20" tabIndex="-1"><input name="student_per_class" value="12-20" {{ $pStudentPerClass == "12-20" ? "checked" : "" }} type="radio"/>12-20</a></li>
          <li><a href="#" class="small" data-value="20-20000" tabIndex="-1"><input name="student_per_class" value="20-20000" {{ $pStudentPerClass == "20-20000" ? "checked" : "" }} type="radio"/>> 20</a></li>
        </ul>
      </div>

      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Giáo viên <span class="caret"></span></button>
        <ul class="dropdown-menu">
          @foreach($teacherTypes as $key => $type)
          <li><a href="#" class="small" data-value="{{$key}}" tabIndex="-1"><input name="teacher_type" {{$pTeacherType == $key ? "checked" : ""}} value="{{$key}}" type="radio"/>{{$type}}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Thời gian học <span class="caret"></span></button>
        <ul class="dropdown-menu">
          @foreach($learnTime as $key => $time)
          <li><a href="#" class="small" data-value="{{$key}}" tabIndex="-1"><input name="time" {{$pLearnTime == $key ? "checked" : ""}}  value="{{$key}}" type="radio"/>{{$time}}</a></li>
          @endforeach
        </ul>
      </div>

     <button type="submit" class="submit-button">Lọc</button>

  </div>
   </form>
</div>
@endsection



@section('search_course')
<div class="course-result">
  <div class="container">

    @foreach($courses as $course)
      @include('front.components.single_course_replace')
    @endforeach
    <div class="more-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
  </div>
</div>
<div id="course-popup-mobile">
  <div class="course-popup-mobile-content"></div>
  <div class="wrapup-button">
    <i class="fa fa-chevron-up wrapup-button-up" aria-hidden="true"></i>
    <i class="fa fa-chevron-down wrapup-button-down" aria-hidden="true"></i>
  </div>
</div>
@endsection
