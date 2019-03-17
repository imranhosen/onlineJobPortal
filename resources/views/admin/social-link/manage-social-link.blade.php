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
                                        <th>Social  Name</th>
                                        <th>Logo class</th>
                                        <th>Link</th>
                                        <th>Icon</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php $i=1;?>
                                    @foreach($socialLink as $socialLink)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$socialLink->name}}</td>
                                            <td>{{$socialLink->class}}</td>
                                            <td>{{$socialLink->link}}</td>
                                            <td><a target="-_blank" href="{{$socialLink->link}}" class="{{$socialLink->class}}">{{$socialLink->name}}</a></td>

                                            <td>

                                                <a href="{{url('social-link/edit-social-link/'.$socialLink->id)}}" class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a href="{{url('social-link/delete-social-link/'.$socialLink->id)}}" onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-xs">
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