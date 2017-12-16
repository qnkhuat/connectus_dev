@extends('ad.layouts.master')

@section('top_css')
@endsection

@section('css')
<style>
.mr-t-10 {margin-top: 10px;}
.pointer {cursor: pointer;}
</style>
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Categories</a></li>
    <li class="breadcrumb-item"><a href="#">Create</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Categories</h4>
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
      <form action="/admin/categories/update" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$category->id}}">

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Name: <span class="color-red">*</span></strong></p>
            <div class="input-group">
                <span class="input-group-btn" id="copy-link-file-to-clipboard">
                    <button type="button" class="btn waves-effect waves-light btn-success">
                        <i class="md md-mode-edit" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="text" name="name" value="{{$category->name}}" id="input-name-page" class="form-control" placeholder="Name between 1 - 255 chars length" required  data-parsley-length="[1,255]">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>description:</strong></p>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description between 1 - 512 chars length">{{$category->description}}</textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="mr-t-10"><strong>Publish:</strong></p>
            <div class="radio radio-info form-check-inline">
                <input type="radio" id="inlineRadio1" value="1" name="publish" {{$category->publish ? "checked" : ""}}>
                <label for="inlineRadio1"> Yes </label>
            </div>
            <div class="radio form-check-inline">
                <input type="radio" id="inlineRadio2" value="0" name="publish" {{!$category->publish ? "checked" : ""}}>
                <label for="inlineRadio2"> No </label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="mr-t-10 text-center">
              <button type="submit" class="btn btn-warning btn-rounded waves-effect waves-light">SAVE</button>
            </div>
          </div>
        </div>

      </form>
    </div>
</div>
@endsection

@section('js')
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  })
</script>
@endsection
