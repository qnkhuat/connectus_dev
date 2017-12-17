@extends('ad.layouts.master')

@section('top_css')
<!-- Plugins css-->
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="/backend/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
<style>
form {width: 100%;}
.width-60 {width: 60px;}
.mr-t-10 {margin-top: 10px;}
.btn-group {width: 300px;}
.pointer {cursor: pointer;}
.float-right {float: right;}
ul.pagination li {
  padding: 7px;
  margin: 1px;
  border-radius: 3px;
  border: 1px solid #ddd;
}
ul.pagination li.active {
  background: #2bbbad;
  border-color: #2bbbad;
}
ul.pagination li.active span {background: transparent; color: #fff;}
.min-height-250 {min-height: 250px;}
</style>
@endsection

@section('css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">Courses</li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Courses</h4>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    @if (Session::has('messages'))
    	<div class="alert alert-{{ Session::get('messages')["type"] }}">
    		<div class="container">
    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    			<strong>{{ Session::get('messages')["content"] }}</strong>
    		</div>
    	</div>
    @endif
  </div>
  <?php
    $perpage = Request::get("perpage");
    $name = Request::get("name");
    $publish = Request::get("publish");
  ?>
  <div class="col-sm-12">
    <form action="" method="get">
      <div class="row">
      <div class="col-sm-3">
        <span>Record</span>
        <select name="perpage" class="selectpicker" data-style="btn-default btn-custom">
            <option value="5" {{ $perpage == "5" ? "selected" : "" }}>5 record per page</option>
            <option value="10" {{ $perpage == "10" ? "selected" : "" }}>10 record per page</option>
            <option value="20" {{ $perpage == "20" ? "selected" : "" }}>20 record per page</option>
            <option value="50" {{ $perpage == "50" ? "selected" : "" }}>50 record per page</option>
        </select>
      </div>

      <div class="col-sm-3">
        <span>Name</span>
        <input name="name" type="text" class="form-control" value="{{$name}}">
      </div>

      <div class="col-sm-3">
        <span>Publish</span>
        <select name="publish" class="selectpicker" data-style="btn-default btn-custom">
          <option value=""></option>
          <option value="1" {{ $publish == "1" ? "selected" : "" }}>yes</option>
          <option value="0" {{ $publish == "0" ? "selected" : "" }}>no</option>
        </select>
      </div>

      <div class="col-sm-3">
        <div style="margin-top: 22px;"></div>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Filter</button>
        <a href="/admin/courses">Reset</a>
      </div>
    </div>
    </form>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive min-height-250">
      <table class="table table-hover table-bordered">
        <tr class="text-center">
          <th>#</th>
          <th>User</th>
          <th>Name</th>
          <th>Description</th>
          <th>Publish</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>Manage</th>
        </tr>

        @ foreach ($courses as $key => $course)
        <tr>
          <td>{ $key + 1 }</td>
          <td>
            <a href="/admin/users/profile/{$course->user_id}">
              {$course->user->name}
            </a>
          </td>
          <td>{$course->name}</td>
          <td>{$course->description}</td>
          <td>
            !! $course->publish ? "<span class='label label-table label-success'>yes</span>" : "<span class='label label-table label-inverse'>no</span>" !!
          </td>
          <td>{$course->created_at}</td>
          <td>{$course->updated_at}</td>
          <td>
            <a href="/admin/courses/edit/{$course->id}">
              <button type="button" class="btn btn-xs btn-warning btn-rounded waves-effect waves-light">Edit</button>
            </a>
            <button type="button" onclick="destroyUser({$course->id}, '{$course->name}')" class="btn btn-xs btn-danger btn-rounded waves-effect waves-light">Delete</button>
          </td>
        </tr>
        @ endforeach
      </table>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-8">
        {$courses->appends([
          'perpage' => $perpage,
          'name' => $name
        ])->links()}
      </div>
      <div class="col-md-4">
        Categories total: {$courses->total()}
      </div>
    </div>

  </div>
</div>
@endsection

@section('js')
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>
<script src="/backend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/switchery/js/switchery.min.js"></script>
<script src="/backend/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<script src="/backend/assets/plugins/moment/moment.js"></script>
<script src="/backend/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="/backend/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="/backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/backend/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="/backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/backend/assets/pages/jquery.form-pickers.init.js"></script>

<!-- Bootsrap table js -->
<script src="/backend/assets/plugins/bootstrap-table/js/bootstrap-table.js"></script>
<script src="/backend/assets/pages/jquery.bs-table.js"></script>

<script>

  $.ajaxSetup({
    headers: { 'X-CSRF-Token' : '{{csrf_token()}}' }
  });
  function destroyUser(course_id, name) {
    let deleteConfirm = confirm("Do you want delete " + name + "?")
    if(deleteConfirm) {
      $.ajax({
        url : "{{ url('/admin/courses/destroy') }}",
        type : "post",
        dataType:"text",
        data : {
          id: course_id
        },
        success : function (result){
          location.reload()
        },
          error: function(result) {
              alert("Có lỗi xảy ra!");
          }
      });
    }
  }
</script>
@endsection
