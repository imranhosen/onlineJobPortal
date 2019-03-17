<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class JobDetailsController extends Controller
{
    public function showJobDeatilsContent($id){
        $jobInfoById=Job::find($id);
        return view('front.job.job-details-content', ['jobInfoById'=>$jobInfoById]);
    }

    public function showSuccessMessageForm($id){
        $jobInfoById=Job::find($id);
        return view('front.job.job-apply-success', ['jobInfoById'=>$jobInfoById]);
    }

}
