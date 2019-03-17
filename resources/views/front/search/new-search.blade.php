@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">
                    <div class="col-sm-9 job-category-content">
                        <h2 class="text-center">Jobs matching your search criteria</h2>
                        <hr>

                        <h4>Total Match Job <span class="badge"> {{$jobSearchResultRows}}</span></h4>
                        <hr>
                        <ul>
                            @forelse($jobSearchResults as $jobSearchResult)

                                    <li>
                                        <div class="well">
                                            <h4>{{$jobSearchResult->company_name}}</h4>
                                            <a href="{{url('/job/job-details-content/'.$jobSearchResult->id)}}" target="_blank"><h4><strong>{{$jobSearchResult->job_designation}}</strong></h4></a>
                                            <h5>Education: {{$jobSearchResult->educational_requirements}}</h5>
                                            <h5>Experience: At Least {{$jobSearchResult->experience_requirements}} year(s)</h5>
                                            <h5 class="deadline">Deadline:<b>24-Nov-2017</b></h5>

                                        </div>
                                    </li>
                                    @empty
                                        <h2 class="text-center well text-danger">Sorry, No Job Found Please keep in touch</h2>
                                        <div>
                                            <a href="{{url('/')}}" class="btn btn-primary col-sm-offset-10" style="background-color: #1abd9c"><< Back</a>
                                        </div>

                                   
                            @endforelse
                            <div>
                                {{$jobSearchResults->links()}}
                            </div>
                        </ul>


                    </div>
                    <div class="col-sm-3">
                        <h4 class="text-center">Advertise Goes Here</h4>

                        <img src="{{asset('front')}}/images/side-bar-ad-bl.jpg" width="100%">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection