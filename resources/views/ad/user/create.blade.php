@extends('ad.layouts.master')

@section('top_css')
<!-- Plugins css-->
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="/backend/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
<link href="/backend/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

<link href="/backend/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
<link href="/backend/assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<link href="/backend/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<style>
form {width: 100%;}
.mr-t-10 {margin-top: 10px;}
.btn-group {width: 300px;}
.pointer {cursor: pointer;}
.float-right {float: right;}
</style>
@endsection

@section('css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="/hi">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="/hi/users">Users</a></li>
    <li class="breadcrumb-item active"><a href="/hi/users/create">Create</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Create user</h4>
@endsection

@section('content')
<div class="row">
  <form action="/hi/users/create" method="post" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="col-md-12">
      <div class="card m-b-20">
          <!-- card-block -->
          <div class="card-block">

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
              <div class="col-md-12 col-ls-12 col-sm-12">
                <p class="mr-t-10"><strong>User type: <span class="color-red">*</span></strong></p>
                <div class="input-group w-300">
                  <select name="group" id="select-group" class="selectpicker m-b-0" data-style="btn-success btn-custom">
                      @foreach ($userTypes as $type)
                      <option value="{{$type}}"><span class="md md-check"></span>&nbsp;{{$type}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Avatar:</strong></p>
                <div class="input-group">
                    <input type="file" name="avatar" class="form-control" data-buttonname="btn-white">
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
                    <input type="text" name="name" id="input-name-page" class="form-control" placeholder="Name between 1 - 255 chars length" required=""  data-parsley-length="[1,255]">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Email: <span class="color-red">*</span></strong></p>
                <div class="input-group">
                    <span class="input-group-btn" id="copy-link-file-to-clipboard">
                        <button type="button" class="btn waves-effect waves-light btn-success">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input type="email" name="email" id="input-name-page" class="form-control" placeholder="Email between 1 - 255 chars length" required=""  data-parsley-length="[1,255]">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Phone number: <span class="color-red">*</span></strong></p>
                <div class="input-group">
                    <span class="input-group-btn" id="copy-link-file-to-clipboard">
                        <button type="button" class="btn waves-effect waves-light btn-success">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input type="number" name="phone" id="input-name-page" class="form-control" placeholder="Phone number between 1 - 255 chars length" required=""  data-parsley-length="[1,255]">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Gender: <span class="color-red">*</span></strong></p>
                <div class="input-group w-300">
                  <select name="gender" class="selectpicker m-b-0" data-style="btn-success btn-custom">
                      @foreach($genders as $gender)
                      <option value="{{$gender}}"><span class="md md-check"></span>&nbsp;{{$gender}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Birth day:<span class="color-red">*</span></strong></p>
                <!-- <div class="input-group">
                    <span class="input-group-addon bg-custom b-0"><i class="md md-event-note text-white"></i></span>
                    <input type="date" required name="birth" placeholder="dd/mm/yyyy">
                </div> -->

                <div class="form-group">
                  <div>
                      <div class="input-group">
                          <span class="input-group-addon bg-custom b-0"><i class="md md-event-note text-white"></i></span>
                          <input type="text" name="birth" class="form-control" placeholder="yyyy/mm/dd" id="datepicker-autoclose">
                      </div><!-- input-group -->
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Website:</strong></p>
                <div class="input-group">
                    <span class="input-group-addon bg-custom b-0"><i class="fa fa-globe" style="color: #fff;"></i></span>
                    <input type="text" name="website" class="form-control" placeholder="website">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>Roles:</strong></p>
                  <div class="row">
                    @foreach ($roles as $role)
                      <div class="col-md-3">
                        <input type="checkbox" value="{{$role}}" class="role-user-group" id="role_{{$role}}" name="roles[]" data-plugin="switchery" data-color="#1AB394" data-secondary-color="#ED5565" />
                        <label for="role_{{$role}}" class="pointer">{{$role}}</label>
                      </div>
                    @endforeach
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>description:</strong></p>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>facebook page:</strong></p>
                <input type="text" name="fb_page" class="form-control" placeholder="facebook page">
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-md-12">
                <p class="mr-t-10"><strong>address:</strong></p>
                <div class="item-address">
                  <div class="input-group">
                      <textarea name="address[]" id="" cols="30" rows="10" class="form-control"></textarea>
                      <span class="input-group-btn" id="copy-link-file-to-clipboard" onclick="$(this).closest('.item-address').remove()">
                          <button type="button" class="btn waves-effect waves-light btn-warning">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                      </span>
                  </div>
                </div>

                <div id="more-address"></div>
                <div class="mr-t-10">
                  <button type="button" class="btn btn-info btn-rounded waves-effect waves-light float-right more-address">more</button>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="col-md-12">
                <div class="mr-t-10 text-center">
                  <button type="submit" class="btn btn-warning btn-rounded waves-effect waves-light">SAVE</button>
                </div>
              </div>
            </div>

          </div>
          <!-- /card-block -->
      </div>
  </div>
  </form>
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


<script>
  var defaultGroupRole = {!!$defaultGroupRole!!}
  var userGroup = "student"
  $(document).ready(function() {
    $(".more-address").click(function() {
      $('#more-address').append('<div class="mr-t-10"><div class="item-address"> <div class="input-group"> <textarea name="address[]" id="" cols="30" rows="10" class="form-control"></textarea> <span class="input-group-btn" id="copy-link-file-to-clipboard" onclick="$(this).closest(\'.item-address\').remove()"> <button type="button" class="btn waves-effect waves-light btn-warning"> <i class="fa fa-trash" aria-hidden="true"></i> </button> </span> </div></div></div>')
    })

    // selected role if user group changing
    setRolesChecked()
    $("#select-group").change(function() {
      setRolesChecked($(this).val())
    })
  })

  function setRolesChecked(userGroup = 'student') {
    $(".role-user-group").prop('checked', false)
    let roles = defaultGroupRole[userGroup]
    roles.forEach(function(value) {
      $("#role_" + value).prop('checked', true)
    })
  }
</script>
@endsection

<!-- php artisan make:migration create_articles_table --create="articles" -->
