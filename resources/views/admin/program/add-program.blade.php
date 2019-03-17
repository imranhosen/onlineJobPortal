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
                                        <h1 class="text-center">Program </h1>
                                        <hr>
                                        @if($message=Session::get('message'))
                                            <div class="well">
                                                <h3 class="text-center text-success">{{$message}}</h3>
                                            </div>

                                        @endif
                                        <form name="editAboutPostForm" class="form-horizontal" method="POST" action="{{url('program/new-program')}}" >
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Communication Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_one" class="form-control" id="inputEmail3" placeholder="Communication Title" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Communication Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_one" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Management Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_two" class="form-control" id="inputEmail3" placeholder="Management Title" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Management Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_two" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">HR Management Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="headline_three" class="form-control" id="inputEmail3" placeholder="HR Management Title" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">HR Management Details</label>
                                                <div class="col-sm-9">
                                                    <textarea name="details_three" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-9 col-sm-3">
                                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Program Info</button>
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

