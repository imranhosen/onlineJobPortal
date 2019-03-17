@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">

                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="well">

                        <h2 class="text-center">Create Account (Employer)</h2>
                            <hr>
                    <form class="form-horizontal" method="POST" action="{{url('employer/new-employer')}}">
                        {{csrf_field()}}
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
                            <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="company_name" class="form-control" id="inputEmail3" placeholder="Company Name">
                                <span class="text-danger">{{$errors->has('company_name')?$errors->first('company_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-2 col-sm-offset-10 ">
                                <input type="submit" name="btn" class="form-control btn-primary">

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