<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JobCategoryContentController extends Controller
{
    public function showJobCategoryContent($id){


        $jobsInfoById = DB::table('jobs')->where('category_id', '=', $id)->where('published', '=', 1)->paginate(3);

        return view('front.category-content.job-category-content',['jobsInfoById'=>$jobsInfoById]);
    }
}
