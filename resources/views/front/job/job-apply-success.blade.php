@extends('front.master')
@section('body')
    @include('front.includes.top-sub-navbar')

    <div class="container-fluid banner_full_bg">
        <div class="container">
            <div class="row">
                <div style="margin-top: 60px">

                    <h2 class="text-center"></h2>
                    <hr>


                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="well">
                                <h2 class="text-center text-success">Applied Successfully!</h2>
                                <hr>

                               <hr style="border-bottom: 1px solid #757575">
                                <h5><b>The employer will be able to review your application and if need, can contact with you. </b></h5>

                                <button class="btn btn-info col-sm-offset-8" style="background-color: #1abd9c"><a href="{{url('/')}}">Back To Home</a></button>

                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
@endsection