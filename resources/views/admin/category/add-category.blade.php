@extends('admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Job Category<small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('/category/new-category')}}">
                                    {{csrf_field()}}
                                    @if($message=Session::get('message'))
                                        <h3 class="text-center text-success">{{$message}}</h3>
                                    @endif
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cateogry Name <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="category_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category Description<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="6" name="category_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Publication Status</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="publication_status" class="form-control">
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button"><a href="{{url('category/manage-category')}}" style="color: white;">Cancel</a></button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" name="category_btn" class="btn btn-success">Submit</button>
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
    @endsection