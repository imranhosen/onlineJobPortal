<div class="container-fluid footer_top_full_container">
    <div class="container footer_top_middle_container">
        {{--<div class="row">--}}
            {{--<h3 class="hidden-xs">Find Jobs in</h3>--}}
            {{--<div class="footer_top_list hidden-xs">--}}
                {{--<div class="hidden-xs col-sm-12 col-md-12 no_padding_left">--}}
                    {{--<ul>--}}
                        {{--<li><a href="/job?loc=13">Dhaka</a></li>--}}
                        {{--<li><a href="/job?loc=9">Chittagong</a></li>--}}
                        {{--<li><a href="/job?loc=54">Rajshahi</a></li>--}}
                        {{--<li><a href="/job?loc=27">Khulna</a></li>--}}
                        {{--<li><a href="/job?loc=62">Sylhet</a></li>--}}
                        {{--<li><a href="/job?loc=56">Rangpur</a></li>--}}
                        {{--<li><a href="/job?loc=4">Barisal</a></li>--}}
                        {{--<li><a href="/job?loc=39">Mymensingh</a></li>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}

        {{--</div>--}}
        <!--End of row-->

        <div class="row">
            <div class="about_chakri_container">
                <div class="hidden-xs col-sm-4 col-md-4 footer_each_border about_first_container">
                    <h4> About Job Zone</h4>
                    <p>{{str_limit($footerAboutDetails->about_details, 500, '...')}}<a href="{{url('/about/about-us')}}" target="_blank">more</a></p>

                </div>

                <div class="col-xs-6 col-sm-2 col-md-2 footer_each_border">
                    <h4> Company</h4>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/page/policy">Privacy Policy</a></li>
                        <li><a href="javascript: void(0)">Careers</a></li>
                        <li><a href="/page/press" target="_blank">Press</a></li>
                    </ul>
                </div>

                <div class="hidden-xs col-sm-2 col-md-2 footer_each_border">
                    <h4>Job Seekers</h4>
                    <ul>
                        <li><a href="">Create Account</a></li>
                        <li><a href="/seeker">My Jobs Zone</a></li>
                        <!--                            <li><a href="#">Video Guides</a></li>-->
                        <li><a href="/page/seeker-faq">FAQ</a></li>
                        <li><a href="/page/jobseeker-terms">Jobseeker Terms &amp; Conditions</a></li>
                    </ul>

                </div>

                <div class="hidden-xs col-sm-2 col-md-2 footer_each_border">
                    <h4>Employers</h4>
                    <ul>
                        <li><a href="/employer-registration">Create Account</a></li>
                        <li><a href="/employer">Post a Job</a></li>
                        <li><a href="/page/employer-faq">FAQ</a></li>
                        <li><a href="/page/employer-terms">Employers Terms &AMP; Conditions</a></li>
                        <li><a href="/service">Services</a></li>
                    </ul>

                </div>

                <div class="col-xs-6 col-sm-2 col-md-2">
                    <h4>Follow</h4>
                    <ul class="fa-ul">
                        @foreach($socialLinkInfo as $socialLink)
                        <li><a href="{{$socialLink->link}}" target="_blank"><i class="{{$socialLink->class}}"></i> {{$socialLink->name}}</a></li>
                    @endforeach
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>
</div>


<div class="container-fluid footer_full_container">
    <div class="container">

        <div class="col-xs-12 col-sm-12 col-md-12 footer_middle_container">
            <p>&COPY; 2017 Job Zone Limited. All Rights Reserved. <a href="/page/terms">Terms of use</a>&nbsp;&nbsp;<a href="/page/policy">Privacy Statement</a></p>

        </div>


    </div>
</div>
