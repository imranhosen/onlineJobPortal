@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Manage Job Post <small>Job</small></h2>
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
                                        <th>Company Name</th>
                                        <th>Job Designation</th>
                                        <th>Category Name</th>
                                        <th>Publication Satus</th>
                                        <th>Spotlight Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php $i=1;?>
                                    @foreach($jobsInfo as $jobInfo)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$jobInfo->company_name}}</td>
                                            <td>{{$jobInfo->job_designation}}</td>
                                            <td>{{$jobInfo->category_name}}</td>
                                            <td>{{$jobInfo->published==1?'Published':'Unpublished'}}</td>
                                            <td>{{$jobInfo->spotlight==1?'Highlighted':'Unhighlighted'}}</td>
                                            <td>
                                                @if($jobInfo->spotlight==1)
                                                    <a href="{{url('/job-post/unhighlighted-job-post/'.$jobInfo->id)}}" class="btn btn-info btn-xs" title="Unhighlighted">
                                                        <span class="glyphicon glyphicon-export"></span>
                                                    </a>
                                                @else
                                                    <a href="{{url('/job-post/highlighted-job-post/'.$jobInfo->id)}}" class="btn btn-warning btn-xs">
                                                        <span class="glyphicon glyphicon-import" title="Highlighted"></span>
                                                    </a>
                                                @endif
                                                @if($jobInfo->published==1)
                                                    <a href="{{url('/job-post/unpublished-job-post/'.$jobInfo->id)}}" class="btn btn-success btn-xs">
                                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                                    </a>
                                                @else
                                                    <a href="{{url('/job-post/published-job-post/'.$jobInfo->id)}}" class="btn btn-warning btn-xs">
                                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                                    </a>
                                                @endif
                                                <a href="{{url('job-post/edit-job-post/'.$jobInfo->id)}}" class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a href="{{url('job-post/delete-job-post/'.$jobInfo->id)}}" onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-xs">
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