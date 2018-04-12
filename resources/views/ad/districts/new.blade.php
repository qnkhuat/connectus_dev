@extends('ad.layouts.master')

@section('top_css')
@endsection

@section('css')
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="/backend/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
<link href="/backend/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

<link href="/backend/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
<link href="/backend/assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<link href="/backend/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

<link href="/backend/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="/backend/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="/backend/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="/backend/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="/backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<style>
.mr-t-10 {margin-top: 10px;}
.pointer {cursor: pointer;}
.list-key-exits {display: none;}
</style>
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Districts</a></li>
    <li class="breadcrumb-item"><a href="#">Create</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Districts</h4>
@endsection

@section('content')
<div class="row">
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
</div>

<div class="row">
    <div class="col-md-12">
      <form action="/hi/districts/create" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="comment">
                        <img src="/img/avatar/{{$user->avatar}}" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">List key exits</a><span></span>
                                </div>
                            </div>
                        </div>

                        <div class="comment-body list-key-exits">
                            <div class="comment-text">
                                <div>
                                    @foreach($keys as $k)
                                    <span class="label label-table label-{{$labels[rand(0, 8)]}}">{{$k}}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="pull-right">
                            <span class="label label-success toggle-list-key-exits pointer">Toggle</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Key: <span class="color-red">*</span></strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="text" name="key" maxlength="1" id="input-name-page" class="form-control" placeholder="Only 1 chars length" required  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Name: <span class="color-red">*</span></strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="text" name="name" id="input-name-page" class="form-control" placeholder="Name between 1 - 255 chars length" required  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="mr-t-10 text-center">
              <button type="submit" class="btn btn-warning btn-rounded waves-effect waves-light">SAVE</button>
            </div>
            <p class="mr-t-10"></p>
          </div>
        </div>

      </form>
    </div>
</div>
@endsection

@section('js')
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


<script src="/backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="/backend/assets/plugins/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="/backend/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="/backend/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="/backend/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/backend/assets/pages/jquery.form-advanced.init.js"></script>


<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".toggle-list-key-exits").click(function(){
            $(".list-key-exits").slideToggle();
        })
    })
</script>
@endsection
