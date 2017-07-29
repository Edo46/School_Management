<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-minimal/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2017 07:48:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- color CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}" id="theme" >
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{ asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
        <div class="white-box">

            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif

            <form class="form-horizontal form-material" id="loginform" method="post">
                {{csrf_field()}}
                <a href="javascript:void(0)" class="text-center db"><img src="{{ asset('assets/plugins/images/admin-logo-dark.png') }}" alt="Home" /><br/><img src="{{ asset('assets/plugins/images/admin-text-dark.png') }}" alt="Home" /></a>
                <h3 class="box-title m-t-40 m-b-0">Login Now</h3><small>Login your account and enjoy</small>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input type="text" class="form-control" name="username" value="{{old('username')}}" required="" placeholder="Username">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input type="password" class="form-control" name="password" required="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light">Sign</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>

