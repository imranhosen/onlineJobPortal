<?php use App\Http\Controllers\JobController;
$totalJobsByid= new JobController();
?>
<div class="col-xs-12 col-sm-12 col-md-12 category_search_container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 category_job_listing_container">
            <h2>Category Job Listing</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <h4></h4>
                </div>
                <div class="hidden-xs col-sm-6 col-md-6 industry_category_heading">
                    <h4></h4>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 no_padding_left no_right_padding category_job_listing_scroll ">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 sp_border">
                        <div class="list_item_container">
                            <ul>
                                @foreach($leftCategories as $leftCategory)
                                <li><a href="{{url('/category-content/job-category-content/'.$leftCategory->id)}}" target="_blank">{{$leftCategory->category_name}} <span class="total_job">({{$totalJobsByid->totlalJobsById($leftCategory->id)}})</span></a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>

                    <div class="hidden-xs col-sm-6 col-md-6">
                        <div class="list_item_container">
                            <ul>
                                @foreach($rightCategories as $rightCategory)
                                <li><a href="{{url('/category-content/job-category-content/'.$rightCategory->id)}}" target="_blank">{{$rightCategory->category_name}}<span class="total_job">({{$totalJobsByid->totlalJobsById($rightCategory->id)}})</span></a></li>
                                @endforeach




                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- End of Row -->
            </div>

        </div>



    </div>
    <div class="clearfix"></div>

</div> <!--End of Browse Jobs-->