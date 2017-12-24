@extends('ad.layouts.master')

@section('top_css')
@endsection

@section('css')
<style>
.content-toggle-wrap {display: none;}
.toggle-course {cursor: pointer;}
</style>
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Users</a></li>
    <li class="breadcrumb-item"><a href="#">Profile</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Trang cá nhân</h4>
@endsection

@section('content')
<div class="row">
    <div class="col-md-4 col-lg-3">
        <div class="profile-detail card-box">
            <div>
                <img src="/img/avatar/{{$user->avatar}}" class="rounded-circle bx-shadow" alt="profile-image">
                <ul class="list-inline status-list m-t-20">
                    <li class="list-inline-item">
                        <h3 class="text-primary m-b-5">456</h3>
                        <p class="text-muted">Khóa học</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="text-success m-b-5">5864</h3>
                        <p class="text-muted">Bài đăng</p>
                    </li>
                </ul>
                <a href="/admin/users/edit/{{$user->id}}">
                  <button type="button" class="btn btn-success waves-effect waves-light">Chỉnh sửa hồ sơ</button>
                </a>
                <hr>
                <h4 class="text-uppercase font-18 font-600">About Me</h4>
                <p class="text-muted font-13 m-b-30">{{$user->description}}</p>
                <div class="text-left">
                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{$user->name}}</span></p>
                    <p class="text-muted font-13"><strong>Gender :</strong> <span class="m-l-15">{{$user->gender}}</span></p>
                    <p class="text-muted font-13"><strong>Birth day :</strong> <span class="m-l-15">{{$user->birth}}</span></p>
                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{$user->phone}}</span></p>
                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$user->email}}</span></p>
                    <p class="text-muted font-13"><strong>Facebook :</strong> <span class="m-l-15">
                      <a href="{{$user->fb_page}}">{{$user->fb_page}}</a>
                    </span></p>
                    <p class="text-muted font-13"><strong>Website :</strong> <span class="m-l-15">
                      <a href="{{$user->website}}">{{$user->website}}</a>
                    </span></p>
                    <!-- <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p> -->
                </div>
                <div class="button-list m-t-20">
                    <a href="{{$user->fb_page}}">
                      <button type="button" class="btn btn-facebook waves-effect waves-light">
                      <i class="fa fa-facebook"></i>
                      </button>
                    </a>

                    <button type="button" class="btn btn-twitter waves-effect waves-light">
                    <i class="fa fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-linkedin waves-effect waves-light">
                    <i class="fa fa-linkedin"></i>
                    </button>
                    <a href="{{$user->website}}">
                      <button type="button" class="btn btn-dribbble waves-effect waves-light">
                      <i class="fa fa-dribbble"></i>
                      </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Friends <span class="text-muted">(154)</span></b></h4>
            <div class="friend-list">
                <a href="#">
                <img src="/backend/assets/images/users/avatar-1.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#">
                <img src="/backend/assets/images/users/avatar-2.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#">
                <img src="/backend/assets/images/users/avatar-3.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#">
                <img src="/backend/assets/images/users/avatar-4.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#">
                <img src="/backend/assets/images/users/avatar-5.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#">
                <img src="/backend/assets/images/users/avatar-6.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#">
                <img src="/backend/assets/images/users/avatar-7.jpg" class="rounded-circle thumb-md" alt="friend">
                </a>
                <a href="#" class="text-center">
                <span class="extra-number">+89</span>
                </a>
            </div>
        </div> -->
        <div class="card-box">
          <div class="text-left">
              <h4 class="text-uppercase font-18 font-600">Số học viên đã cung cấp</h4>
              <p class="text-muted font-13"><strong>Tháng trước :</strong> <span class="m-l-15">69</span></p>
              <p class="text-muted font-13"><strong>3 tháng trước :</strong> <span class="m-l-15">69</span></p>
              <p class="text-muted font-13"><strong>Năm ngoái:</strong> <span class="m-l-15">69</span></p>
              <p class="text-muted font-13"><strong>Tất cả:</strong> <span class="m-l-15">69</span></p>
          </div>
        </div>

        <div class="card-box">
          <div class="text-left">
              <h4 class="text-uppercase font-18 font-600">Doanh thu</h4>
              <p class="text-muted font-13"><strong>Tháng trước :</strong> <span class="m-l-15">69 000 đ</span></p>
              <p class="text-muted font-13"><strong>3 tháng trước :</strong> <span class="m-l-15">69 000 đ</span></p>
              <p class="text-muted font-13"><strong>Năm ngoái:</strong> <span class="m-l-15">69 000 đ</span></p>
              <p class="text-muted font-13"><strong>Tất cả:</strong> <span class="m-l-15">69 000 đ</span></p>
          </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-8">
      <div class="card-box">
          <div class="comment">
              <img src="/img/avatar/{{$user->avatar}}" alt="" class="comment-avatar">
              <div class="comment-body">
                  <div class="comment-text">
                      <div class="comment-header">
                          <a href="#" title="">{{$user->name}}</a><span>(đã đăng ký 2 tháng trước)</span>
                      </div>
                      @foreach($address as $a)
                      <div class="alert alert-default">
                          <p><strong>{{$a->sort_description}}</strong></p>
                          <p>{{$a->address}}</p>
                      </div>
                      @endforeach
                  </div>
              </div>

              <div class="comment-body">
                  <div class="comment-text">
                      <div class="comment-header">
                          <a href="#" title="">Roles</a>
                      </div>
                      <div>
                        @foreach($role["original"] as $key => $r)
                          @if($r == 1 && $key != "id" && $key != "user_id" && $key != "created_at" && $key != "updated_at")
                          <span class="label label-table label-{{$labels[rand(0, 8)]}}">{{$key}}</span>
                          @endif
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <ul class="nav nav-tabs tabs">
          <li class="tab">
              <a href="#tab-courses" data-toggle="tab" aria-expanded="false">
                  Courses
              </a>
          </li>
          <li class="tab">
              <a href="#tab-posts" data-toggle="tab" aria-expanded="false">
                  Posts
              </a>
          </li>
      </ul>
      <div class="tab-content">
          <div class="tab-pane active" id="tab-courses">
            <!-- item -->
            <div class="comment">
                <img src="/img/avatar/{{$user->avatar}}" alt="" class="comment-avatar">
                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Các khóa học</a><span></span>
                        </div>
                        Hiển thị tất cả các khóa học trên hệ thống
                    </div>
                </div>

                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Khóa abc</a><span>(đã đăng 1 ngày trước)</span>
                        </div>
                        <div class="content-toggle-wrap">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                  <p>Danh mục: <a href="#">Ai eo</a> | Tiếng Nhật Bổn cải tiến</p>
                                  <p>Giá: 4000 000</p>
                                  <p>Khuyển mãi: ahihi</p>
                                  <p>Giảm giá: 10 000 000</p>
                                  <p>Thời lượng: 80 giờ, 40 buổi, thứ 2 3 4</p>
                                  <p>Khai giảng: 1/1/2018</p>
                                  <p>Giáo viên: <a href="#">Trung Hồ Ngọc</a></p>
                                  <p>Tình trạng:
                                    <span class="label label-table label-warning">đã mở lớp</span>
                                     / <span class="label label-table label-info">đang chiêu sinh</span>
                                  </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                  <p>Số học viên còn thiếu: 69</p>
                                  <p>Số học viên đã cung cấp tháng này: 69</p>
                                  <p>Số học viên đã cung cấp tháng trước: 69</p>
                                  <p>Số học viên đã cung cấp 3 tháng trước: 69</p>
                                  <p>Số học viên đã cung cấp năm ngoái: 69</p>
                                  <p>Tổng số học viên đã cung cấp: 69</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-footer">
                        <div class="pull-left">
                          <a href="#"><span class="label label-info">View</span></a>
                          <a href="#"><span class="label label-warning">Edit</span></a>
                          <a href="#"><span class="label label-danger">Delete</span></a>
                        </div>
                        <div class="pull-right">
                          <span class="label label-success toggle-course">Toggle</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- /item -->
          </div>
          <div class="tab-pane" id="tab-posts">
            <!-- item -->
            <div class="comment">
                <img src="/img/avatar/{{$user->avatar}}" alt="" class="comment-avatar">
                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Các bài viết</a><span></span>
                        </div>
                        Hiển thị tất cả các bài viết đã đăng trên hệ thống
                    </div>
                </div>

                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">học ai eo với chuyên gia Lào</a><span>(đã đăng 1 ngày trước)</span>
                        </div>
                        <div class="content-toggle-wrap">
                          đoạn mô tả ))
                        </div>
                    </div>

                    <div class="comment-footer">
                        <div class="pull-left">
                          <a href="#"><span class="label label-info">View</span></a>
                          <a href="#"><span class="label label-warning">Edit</span></a>
                          <a href="#"><span class="label label-danger">Delete</span></a>
                        </div>
                        <div class="pull-right">
                          <span class="label label-success toggle-course">Toggle</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- /item -->
          </div>
      </div>
    </div>
</div>
@endsection

@section('js')
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".toggle-course").click(function(){
      $(this).closest(".comment-body").find(".content-toggle-wrap").slideToggle()
    })
  })
</script>
@endsection
