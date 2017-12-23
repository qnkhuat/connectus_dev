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
    <li class="breadcrumb-item active">Teachers</li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Teachers all</h4>
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
  ?>
  <div class="col-sm-12">
    <form action="" method="get">
      <div class="row">
      <div class="col-sm-2">
        <span>Record</span>
        <select name="perpage" class="selectpicker" data-style="btn-default btn-custom">
            <option value="5" {{ $perpage == "5" ? "selected" : "" }}>5 record per page</option>
            <option value="10" {{ $perpage == "10" ? "selected" : "" }}>10 record per page</option>
            <option value="20" {{ $perpage == "20" ? "selected" : "" }}>20 record per page</option>
            <option value="50" {{ $perpage == "50" ? "selected" : "" }}>50 record per page</option>
        </select>
      </div>

      <div class="col-sm-2">
        <div style="margin-top: 22px;"></div>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Filter</button>
        <a href="/admin/teachers/list-all">Reset</a>
      </div>
    </div>
    </form>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive min-height-250">
      <table class="table table-hover table-bordered">
        <tr class="text-center">
          <th>#</th>
          <th>Avatar</th>
          <th>Name</th>
          <th>Facebook</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Description</th>
          <th>Manage</th>
        </tr>

        @foreach($teachers as $key => $teacher)
        <tr>
          <td>{{$key + 1}}</td>
          <td>
            <img src="/img/avatar/{{ $teacher->avatar }}" alt="" class="width-60">
          </td>
          <td>{{$teacher->name}}</td>
          <td>{{$teacher->facebook}}</td>
          <td>{{$teacher->email}}</td>
          <td>{{$teacher->phone}}</td>
          <td>{{$teacher->description}}</td>
          <td>
            <a href="">
              <button type="button" class="btn btn-xs btn-info btn-rounded waves-effect waves-light">View</button>
            </a>
            <a href="/admin/teachers/edit/{{$teacher->id}}">
              <button type="button" class="btn btn-xs btn-warning btn-rounded waves-effect waves-light">Edit</button>
            </a>
            <button type="button" onclick="destroyTeacher({{$teacher->id}}, '{{$teacher->name}}')" class="btn btn-xs btn-danger btn-rounded waves-effect waves-light">Delete</button>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-8">
        {{$teachers->appends([
          'perpage' => $perpage
        ])->links()}}
      </div>
      <div class="col-md-4">
        Teachers total: {{$teachers->total()}}
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
  function destroyTeacher(teacher_id, name) {
    let deleteConfirm = confirm("Do you want delete " + name + "?")
    if(deleteConfirm) {
      $.ajax({
        url : "{{ url('/admin/teachers/destroy') }}",
        type : "post",
        dataType:"text",
        data : {
          id: teacher_id
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
