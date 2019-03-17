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
                   <ul>
                       @forelse($jobsInfoById as $jobInfoById)

                       <li>
                           <div class="well">
                               <h4>{{$jobInfoById->company_name}}</h4>
                               <a href="{{url('/job/job-details-content/'.$jobInfoById->id)}}" target="_blank"><h4><strong>{{$jobInfoById->job_designation}}</strong></h4></a>
                               <h5>Education: {{$jobInfoById->educational_requirements}}</h5>
                               <h5>Experience: At Least {{$jobInfoById->experience_requirements}} year(s)</h5>
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
                              {{$jobsInfoById->links()}}
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