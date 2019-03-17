@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">
                    <div class="col-sm-8 col-sm-offset-2">



                        <h2 class="text-center">User Login</h2>

                        <hr>
                        <div class="well">
                            <form class="form-horizontal" method="POST" action="{{url('/employee/login-apply')}}">

                                {{csrf_field()}}
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        <span class="text-danger">{{$errors->has('job_title')?$errors->first('job_title'):''}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Password">
                                        <span class="text-danger">{{$errors->has('job_title')?$errors->first('job_title'):''}}</span>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-3 col-sm-offset-9 ">
                                        <input type="submit" name="btn" class="form-control btn-primary" id="inputEmail3" value="Login">

                                    </div>


                                </div>
                                <div class="form-group">

                                    <div class="col-sm-9 col-sm-offset-3">
                                        <a href="{{url('user/user-new-account')}}">Don't have account?</a>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
