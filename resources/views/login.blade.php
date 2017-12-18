<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">

        <title>Login</title>

        <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="/backend/assets/js/modernizr.min.js"></script>

    </head>
    <body>

        <div class="account-pages"></div>

        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="card-box">
                <div class="panel-heading">
                    <h4 class="text-center"> Sign In to <strong>Connectus</strong></h4>
                </div>

                @if (Session::has('messages'))
                	<div class="alert alert-{{ Session::get('messages')["type"] }}">
                		<div class="container">
                			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                			<strong>{{ Session::get('messages')["content"] }}</strong>
                		</div>
                	</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="p-20">
                    <form class="form-horizontal m-t-20" action="/login" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group-custom">
                            <input type="email" name="email" id="user-name" required="required"/>
                            <label class="control-label" for="user-name">Email</label><i class="bar"></i>
                        </div>

                        <div class="form-group-custom">
                            <input type="password" name="password" id="user-password" required="required"/>
                            <label class="control-label" for="user-password">Password</label><i class="bar"></i>
                        </div>

                        <div class="form-group ">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-success btn-block text-uppercase waves-effect waves-light"
                                        type="submit">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-12">
                                <a href="/login/forgot" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                                    your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-white">Don't have an account? <a href="#" class="text-white m-l-5"><b>Sign Up</b></a>
                    </p>

                </div>
            </div>

        </div>




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

        <script src="/backend/assets/js/jquery.core.js"></script>
        <script src="/backend/assets/js/jquery.app.js"></script>

	</body>
</html>
