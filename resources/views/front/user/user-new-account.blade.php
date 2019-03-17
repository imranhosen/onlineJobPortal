@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">
                    <div class="col-sm-8 col-sm-offset-2">



                        <h2 class="text-center">Create An Account</h2>

                        <hr>
                        <div class="well">
                            <form class="form-horizontal" action="{{url('user/new-user')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="full_name" class="form-control" id="inputEmail3" placeholder="Full Name">
                                        <span class="text-danger">{{$errors->has('full_name')?$errors->first('full_name'):''}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Password">
                                        <span class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Mobile Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="mobile_number" class="form-control" id="inputEmail3" placeholder="Mobile Number">
                                        <span class="text-danger">{{$errors->has('mobile_number')?$errors->first('mobile_number'):''}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Your Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="user_image" accept="image/*" >

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-sm-3 col-sm-offset-9 ">
                                        <input type="submit" name="user_btn" class="form-control btn-primary" id="inputEmail3" value="Signup">

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
