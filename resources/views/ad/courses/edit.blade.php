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
<style>
.mr-t-10 {margin-top: 10px;}
.pointer {cursor: pointer;}
</style>
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Courses</a></li>
    <li class="breadcrumb-item"><a href="#">Update</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Courses update</h4>
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
      <form action="/admin/courses/create" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Course type: <span class="color-red">*</span></strong></p>
            <div class="input-group">
              <select name="type" class="selectpicker" data-style="btn-default btn-custom">
                  @foreach($types as $type)
                  <option value="{{$type->slug}}">{{$type->name}}</option>
                  @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Avatar:</strong><span class="color-red">*</span></p>
            <div class="input-group">
                <input type="file" name="avatar" required class="form-control" data-buttonname="btn-white">
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
            <p class="mr-t-10"><strong>Old price:</strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="old_price" id="input-name-page" class="form-control"  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>New price: <span class="color-red">*</span></strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="new_price" id="input-name-page" class="form-control" required  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Only new price:<span class="color-red">*</span></strong></p>
            <div class="radio radio-info form-check-inline">
                <input type="radio" id="inlineRadio1" value="1" name="new_price_only" checked>
                <label for="inlineRadio1"> Yes </label>
            </div>
            <div class="radio form-check-inline">
                <input type="radio" id="inlineRadio2" value="0" name="new_price_only">
                <label for="inlineRadio2"> No </label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Sale: </strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="sale" id="input-name-page" class="form-control"  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Gift:</strong></p>
            <textarea name="gift" id="" cols="30" rows="10" class="form-control" placeholder="between 1 - 512 chars length"></textarea>
          </div>
        </div>


        <div class="form-group">
            <p class="mr-t-10"><strong>Teachers:<span class="color-red">*</span></strong></p>
            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="teacher[]" data-plugin="multiselect">
                <option value="a1">Trung Hồ Ngọc</option>
                <option value="a2">Ahihi :3</option>
            </select>
        </div>

        <div class="form-group">
            <p class="mr-t-10"><strong>Opening:</strong></p>
            <div>
                <div class="input-group">
                    <span class="input-group-addon bg-custom b-0"><i class="md md-event-note text-white"></i></span>
                    <input type="text" name="opening" class="form-control" placeholder="yyyy/mm/dd" id="datepicker-autoclose">
                </div><!-- input-group -->
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Current student total:</strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="current_student_total" id="input-name-page" class="form-control" data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Students per class:</strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="student_total" id="input-name-page" class="form-control"  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Lessons total:</strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="lesson_total" id="input-name-page" class="form-control"  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Hours total:</strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="hour_total" id="input-name-page" class="form-control" data-parsley-length="[1,255]">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Sessions total:</strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="number" name="session_total" id="input-name-page" class="form-control" data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>description:</strong></p>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description between 1 - 512 chars length"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Video for introduction:</strong></p>
            <div class="item-image-link">
              <div class="input-group">
                  <input type="text" name="slideVideoLink[]" class="form-control" data-buttonname="btn-white">
                  <span class="input-group-btn" id="copy-link-file-to-clipboard" onclick="$(this).closest('.item-image-link').remove()">
                      <button type="button" class="btn waves-effect waves-light btn-warning">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                  </span>
              </div>
            </div>

            <div id="more-link-video-slider"></div>
            <div class="mr-t-10">
              <button type="button" class="btn btn-info btn-rounded waves-effect waves-light float-right more-video">more</button>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Imgage for introduction:</strong></p>
            <input type="file" name="slideImageUpload" multiple class="form-control" data-buttonname="btn-white">
            <p class="mr-t-10">Or paste a link:</p>
            <div class="item-image-link">
              <div class="input-group">
                  <input type="text" name="slideImageLink[]" class="form-control" data-buttonname="btn-white">
                  <span class="input-group-btn" id="copy-link-file-to-clipboard" onclick="$(this).closest('.item-image-link').remove()">
                      <button type="button" class="btn waves-effect waves-light btn-warning">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                  </span>
              </div>
            </div>

            <div id="more-link-image-slider"></div>
            <div class="mr-t-10">
              <button type="button" class="btn btn-info btn-rounded waves-effect waves-light float-right more-image">more</button>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Content:</strong></p>
            <textarea name="content" id="editor_ckeditor" cols="30" rows="10" class="form-control" placeholder="Description between 1 - 512 chars length"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Publish:</strong></p>
            <div class="radio radio-info form-check-inline">
                <input type="radio" id="inlineRadio1" value="1" name="publish">
                <label for="inlineRadio1"> Yes </label>
            </div>
            <div class="radio form-check-inline">
                <input type="radio" id="inlineRadio2" value="0" name="publish" checked>
                <label for="inlineRadio2"> No </label>
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

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace( 'editor_ckeditor', options );
  $(document).ready(function(){
    $(".more-image").click(function() {
      $('#more-link-image-slider').append('<div class="mr-t-10"><div class="item-image-link"> <div class="input-group"> <input type="text" name="slideImageLink[]" class="form-control" data-buttonname="btn-white"> <span class="input-group-btn" id="copy-link-file-to-clipboard" onclick="$(this).closest(\'.item-image-link\').remove()"> <button type="button" class="btn waves-effect waves-light btn-warning"> <i class="fa fa-trash" aria-hidden="true"></i> </button> </span> </div></div></div>')
    })

    $(".more-video").click(function() {
      $('#more-link-video-slider').append('<div class="mr-t-10"><div class="item-image-link"> <div class="input-group"> <input type="text" name="slideVideoLink[]" class="form-control" data-buttonname="btn-white"> <span class="input-group-btn" id="copy-link-file-to-clipboard" onclick="$(this).closest(\'.item-image-link\').remove()"> <button type="button" class="btn waves-effect waves-light btn-warning"> <i class="fa fa-trash" aria-hidden="true"></i> </button> </span> </div></div></div>')
    })
  })
</script>
@endsection
