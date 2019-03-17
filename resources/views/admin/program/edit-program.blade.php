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
                                        <form name="editAboutPostForm" class="form-horizontal" method="POST" action="{{url('program/update-program')}}" >
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Management Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_one" class="form-control" id="inputEmail3" value="{{$editProgramInfo->headline_one}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Management Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_one" class="form-control" rows="5">{{$editProgramInfo->details_one}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">HR Management Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_two" class="form-control" id="inputEmail3" value="{{$editProgramInfo->headline_two}}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">HR Management Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_two" class="form-control" rows="5">{{$editProgramInfo->details_two}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">HR Management Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_three" class="form-control" id="inputEmail3" value="{{$editProgramInfo->headline_three}}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">HR Management Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_three" class="form-control" rows="5">{{$editProgramInfo->details_three}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-9 col-sm-3">
                                                    <button type="submit" name="btn" class="btn btn-success btn-block">Update About us Info</button>
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

