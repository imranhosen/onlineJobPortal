<div class="container-fluid" >
    <div class="row">
        <div style="position: fixed; top:0px; background-color: #2a3f54; color:#26e2bf; display: block; z-index: 1; width: 100%" >
            <div class="container" style="margin-top: 2px">
                <p style="float: left">Info@job-zone.com </p>
                <p style="float:right">Need any hlep? Call us +8801922-646558 | 24X7</p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-fixed-top" style="position: fixed; top:25px;">
    <div class="container-fluid  menu">
        <div class="container">
            <div class="row header_specl_class">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header navbar_logo" style="display: inline;">
                    <a href="{{url('/')}}" style="float: left; margin-right: 5PX;"><img src="{{asset('front')}}/images/logo.png" height="50px" width="150px" alt="Job Zone" class="header_logo" data-pagespeed-no-transform /></a>


                    <a class="btn btn-sm navbar-btn sign_in_menu" style="display: none;" href="/registration" onClick="_gaq.push(['_trackEvent', 'ButtonClick', 'Register', '', , true]);">Register</a>
                    <button type="button" class="navbar-toggle collapsed toogle_reg" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav menu_left">
                        <!--                                <li></li> -->
                        <li><a href="{{url('/')}}">Jobs</a></li>


                        <li><a href="{{url('/about/about-us')}}">About us</a></li>
                        <li><a href="{{url('/programs/our-programs')}}">Progarams</a></li>
                        <li><a href="{{url('/contact/contact-us')}}">Contact us</a></li>


                    </ul>

                    <ul class="nav navbar-nav navbar-right menu_right">
                        @if(Session::get('employerId'))
                            <li>

                                    <a href="{{url('/employer/employer-dashboard')}}"><button type="button" class="btn btn-sm nav_right_btn">Post a Job</button></a></li>




                            <li><a href="{{url('employer/logout')}}" class=""> Logout</a></li>
                            @else
                            @if(Session::get('userId'))
                                <li><a>{{$userInfo->full_name}}</a></li>
                                <li><a href="{{url('user/user-dashboard')}}"><img src="{{asset($userInfo->user_image)}}" width="35px" height="35px" style="border:2px solid #909090"></a></li>
                                <li><a href="{{url('user/logout')}}">Logout</a></li>

                               <li> <a><button type="button" class="btn btn-sm nav_right_btn" data-toggle="modal" data-target="#myModal">Post a Job</button></a></li>


                            @else
                            <li><a href="{{url('user/user-login')}}">Login</a></li>
                            <li><a href="{{url('user/user-new-account')}}" >Register</a></li>
                        <li>
                            <a><button type="button" class="btn btn-sm nav_right_btn" data-toggle="modal" data-target="#myModal">Post a Job</button></a></li>

                            @endif
                            @endif




                    </ul>



                    <!--After  Login -->

                </div><!-- /.navbar-collapse -->

            </div>


        </div> <!-- End of Container-->
    </div><!-- /.container-fluid -->
    <div class="clearfix"></div>
</nav>

<div class="container">

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Employer Login Panel</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('employer/login')}}" method="post" >
                        {{csrf_field()}}
                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>

                        <input type="text" name="employer_email" class="form-control" id="inputEmail3" placeholder="Email">
                        <span class="text-danger">{{$errors->has('employer_email')?$errors->first('employer_email'):''}}</span>
                        <label for="inputEmail3" class="col-sm-3 control-label">Password</label>

                        <input type="password" name="employer_password" class="form-control" id="inputEmail3" placeholder="Password">
                        <span class="text-danger">{{$errors->has('employer_password')?$errors->first('employer_password'):''}}</span>
                        <br>
                        <input type="submit" class="btn btn-primary">

                        <a href="{{url('employer/create-account')}}">Don't Have Account?</a>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
