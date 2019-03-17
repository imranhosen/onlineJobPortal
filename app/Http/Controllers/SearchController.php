<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class SearchController extends Controller
{
    public function showSearchPage(Request $request){
        $getLocation=$request->job_location;
        $getCompanyName=$request->company_name;
        $getExperience_equirement=$request->experience_requirements;
        $jobSearchResultRows=Job::where('job_location', 'LIKE', '%'.$getLocation.'%')->where('company_name', 'LIKE', '%'.$getCompanyName.'%')->where('experience_requirements', 'LIKE', '%'.$getExperience_equirement.'%')->OrderBy('id', 'desc')->count();
        $jobSearchResult=Job::where('job_location', 'LIKE', '%'.$getLocation.'%')->where('company_name', 'LIKE', '%'.$getCompanyName.'%')->where('experience_requirements', 'LIKE', '%'.$getExperience_equirement.'%')->OrderBy('id', 'desc')->paginate(10);
        return view('front.search.new-search',[
                        'jobSearchResults'=>$jobSearchResult,
                        'jobSearchResultRows'=>$jobSearchResultRows
        ]);
    }


}
