@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container-fuild">
            <div class="row">
                <div>

                    <img src="{{asset('front')}}/images/contact-us.jpg" width="100%">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div>
                    <br>
                    <h2 class="text-success">|| {{$showContactInfo->headline_one}}</h2>
                    <p>
                        {{$showContactInfo->details_one}}
                    </p>
                    <br><br>

                    <h3>|| {{$showContactInfo->headline_two}}</h3>
                    <address>
                        <p>{{$showContactInfo->details_two}}</p>
                        <p>Dhaka 1215,<br> Bangladesh.</p>
                        <p>{{$showContactInfo->email}}</p>
                        <p>{{$showContactInfo->phone}}</p>
                    </address>

                    <br> <br>
                </div>
            </div>
        </div>
    </div>
@endsection