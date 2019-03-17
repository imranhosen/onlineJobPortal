@extends('admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="container-fluid banner_full_bg">
                        <div class="container">
                            <div class="row">
                                <div style="margin-top: 10px">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h1 class="text-center">About Us</h1>
                                        <hr>
                                        @if($message=Session::get('message'))
                                            <div class="well">
                                                <h3 class="text-center text-success">{{$message}}</h3>
                                            </div>

                                        @endif
                                        <form name="editAboutPostForm" class="form-horizontal" method="POST" action="{{url('about/new-about')}}" >
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">About Us Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="about_headline" class="form-control" id="inputEmail3" placeholder="About Us Title" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">About Us Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="about_details" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Our Mission Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="ourmission_headline" class="form-control" id="inputEmail3" placeholder="Our Mission Title" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Our Mission Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="ourmission_details" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Our Vission Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="vission_headline" class="form-control" id="inputEmail3" placeholder="Our Vission Title" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Our Vission Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="vission_details" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-9 col-sm-3">
                                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save About us Info</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

