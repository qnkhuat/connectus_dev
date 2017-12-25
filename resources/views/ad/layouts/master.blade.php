<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">
        <title>Trung Ho Ngoc - Responsive Admin Dashboard Template</title>
        @yield('top_css')
        <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/style.css" rel="stylesheet" type="text/css" />
        @yield('css')
        <style>
            .group-span-filestyle label {margin-top: 7px;}
        </style>
        <script src="/backend/assets/js/modernizr.min.js"></script>
    </head>
    <?php
      $currenUser = auth()->user();
      $currenUserRoles = $currenUser->role;
    ?>
    <body class="fixed-left">
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="spinner-wrapper">
                        <div class="rotator">
                            <div class="inner-spin"></div>
                            <div class="inner-spin"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- //Loader -->

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index-2.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Trung<i class="md md-album"></i></span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="/backend/assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="/backend/assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item notification-list hidden-xs-down">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                            <i class="dripicons-expand noti-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                            <i class="dripicons-message noti-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                            <img src="/img/avatar/{{$currenUser->avatar}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! {{$currenUser->name}}</small> </h5>
                                </div>
                                <!-- item-->
                                <a href="/admin/users/profile" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                </a>
                                <!-- item-->
                                <a href="/logout" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navigation</li>
                            <li class="has_sub">
                                <a href="/admin" class="waves-effect"><i class="fa fa-home"></i><span class="badge badge-success pull-right">3</span><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->view_user)
                                    <li><a href="/admin/users">List</a></li>
                                    @endif
                                    <li><a href="/admin/users/profile">Profile</a></li>
                                    @if($currenUserRoles->create_user)
                                    <li><a href="/admin/users/create">Create</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-location-arrow"></i> <span> Districts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->view_district)
                                    <li><a href="/admin/districts">List</a></li>
                                    @endif
                                    @if($currenUserRoles->create_district)
                                    <li><a href="/admin/districts/create">Create</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-address-book-o"></i> <span> Address </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->view_all_user_address)
                                    <li><a href="/admin/address/list-all">List all</a></li>
                                    @endif
                                    <li><a href="/admin/address">List</a></li>
                                    <li><a href="/admin/address/create">Create</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-list-ol"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->view_category)
                                    <li><a href="/admin/categories">List</a></li>
                                    @endif

                                    @if($currenUserRoles->create_category)
                                    <li><a href="/admin/categories/create">Create</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i> <span> Teachers </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->view_all_teacher)
                                    <li><a href="/admin/teachers/list-all">List all</a></li>
                                    @endif
                                    @if($currenUserRoles->view_teacher)
                                    <li><a href="/admin/teachers">List</a></li>
                                    @endif
                                    @if($currenUserRoles->create_course_type)
                                    <li><a href="/admin/teachers/create">Create</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-list-ul"></i> <span> Course types </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->create_course_type)
                                    <li><a href="/admin/course-types">List</a></li>
                                    @endif
                                    @if($currenUserRoles->create_course_type)
                                    <li><a href="/admin/course-types/create">Create</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-graduation-cap"></i> <span> Courses </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @if($currenUserRoles->view_all_course)
                                    <li><a href="/admin/courses/list-all">List all</a></li>
                                    @endif
                                    @if($currenUserRoles->view_course)
                                    <li><a href="/admin/courses">List</a></li>
                                    @endif
                                    @if($currenUserRoles->create_course)
                                    <li><a href="/admin/courses/create">Create</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-my-library-books"></i> <span> Orders </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/orders/list-all">List all</a></li>
                                    <li><a href="/admin/orders">List</a></li>
                                    <li><a href="/admin/orders/request">Request</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-my-library-books"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/pages">List</a></li>
                                    <li><a href="/admin/pages/create">Create</a></li>
                                    <li><a href="/admin/pages/blank">Blank page</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file-image-o"></i> <span> Files </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/files">List</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header-box">
                                    @yield('breadcrumb')
                                    @yield('page_name')
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container -->

                    <div class="container">
                        @yield('content')
                    </div>
                    <!-- container -->
                </div>
                <!-- content -->
                <footer class="footer text-right">
                    &copy; 2016 - 2017. All rights reserved.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="/backend/assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->
        </div>
        <!-- END wrapper -->

        @yield('modal')
        @yield('popover')

        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="/backend/assets/js/jquery.min.js"></script>
        <script src="/backend/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="/backend/assets/js/bootstrap.min.js"></script>
        <script src="/backend/assets/js/detect.js"></script>
        <script src="/backend/assets/js/fastclick.js"></script>
        <script src="/backend/assets/js/jquery.slimscroll.js"></script>
        <script src="/backend/assets/js/jquery.blockUI.js"></script>
        <script src="/backend/assets/js/waves.js"></script>
        <script src="/backend/assets/js/wow.min.js"></script>
        <script src="/backend/assets/js/jquery.nicescroll.js"></script>
        <script src="/backend/assets/js/jquery.scrollTo.min.js"></script>
        @yield('js')
    </body>
</html>
