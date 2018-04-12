@extends('ad.layouts.master')

@section('top_css')
<!-- Custombox -->
<link href="/backend/assets/plugins/custombox/css/custombox.css" rel="stylesheet">

<!-- Dropzone css (upload) -->
<link href="/backend/assets/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
@endsection

@section('css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="#">Files</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Files manage</h4>
@endsection

@section('content')
<div class="row">
	<!-- .col-md-9 -->
    <div class="col-md-9 card-box min-height-400">
    	<div class="row">
    		<!-- bộ lọc -->
    		<div class="col-md-12">
    			<div>
    				<!-- <input type="file"> -->
    				<a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#upload-file-modal">
    					<button type="button" class="btn btn-success waves-effect waves-light w-lg"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload file</button>
    				</a>
    				<a href="#create-folder-modal" class="waves-effect waves-light" data-animation="slide" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a">
    					<button type="button" class="btn btn-warning waves-effect waves-light w-lg"><i class="fa fa-folder-o" aria-hidden="true"></i>&nbsp;Create folder</button>
    				</a>
    				<button type="button" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Refresh</button>

    				<div class="btn-group dropdown">
	                    <button type="button" class="btn btn-primary waves-effect waves-light">
	                    	<i class="fa fa-filter" aria-hidden="true"></i>&nbsp;everything
	                    </button>
	                    <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><i class="caret"></i></button>
	                    <div class="dropdown-menu">
	                        <a class="dropdown-item" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;Image</a>
	                        <a class="dropdown-item" href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i>&nbsp;Video</a>
	                        <a class="dropdown-item" href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;Document</a>
	                    </div>
	                </div>
    			</div>
    		</div>
			<!-- /bộ lọc -->

			<div class="col-md-12">
				<div style="margin-top: 32px;"></div>
			</div>

			<!-- danh sách file -->
    		<div class="col-sm-12 col-ls-12 col-md-12">
    			<div class="row">
					<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<i class="fa fa-level-up"></i>
    						</div>
    						<div class="file-name text-center">...</div>
    						<div class="info-files">
    							<div class="file-type">_back_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">_back_</div>
    							<div class="file-size">0 kB</div>
    							<div class="file-link-thumb">_null_</div>
    							<div class="file-link">_null_</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<img src="/backend/assets/images/gallery/1.jpg" alt="">
    						</div>
    						<div class="file-name text-center">ahihi đồ ngốkc ahihi</div>
    						<div class="info-files">
    							<div class="file-type">_img_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">image/jpeg</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.jpg</div>
    							<div class="file-link">/nothumb/a.jpg</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<i class="fa fa-file-video-o" aria-hidden="true"></i>
    						</div>
    						<div class="file-name text-center">âu ze</div>
    						<div class="info-files">
    							<div class="file-type">_video_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">video/mp4</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.mp4</div>
    							<div class="file-link">/nothumb/a.mp4</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

					<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<i class="fa fa-file-text-o" aria-hidden="true"></i>
    						</div>
    						<div class="file-name text-center">âu ze</div>
    						<div class="info-files">
    							<div class="file-type">_words_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">words/docx</div>
    							<div class="file-size">69,00 kB</div>
    							<div class="file-link-thumb">/thumb/a.docx</div>
    							<div class="file-link">/nothumb/a.docx</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<i class="fa fa-folder-open-o" aria-hidden="true"></i>
    						</div>
    						<div class="file-name text-center">hình đẹp</div>
    						<div class="info-files">
    							<div class="file-type">_folder_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">folder/folder</div>
    							<div class="file-size">123,00 kB</div>
    							<div class="file-link-thumb">/ahi</div>
    							<div class="file-link">/ahi</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<img src="/backend/assets/images/gallery/1.jpg" alt="">
    						</div>
    						<div class="file-name text-center">ahihi đồ ngốkc ahihi</div>
    						<div class="info-files">
    							<div class="file-type">_img_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">image/jpeg</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.jpg</div>
    							<div class="file-link">/nothumb/a.jpg</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<img src="/backend/assets/images/gallery/1.jpg" alt="">
    						</div>
    						<div class="file-name text-center">ahihi đồ ngốkc ahihi</div>
    						<div class="info-files">
    							<div class="file-type">_img_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">image/jpeg</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.jpg</div>
    							<div class="file-link">/nothumb/a.jpg</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<img src="/backend/assets/images/gallery/1.jpg" alt="">
    						</div>
    						<div class="file-name text-center">ahihi đồ ngốkc ahihi</div>
    						<div class="info-files">
    							<div class="file-type">_img_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">image/jpeg</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.jpg</div>
    							<div class="file-link">/nothumb/a.jpg</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<img src="/backend/assets/images/gallery/1.jpg" alt="">
    						</div>
    						<div class="file-name text-center">ahihi đồ ngốkc ahihi</div>
    						<div class="info-files">
    							<div class="file-type">_img_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">image/jpeg</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.jpg</div>
    							<div class="file-link">/nothumb/a.jpg</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-sm-4 col-lg-3 col-md-3">
    					<div class="item-show-file pre-view-files open-manage-file" data-placement="bottom" data-toggle="popover" data-container="body" data-html="true">
    						<div class="img-show-file text-center">
    							<img src="/backend/assets/images/gallery/1.jpg" alt="">
    						</div>
    						<div class="file-name text-center">ahihi đồ ngốkc ahihi</div>
    						<div class="info-files">
    							<div class="file-type">_img_</div>
    							<div class="file-auth">
    								<div class="user-id-auth-file">1</div>
    								<div class="user-name-auth-file">Hồ Ngọc Trung</div>
    							</div>
    							<div class="file-ex">image/jpeg</div>
    							<div class="file-size">206,02 kB</div>
    							<div class="file-link-thumb">/thumb/a.jpg</div>
    							<div class="file-link">/nothumb/a.jpg</div>
    							<div class="file-created-at">2017-05-30 02:41:33</div>
    							<div class="file-updated-at">2017-05-30 02:41:33</div>
    						</div>
    					</div>
    				</div>
    			</div>

    			<!-- pagination -->
    			<div class="mrt-30"></div>
    			<div class="pull-right">
    				<nav aria-label="...">
					  <ul class="pagination">
					    <li class="page-item disabled">
					      <span class="page-link"><span class="md md-chevron-left"></span></span>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item active">
					      <span class="page-link">
					        2
					        <span class="sr-only">(current)</span>
					      </span>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#"><span class="md md-chevron-right"></span></a>
					    </li><span class=\"md md-check\" style=\"font-size:54px;margin-top:0px;\"></span>
					  </ul>
					</nav>
    			</div>
				<!-- /pagination -->
    		</div>
    		<!-- /danh sách file -->
    	</div>
    </div>
	<!-- /.col-md-9 -->

	<!-- .col-md-3 -->
    <div class="col-md-3 card-box">
    	<div class="show-file-img">
    		<img src="/backend/assets/images/gallery/1.jpg" alt="" class="full-width">
    	</div>
    	<div class="mrt-10">
    		<p><strong>Name</strong></p>
    		<p>ahihi đồ ngốkc ahihi</p>
    		<p><strong>Full url</strong></p>
    		<div class="input-group">
			    <input type="text" class="form-control" placeholder="full url" value="http://codeisfree.dev/backend/assets/images/gallery/1.jpg">
			    <span class="input-group-btn" id="copy-link-file-to-clipboard">
				    <button type="button" class="btn waves-effect waves-light btn-success">
				    	<i class="fa fa-files-o" aria-hidden="true"></i>
				    </button>
			    </span>
			</div>
			<p><strong>Size</strong></p>
    		<p>156,02 kB</p>
    		<p><strong>Type</strong></p>
    		<p>image/jpeg</p>
    		<p><strong>Auth</strong></p>
    		<p><a href="/hi/user/1">Trung Hồ Ngọc</a></p>
    		<p><strong>Created at</strong></p>
    		<p>2017-05-30 02:41:33</p>
    		<p><strong>Updated at</strong></p>
    		<p>2017-05-30 02:41:33</p>
    	</div>
    </div>
    <!-- /.col-md-3 -->
</div>
<!-- end row -->
@endsection

@section('modal')
<!-- Create a folder -->
<div id="create-folder-modal" class="my-modal-dialog">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">
    	<i class="fa fa-windows" aria-hidden="true"></i>&nbsp;
    	Create folder
    </h4>
    <div class="custom-modal-text">
        <div class="input-group">
		    <input type="text" class="form-control" placeholder="folder name">
		    <span class="input-group-btn">
		    <button type="button" class="btn waves-effect waves-light btn-primary">Create</button>
		    </span>
		</div>
    </div>
</div>
<!-- Rename file -->
<a href="#rename-file-modal" id="open-rename-file-modal" class="waves-effect waves-light" data-animation="slide" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"></a>
<div id="rename-file-modal" class="my-modal-dialog">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">
    	<i class="fa fa-windows" aria-hidden="true"></i>&nbsp;
    	Rename
    </h4>
    <div class="custom-modal-text">
        <div class="input-group">
        	<span class="input-group-btn">
		    <button type="button" class="btn waves-effect waves-light btn-primary">
		    	<i class="fa fa-refresh" aria-hidden="true"></i>
		    </button>
		    </span>
		    <input type="text" class="form-control" placeholder="rename ..." id="input-form-rename-file">
		</div>

		<div class="pull-right">
			<div class="mrb-20"></div>
			<button type="button" class="btn waves-effect waves-light btn-default" onclick="reset_close_form_rename()">Cancel</button>
			<button type="button" class="btn waves-effect waves-light btn-success">Change</button>
		</div>
		<div class="clearfix"></div>
    </div>
</div>
<!-- Upload file -->
<div id="upload-file-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
    	<div class="header-modal custom-header-modal">
            <h4 class="modal-title mt-0"><span class="md md-cloud-upload"></span>&nbsp;Upload files</h4>
            <span class="custom-close-modal" data-dismiss="modal"><i class="fa fa-times fa-2x" aria-hidden="true"></i></span>
        </div>
        <div class="modal-content">
            <div class="modal-body">
                <div action="/hi/files/upload" class="dropzone dz-clickable" id="dropzone-upload">
		        	{{ csrf_field() }}
				    <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
				</div>
            </div>
            <div class="modal-footer custom-modal-footer">
            	<button type="button" class="btn btn-info waves-effect reset-form-upload-files">Reset</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('popover')
<div id="menu-files-manage-popover" class="hide">
    <div class="list-group">
	    <span class="list-group-item bg-sky color-white pointer manage-file-rename" onclick="manage_file_rename();destroy_popover()"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Rename</span>
	    <span class="list-group-item bg-green color-white pointer manage-file-download" onclick="destroy_popover()"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Download</span>
	    <span class="list-group-item bg-red color-white pointer manage-file-trash" onclick="destroy_popover()"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Move to trash</span>
	</div>
</div>
@endsection

@section('js')
<script src="/backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="/backend/assets/plugins/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="/backend/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="/backend/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<!-- <script src="/backend/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script> -->
<script src="/backend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

<script type="text/javascript" src="/backend/assets/pages/jquery.form-advanced.init.js"></script>

<!-- Modal-Effect -->
<script src="/backend/assets/plugins/custombox/js/custombox.min.js"></script>
<script src="/backend/assets/plugins/custombox/js/legacy.min.js"></script>

<!-- Notification -->
<script src="/backend/assets/plugins/notifyjs/js/notify.js"></script>
<script src="/backend/assets/plugins/notifications/notify-metro.js"></script>

<!-- Page Specific JS Libraries (upload nè) -->
<script src="/backend/assets/plugins/dropzone/dropzone.js"></script>

<!-- App js -->
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>
<script>
var manage_id_files = {
	type: null,
	id: null,
	name: null
}
$(document).ready(function(){
	//show menu manage file:
	$(".open-manage-file").popover({
	    html: true,
	    container: 'body',
		content: function() {
			var type = $(this).find("div.info-files").eq(0).find("div.file-type").text()
			var id = $(this).find("div.file-name").eq(0).text()
			manage_id_files.type = type;
			manage_id_files.id = id;
			manage_id_files.name = id;
	        return $('#menu-files-manage-popover').html();
	    },
		showCallback: function() {

		}
	});
	//copy to clipboard:
	$("#copy-link-file-to-clipboard").click(function(){
		var link = $(this).parent().find("input").select();
		try {
		    var msg = document.execCommand('copy') ? 'successful' : 'unsuccessful';
		    console.log('Copying link file was ' + msg);
		    $.Notification.notify('success','top right', 'Copying link file was '+ msg +'!', 'Đã copy link vào bộ nhớ tạm rồi nha mấy má ơi ))')
		} catch (err) {
		    console.log('Oops, unable to copy');
		    $.Notification.notify('warning','top right', 'Oops, unable to copy', 'Copy không thành công')
		}
	})
	// Dropzone (add file vào)
	$("div#dropzone-upload").dropzone({
		url: "/hi/files/upload",
		timeout: 3000,
		maxFilesize: 2048,
		params: {
			_token: "{{ csrf_token() }}"
		},
		paramName: "file",
		init: function () {
	        this.on("complete", function (file) {
	            // $.Notification.notify('default','top right', 'âu ze', 'files hợp lệ')
	        });
	        this.on("success", function(file, res) {
	            $.Notification.notify(res.state,'top right', 'Files upload', res.mess)
	            if(res.state == "error")
	            	$(file.previewElement).find('.dz-error-message').text(res.mess);
	            else
	            	$(file.previewElement).find('.dz-success-message').text(res.mess);
	        });
	        this.on('error', function(file, res) {
			    $.Notification.notify('error','top right', 'Files upload failed', 'Upload không thành công');
			    $(file.previewElement).find('.dz-error-message').text('Upload không thành công');
			});
	    }
	});
	//reset form upload files (clear thumb):
	$(".reset-form-upload-files").click(function(){
		Dropzone.forElement("div#dropzone-upload").removeAllFiles();
		$.Notification.notify('success','top right', 'Reset successful!', 'Đã đặt form upload files về trạng thái trống')
	});
	//
});

function manage_file_rename()
{
	// $("#open-rename-file-modal").trigger("click");
	Custombox.open({
        target: "#rename-file-modal",
        effect: "slide",
        overlaySpeed: 200,
        overlayColor: "#36404a"
    });
    $("input#input-form-rename-file").val(manage_id_files.name).focus();
	// $("input#input-form-rename-file").focus();
}
function reset_close_form_rename()
{
	manage_id_files = {
		type: null,
		id: null,
		name: null
	}
	Custombox.close();
}
//hủy popover:
function destroy_popover()
{
	$(".open-manage-file").popover("hide");
}
</script>
@endsection
