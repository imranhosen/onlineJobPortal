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
                                        <h1 class="text-center">Add Social Link </h1>
                                        <hr>
                                        @if($message=Session::get('message'))
                                            <div class="well">
                                                <h3 class="text-center text-success">{{$message}}</h3>
                                            </div>

                                        @endif
                                        <form name="editAboutPostForm" class="form-horizontal" method="POST" action="{{url('social-link/new-social')}}" >
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Social Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Social Name" >
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Social Class</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="class" class="form-control" id="inputEmail3" placeholder="Social Class" >
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Social Link</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="link" class="form-control" id="inputEmail3" placeholder="Social Link" >
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-9 col-sm-3">
                                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Social Info</button>
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

