
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/home')}}" class="site_title"><span style="margin-left: 30px">Job Zone</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('/admin') }}/build/images/avater.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

                <ul class="nav side-menu">
                    <li><a href="{{url('/home')}}"><i class="fa fa-home"></i> Dashboard </a>

                    </li>
                    <li><a><i class="fa fa-server"></i>Job Category Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('category/add-category')}}">Add Category</a></li>
                            <li><a href="{{url('category/manage-category')}}">Manage Category</a></li>


                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Job Post Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/job-post/manage-job-post')}}">Manage Job Post</a></li>


                        </ul>
                    </li>




                    <li><a><i class="fa fa-id-card-o"></i>About Page Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('about/add-about')}}">Add About</a></li>
                            <li><a href="{{url('about/edit-about')}}">Update About Info</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-retweet"></i>Program Page Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('program/add-program')}}">Add Program</a></li>
                            <li><a href="{{url('program/edit-program')}}">Update Program Info</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-compress"></i>Contact Page Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('contact/add-contact')}}">Add Contact</a></li>
                            <li><a href="{{url('contact/edit-contact')}}">Update Contact Info</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-anchor"></i>Top Head Title Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('category/add-category')}}">Add Top Head Title</a></li>
                            <li><a href="{{url('category/manage-category')}}">Manage Top Head Title</a></li>


                        </ul>
                    </li>

                    <li><a><i class="fa fa-compress"></i>Social Link Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('social-link/add-social-link')}}">Add Social Link</a></li>
                            <li><a href="{{url('social-link/manage-social-link')}}">Manage Social Link </a></li>
                        </ul>
                    </li>

                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">

            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            {{--<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">--}}
                {{--<span class="glyphicon glyphicon-off" aria-hidden="true"></span>--}}
            {{--</a>--}}
        </div>
        <!-- /menu footer buttons -->
    </div>