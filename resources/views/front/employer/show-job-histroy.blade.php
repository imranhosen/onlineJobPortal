@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">

                    <h2 class="">Employer Dashboard</h2>
                    <hr>

                    <div class="col-sm-3">
                        <br>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="{{url('employer/employer-dashboard')}}">Create A Job Post</a>
                                    </h4>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="{{url('employer/show-job-history')}}">Show Job History</a>

                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Manage Job Post</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="#">Edit Job</a><br>
                                        <a href="#">Delete Job</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="col-sm-12">

                          <table class="table table-border table-striped table-hover">
                              <tr>
                                  <th>Sl No. </th>
                                  <th>Job Title</th>
                                  <th>Job Category</th>
                                  <th>Approval Status</th>
                                  <th>Applied</th>
                              </tr>

                              <tr>
                                  <td>Demo</td>
                                  <td>Demo</td>
                                  <td>Demo</td>
                                  <td>Demo</td>
                                  <td>Demo</td>
                              </tr>
                          </table>


                    </div>
                    <div style="height: 400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection