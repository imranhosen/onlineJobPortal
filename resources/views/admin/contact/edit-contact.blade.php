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
                                        <h1 class="text-center">Update Contact </h1>
                                        <hr>
                                        @if($message=Session::get('message'))
                                            <div class="well">
                                                <h3 class="text-center text-success">{{$message}}</h3>
                                            </div>

                                        @endif
                                        <form name="editAboutPostForm" class="form-horizontal" method="POST" action="{{url('contact/update-contact')}}" >
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Contact Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_one" class="form-control" id="inputEmail3" value="{{$editContactInfo->headline_one}}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Contact Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_one" class="form-control" rows="5">{{$editContactInfo->details_one}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Located Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_two" class="form-control" id="inputEmail3" value="{{$editContactInfo->headline_two}}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Located Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_two" class="form-control" rows="5">{{$editContactInfo->details_two}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" id="inputEmail3" value="{{$editContactInfo->email}}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Phone Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="phone" class="form-control" id="inputEmail3" value="{{$editContactInfo->phone}}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-9 col-sm-3">
                                                    <button type="submit" name="btn" class="btn btn-success btn-block">Update Contact Info</button>
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

