@extends('ad.layouts.master')

@section('top_css')
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<!-- Plugins css-->
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
@endsection

@section('css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/admin/pages">Pages</a></li>
    <li class="breadcrumb-item active"><a href="#">Create</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Create a page</h4>
@endsection

@section('content')
<div class="row">
	<!-- .col-md-9 -->
    <div class="col-md-9 card-box min-height-400">
    	<div class="row">
			<!-- content -->
    		<div class="col-sm-12 col-ls-12 col-md-12">
    			<div class="row">
                <form action="" method="get" style="width: 100%;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p><strong>Name <span class="color-red">*</span></strong></p>
                    <div class="input-group">
                        <span class="input-group-btn" id="copy-link-file-to-clipboard">
                            <button type="button" class="btn waves-effect waves-light btn-success">
                                <i class="md md-mode-edit" aria-hidden="true"></i>
                            </button>
                        </span>
                        <input type="text" id="input-name-page" class="form-control" placeholder="Page name between 1 - 255 chars length" required=""  data-parsley-length="[1,255]">
                    </div>

                    <div class="mrt-20"></div>
                    <div class="create-page-link" id="create-page-link" >
                        <p><strong>Page link <span class="color-red">*</span></strong></p>
                        <a href="#" class="link-page-success"></a><span class="link-page-tmp"></span><input type="text" class="input-link-page-tmp">&nbsp;
                        <span class="btn-m-link-page">
                            <input type="hidden" id="link-page-finally" required="">
                            <span class="btn btn-warning btn-custom btn-rounded waves-effect waves-light btn-edit-link-page">Edit</span>
                            <span class="btn btn-default btn-custom btn-rounded waves-effect waves-light btn-ok-link-page">Ok</span>
                            <span class="btn btn-danger btn-custom btn-rounded waves-effect waves-light btn-cancel-link-page">Cancel</span>
                        </span>
                    </div>

                    <div class="mrt-20"></div>
                    <div>
                        <p><strong>Description <span class="color-red">*</span></strong></p>
                        <textarea name="" id="" class="form-control" placeholder="Description between 1 - 511 chars length" required=""  data-parsley-length="[1,511]"></textarea>
                    </div>

                    <div class="mrt-20"></div>
                    <div>
                        <p><strong>Content <span class="color-red">*</span></strong></p>
                        <a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#upload-file-modal">
                            <button type="button" class="btn btn-success waves-effect waves-light w-lg"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload file</button>
                        </a>
                        <a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#choose-file-modal">
                            <button type="button" class="btn btn-inverse waves-effect waves-light"><i class="md md-collections" aria-hidden="true"></i>&nbsp;File choosen</button>
                        </a>
                        <div class="mrt-10"></div>
                        <textarea name="editor_ckeditor" id="" class="form-control" placeholder="Description between 1 - 511 chars length" required=""></textarea>
                    </div>

                    <div class="mrt-30"></div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info pointer">Create</button>
                    </div>
                </form>

    			</div>
    		</div>
    		<!-- /content -->
    	</div>
    </div>
	<!-- /.col-md-9 -->

	<!-- .col-md-3 -->
    <div class="col-md-3">
    	<div class="row">
            <div class="col-md-12">
                 <div class="card m-b-20">
                    <div class="card-header">
                        <strong><span class="md md-publish"></span>&nbsp;Publish</strong>
                    </div>
                    <div class="card-block">
                        <button type="button" class="btn btn-default btn-rounded waves-effect waves-light font-12"><span class="md md-save"></span>&nbsp;Save</button>
                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light font-12"><span class="md md-repeat-one"></span>&nbsp;Save & edit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                 <div class="card m-b-20">
                    <div class="card-header">
                        <strong><span class="md md-check"></span>&nbsp;Status&nbsp;<span class="color-red">*</span></strong>
                    </div>
                    <div class="card-block">
                        <select class="selectpicker m-b-0" data-style="btn-warning btn-custom">
                            <option><span class="md md-check"></span>&nbsp;Actived</option>
                            <option><span class="md md-cancel"></span>&nbsp;Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                 <div class="card m-b-20">
                    <div class="card-header">
                        <strong><span class="md md-image"></span>&nbsp;Image&nbsp;<span class="color-red">*</span></strong>
                    </div>
                    <div class="card-block">
                        <button type="button" class="btn btn-default btn-rounded waves-effect waves-light"><span class="fa fa-plus"></span>&nbsp;Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-md-3 -->
</div>
<!-- end row -->
@endsection

@section('modal')

@endsection

@section('popover')

@endsection

@section('js')
<script type="text/javascript" src="/backend/assets/plugins/parsleyjs/parsley.min.js"></script>


<script src="/backend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>


<!-- App js -->
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>

<script src="/backend/assets/js/config.js"></script>
<script src="/backend/assets/js/create_slug.js"></script>
<script src="/backend/assets/js/replace_all.js"></script>
<script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
<script type="text/javascript">
var link_page_root = "";
$(document).ready(function() {
    CKEDITOR.replace( 'editor_ckeditor' );
    //Validate form:
    $('form').parsley();
    // Tạo link:
    $("#input-name-page").blur(function(){
        create_link_page($(this).val());
    });
    //click sửa link:
    $(".btn-edit-link-page").click(function(){
        $(this).hide();
        $(".btn-ok-link-page").show();
        $(".btn-cancel-link-page").show();
        $("#create-page-link span.link-page-tmp").hide();
        $(".input-link-page-tmp").show();
    });
    //click ok sửa link:
    $(".btn-ok-link-page").click(function(){
        create_link_page($("#create-page-link .input-link-page-tmp").val());
    });
    //click hủy link:
    $(".btn-cancel-link-page").click(function(){
        $("input.input-link-page-tmp").val(link_page_root);
        console.log("link nè: " + link_page_root);
        console.log("<<<::" + $("input#link-page-finally").val());
        $("#create-page-link .input-link-page-tmp").hide();
        $("#create-page-link span.link-page-tmp").show();
        $(".btn-ok-link-page").hide();
        $(this).hide();
        $(".btn-edit-link-page").show();
    });
});

function create_link_page(name)
{
    var name_page = clear_text_bug(name);
    $("#input-name-page").val(clear_text_bug($("#input-name-page").val()));
    $("#create-page-link .input-link-page-tmp").hide();
    $("#create-page-link span.link-page-tmp").show();
    if(name_page.trim().length > 0)
    {
        var link_page = ChangeToSlug(name_page);
        if(link_page.length > 0)
        {
            $("#create-page-link a.link-page-success").attr("href", my_config.domain_plus + "/" + link_page).text(my_config.domain_plus + "/");
            $("#create-page-link span.link-page-tmp").html("<a href=\"" + my_config.domain_plus + "/" + link_page + "\"><strong>" + link_page + "</strong></a>");
            $("#create-page-link .input-link-page-tmp").val(link_page);

            $("input#link-page-finally").val(link_page);
            $("#create-page-link span.btn-m-link-page span.btn-edit-link-page").show();
            $(".label-page-link").show();
            $("#create-page-link").show();
            $(".btn-ok-link-page").hide();
            $(".btn-cancel-link-page").hide();
        }
        else
        {
            $("input#link-page-finally").val("");
            $("#create-page-link").hide();
            $("#create-page-link span.btn-m-link-page span.btn-edit-link-page").hide();
            $(".btn-ok-link-page").hide();
            $(".btn-cancel-link-page").hide();
        }
    }
    if(name_page.length <= 0)
    {
        $("input#link-page-finally").val("");
        $("#create-page-link").hide();
        $("#create-page-link span.btn-m-link-page span.btn-edit-link-page").hide();
        $(".btn-ok-link-page").hide();
        $(".btn-cancel-link-page").hide();
    }
    link_page_root = link_page;
    console.log("link: " + link_page_root);
    console.log("<<<::" + $("input#link-page-finally").val());
}
</script>

@endsection
