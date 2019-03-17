@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container-fuild">
            <div class="row">
                <div>

                    <img src="{{asset('front')}}/images/about-us.jpg" width="100%">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div>
                <br>
                <h2 class="text-success">|| {{$showAboutUsInfo->about_headline}}</h2>
                <p>
                    {{$showAboutUsInfo->about_details}}
                </p>
                <br><br>
                <h3 class="text-success">|| {{$showAboutUsInfo->ourmission_headline}}</h3>
                <p>
                    {{$showAboutUsInfo->ourmission_details}}
                </p>

                <br><br>
                <h3 class="text-success">|| {{$showAboutUsInfo->vission_headline}}</h3>
                <p>
                    {{$showAboutUsInfo->vission_details}}
                </p>
                <br> <br>
            </div>
        </div>
        </div>
    </div>
@endsection