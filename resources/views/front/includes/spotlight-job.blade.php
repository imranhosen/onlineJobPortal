<div class="col-xs-12 col-sm-12 col-md-12 spotlight_full_container">
    <h2 class="spotlight">Spotlight Jobs</h2>
    <div class="row">

        @foreach($spotLightJobs as $spotLightJob)

        <div class="col-xs-12 col-sm-4 col-md-4 spotlight_jobs_container">
            <div class="spot_light_each_container">
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3 spotlight_logo_each">
                        <img src="{{$spotLightJob->company_logo}}" alt="logo" height="67px" width="65px" class="center-block "/>
                    </div>

                    <div class="col-xs-8 col-sm-9 col-md-9 spotlight_details_container">
                        <h3>{{$spotLightJob->company_name}}</h3>

                        <p><a alt="" title="{{$spotLightJob->company_name}}" class="more_text" target="_blank" href="{{url('/job/job-details-content/'.$spotLightJob->id)}}"> <i class="glyphicon glyphicon-chevron-right"></i> {{$spotLightJob->job_designation}}</a></p>
                        <p> <i class="glyphicon glyphicon-map-marker"></i> {{$spotLightJob->job_location}}</p>


                        <div class="clearfix"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>

@endforeach

    </div>

</div>


<div class="clearfix"></div>

<div class="common_google_ads img-responsive ad_bg hidden-xs">
    <!-- /85406138/Chakri_HP_Middle_970x90 -->
    <div id='div-gpt-ad-1440659257413-0'>
        <script type='text/javascript'>googletag.cmd.push(function(){googletag.display('div-gpt-ad-1440659257413-0');});</script>
    </div>
</div>
<div class="clearfix"></div>


<div class="clearfix"></div>

</div>