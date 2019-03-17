@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Default Example <small>Users</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>


                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                @if($message=Session::get('message'))
                                    <h3 class="text-center text-success">{{$message}}</h3>
                                    @elseif($deleteMessage=Session::get('deleteMessage'))
                                    <h3 class="text-center text-danger">{{$deleteMessage}}</h3>
                                @endif
                                <table id="dataTable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php $i=1;?>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{$category->category_description}}</td>
                                        <td>{{$category->publication_status==1?'Published':'Unpublished'}}</td>
                                        <td>
                                            @if($category->publication_status==1)
                                            <a href="{{url('category/unpublished-category/'.$category->id)}}" class="btn btn-success btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                            @else
                                            <a href="{{url('category/published-category/'.$category->id)}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                            @endif
                                            <a href="{{url('category/edit-category/'.$category->id)}}" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a href="{{url('category/delete-category/'.$category->id)}}" onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>

                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>



    @endsection