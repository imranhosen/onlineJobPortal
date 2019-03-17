@extends('front.master')
@section('body')
    @include('front.includes.top-main-navbar')
    @include('front.includes.slider')
    <div class="container-fluid content_full_bg">
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>
                @include('front.includes.job-categories')

                <div class="clearfix"></div>


                @include('front.includes.spotlight-job')
            </div>

        </div>
    </div>
    @endsection