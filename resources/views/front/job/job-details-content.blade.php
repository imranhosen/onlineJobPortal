@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">

                    <div class="col-sm-9 job-category-content">
                        <div class="well">
                            <h2 class="text-center">Jobs matching your search criteria</h2>

                        </div>
                        <div class="well">
                            <h4>{{$jobInfoById->job_designation}}</h4>
                            <h3 style="color: darkgreen"><strong>{{$jobInfoById->company_name}}</strong></h3>
                            <hr>
                            <h4>Job Description / Responsibility</h4>
                            <p>{{$jobInfoById->job_descripton}}</p>
                            <br>
                            <h4>Job Nature</h4>
                            <h5>{{$jobInfoById->job_nature}}</h5>

                            <br>
                            <h4>Educational Requirements</h4>
                            <h5>{{$jobInfoById->educational_requirements}} from any reputed institution.</h5>

                            <br>
                            <h4>Experience Requirements</h4>
                            <h5>{{$jobInfoById->experience_requirements}} year(s)</h5>

                            <br>
                            <h4>Job Location</h4>
                            <h5>{{$jobInfoById->job_location}}</h5>
                            <br>
                            <h4>Salary</h4>
                            <h5>{{$jobInfoById->salary}}</h5><br><br><br>


                        @if(Session::get('userId'))
                                <a href="{{url('job/job-apply-success/'.$jobInfoById->id)}}" class="col-sm-offset-6 btn btn-success">Apply Online</a>
                            @else
                            <a href="{{url('user/user-login-apply')}}" class="col-sm-offset-6 btn btn-success">Apply Online</a>
                          @endif
                            <h5  class="col-sm-offset-5">Application Deadline : Oct 31, 2017</h5>
                        </div>
                        <div class="well">

                            <p><b>Company Information</b><br>
                                {{$jobInfoById->company_name}}<br>
                                Address : {{$jobInfoById->company_address}}<br>
                                Web : www.crescentint.com/</p>

                        </div>

                    </div>

                    <div class="col-sm-3">
                        <h4 class="text-center">Advertise Goes Here</h4>

                        <img src="{{asset('front')}}/images/side-bar-ad.png" width="100%">
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection