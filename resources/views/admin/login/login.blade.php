<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin/build')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('admin/build')}}/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="{{asset('admin/build')}}/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{asset('admin/build')}}/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="{{asset('admin/build')}}/js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>
<body>
<!--/login-->

<div class="error_page">
    <!--/login-top-->

    <div class="error-top">
        <h2 class="inner-tittle page"><img src="{{asset('admin/build')}}/images/logo.png" height="80px" width="200px"></h2>
        <div class="login">
            <h3 class="inner-tittle t-inner">Login</h3>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" class="text" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}"  >
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="submit"><input type="submit" value="Login" ></div>
                <div class="clearfix"></div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <div class="new">
                    <p><a href="{{ route('password.request') }}">Forgot Password ?</a></p>
                    <p class="sign">Do not have an account ? <a href="{{url('register')}}" class="btn btn-primary btn-xs">Sign Up</a></p>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>


    </div>


    <!--//login-top-->
</div>

<!--//login-->
<!--footer section start-->
<div class="footer">
    <div class="error-btn">
        <a class="read fourth" href="{{url('/')}}">Return to Home</a>
    </div>
    <p style="color: #ffffff;">&copy 2017 Job Zone . All Rights Reserved </p>
</div>
<!--footer section end-->
<!--/404-->
<!--js -->
<script src="{{asset('admin/build')}}/js/jquery.nicescroll.js"></script>
<script src="{{asset('admin/build')}}/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin/build')}}/js/bootstrap.min.js"></script>
</body>
</html>