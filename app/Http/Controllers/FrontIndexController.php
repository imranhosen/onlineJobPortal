<?php

namespace App\Http\Controllers;

use App\Category;
use App\Employee;
use App\SocialLink;
use Illuminate\Http\Request;
use App\Job;
use Illuminate\Support\Facades\Session;

class FrontIndexController extends Controller
{
    public function showHome(){
        $socialLinkInfo=SocialLink::all();
        $leftCategories=Category::take(11)->get();
        $rightCategories=Category::skip(11)->take(100)->get();
        $spotLightJob=Job::where('spotlight', '1')->where('published', 1)->orderBy('id', 'desc')->get();
        return view('front.home.home-content',[
            'leftCategories'=>$leftCategories,
            'rightCategories'=>$rightCategories,
            'spotLightJobs'=>$spotLightJob,
            'socialLinkInfo'=>$socialLinkInfo,
        ]);


    }


}
