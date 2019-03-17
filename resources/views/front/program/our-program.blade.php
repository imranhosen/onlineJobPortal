@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container-fuild">
            <div class="row">
                <div>

                    <img src="{{asset('front')}}/images/our-program.jpg" width="100%">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div>
                    <br>
                    <h2 class="text-success">|| {{$showProgramInfo->headline_one}}</h2>
                    <p>
                        {{$showProgramInfo->details_one}}
                    </p>
                    <br><br>

                    <h2 class="text-success">|| {{$showProgramInfo->headline_two}}</h2>
                    <p>
                        {{$showProgramInfo->details_two}}
                    </p>
                    <br><br>

                    <h2 class="text-success">|| {{$showProgramInfo->headline_three}}</h2>
                    <p>
                        {{$showProgramInfo->details_three}}
                    </p>
                    <br><br>

                </div>
            </div>
        </div>
    </div>
@endsection