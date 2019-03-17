<div class="container-fluid banner_full_bg">
    <div class="container container_special_class">


        <div class="row banner_middle_bg" style="padding-top: 0px">
            <a href="{{url('/')}}">

                <img src="{{asset('front')}}/images/logo.png" height="74px" width="200px" style="position:relative; top: 40px; left:10px">
            </a>


            <div class="col-xs-12 col-sm-12 col-md-12 logo_search_container">
                <div class="row">

                    <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 search_container">
                        <form method="get" action="{{url('search/new-search')}}">
                            <div class="home_search_container">

                                <div class="col-xs-12 col-sm-4 col-md-4 no_padding_left no_padding_right border_right mobile_bottom">
                                    <input name="job_location" maxlength="60" type="text" class="form-control search_textbox" aria-label="..." placeholder="Location, Company" title="Type Designation/company"/>


                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 no_padding_left no_padding_right border_right mobile_bottom">
                                    <input name="company_name" maxlength="60" type="text" class="form-control search_textbox" aria-label="..." placeholder="Company Name" title="Type Designation/company"/>


                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 no_padding_left no_padding_right border_right mobile_bottom">
                                    <input name="experience_requirements" maxlength="60" size="20" type="text" class="form-control search_textbox" aria-label="..." placeholder="Experience (years)" title="Type Designation/company"/>


                                </div>

                                <div class="col-xs-6 col-md-1 col-sm-2 home_search_btn_container no_padding_left no_padding_right">
                                    <input type="submit" value="Search" class="btn home_search_btn center-block"/>
                                </div>


                                <p class="advanced_search"><a href="#" style="color:#999999">.</a></p>
                            </div><!-- /input-group -->
                        </form>
                    </div><!-- /.col-lg-6 -->

                    <div style="padding-top:150px;">
                    </div>
                </div>
            </div>
        </div> <!-- End of Row -->
    </div> <!-- End of Container -->
</div>