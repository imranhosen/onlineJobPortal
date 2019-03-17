<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Validator;
use App\Job;
use DB;
use Image;

class JobController extends Controller
{
    public function showJobPostForm(){
        $categories=Category::all();
        return view('front.job-post.add-job-post',['categories'=>$categories]);
    }
    public function addJobPost(Request $request){

        $this->validate($request, [
            'job_title' => 'required|min:5|max:100|regex:/^[\pL\s\-\.]+$/u',
            'job_designation' => 'required|min:5|max:100|regex:/^[\pL\s\-\.]+$/u',
            'vacancey' => 'required|digits_between:1,3',
            'category_id' => 'required',
            'educational_requirements' => 'required|min:1|max:100|regex:/^[\pL\s\-\/]+$/u',
            'experience_requirements' => 'required|min:1|max:100',
            'job_descripton' => 'required|min:5|max:1500',
            'job_location' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',
            'company_name' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',
            'company_logo' => 'required',
            'company_address' => 'required|min:5|max:200',
            'job_nature' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',
            'salary' => 'required|digits_between:4,10',
        ]);
//      return $request->all();

//        Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg');
        $companyLogo=$request->file('company_logo');
        $imageName=$companyLogo->getClientOriginalName();
        $imageTempPath=$companyLogo->getPathInfo();
        $derectory='images/company-logos/';
        $companyImageUrl=$derectory.$imageName;
        Image::make($companyLogo)->save($companyImageUrl);
//       return 'success';

        $jobPost=new Job();
        $jobPost->job_title=$request->job_title;
        $jobPost->job_designation=$request->job_designation;
        $jobPost->vacancey=$request->vacancey;
        $jobPost->category_id=$request->category_id;
        $jobPost->educational_requirements=$request->educational_requirements;
        $jobPost->experience_requirements=$request->experience_requirements;
        $jobPost->job_descripton=$request->job_descripton;
        $jobPost->job_location=$request->job_location;
        $jobPost->company_name=$request->company_name;
        $jobPost->company_logo= $companyImageUrl;
        $jobPost->company_address=$request->company_address;
        $jobPost->job_nature=$request->job_nature;
        $jobPost->salary=$request->salary;
        $jobPost->save();

        return redirect('employer/employer-dashboard')->with('message', '   Successful! -Your Job Under Review...');
    }
    public function totlalJobsById($id){

//        $blogInfo=DB::table('blogs')
//            ->join('categories', 'blogs.category_id', '=', 'categories.id' )
//            ->select('blogs.blog_title', 'categories.category_name')
//            ->get();
//
//        return $blogInfo;
//        $blogInfo=DB::table('categories')
//            ->join('jobs', 'categories.id', '=', 'jobs.category_id')
//
////                ->join('categories', 'jobs.category_id', '=', 'categories.id')
////
////            ->count();
//
//       echo $blogInfo;

        $totalJobById = DB::table('jobs')->where('category_id', '=', $id)->where('published', '=', 1)->count();

        echo $totalJobById;
    }

    public function manageJobPost(){
//        $jobsInfo=Job::orderBy('id', 'desc')->get();

        $jobsInfo=DB::table('jobs')
            ->join('categories', 'jobs.category_id', '=', 'categories.id')
            ->select('jobs.company_name', 'jobs.job_descripton', 'jobs.published', 'jobs.job_designation', 'jobs.id','jobs.spotlight', 'categories.category_name')
        ->orderBy('jobs.id', 'desc')->get();

        return view('admin.job-post.manage-job-post',['jobsInfo'=>$jobsInfo]);
    }



    public function unpublishedJobInfo($id){


        $unpublishedJobPost=Job::find($id);
        $unpublishedJobPost->published=0;
        $unpublishedJobPost->save();
        return redirect('/job-post/manage-job-post')->with('message', 'Job Post Unpublished Successfully!');
}
    public function publishedJobInfo($id){


        $publishedJobPost=Job::find($id);
        $publishedJobPost->published=1;
        $publishedJobPost->save();
        return redirect('job-post/manage-job-post')->with('message', 'Job Post Published Successfully!');
    }
    public function unhighlightedJobInfo($id){
        $unhighlightedJobPost=Job::find($id);
        $unhighlightedJobPost->spotlight=0;
        $unhighlightedJobPost->save();

        return redirect('job-post/manage-job-post')->with('message', 'Job Post Unhighlighted Successfully');
    }
    public function highlightedJobInfo($id){
        $highlightedJobPost=Job::find($id);
        $highlightedJobPost->spotlight=1;
        $highlightedJobPost->save();

        return redirect('job-post/manage-job-post')->with('message', 'Job Post Highlighted Successfully');
    }

    public function editJobInfo($id){
        $jobsInfo=Job::find($id);
        $categories=Category::all();
        return view('admin.job-post.edit-job-post',['jobsInfo'=>$jobsInfo, 'categories'=>$categories]);
    }
    public function deleteJobInfo($id){
        $jobInfo=Job::find($id);
        $imageUrl=$jobInfo->company_logo;
        unlink($imageUrl);
        $jobInfo->delete();

        return redirect('job-post/manage-job-post')->with('deleteMessage', 'Job Post Deleted Successfully');
    }
    public function updateJobInfo(Request $request){


        $this->validate($request, [
            'job_title' => 'required|min:5|max:100|regex:/^[\pL\s\-\.]+$/u',
            'job_designation' => 'required|min:5|max:100|regex:/^[\pL\s\-\.]+$/u',
            'vacancey' => 'required|digits_between:1,3',
            'category_id' => 'required',
            'educational_requirements' => 'required|min:1|max:100|regex:/^[\pL\s\-\/]+$/u',
            'experience_requirements' => 'required|min:1|max:100',
            'job_descripton' => 'required|min:5|max:1000',
            'job_location' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',
            'company_name' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',

            'company_address' => 'required|min:5|max:200',
            'job_nature' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',
            'salary' => 'required|digits_between:4,10',
        ]);
//      return $request->all();

//        Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg');


            if($request->file('company_logo')){
                $jobPost = Job::find($request->job_id);
               if($jobPost->company_logo) {
                   unlink($jobPost->company_logo);
               }
                $companyLogo=$request->file('company_logo');
                $imageName=$companyLogo->getClientOriginalName();
                $imageTempPath=$companyLogo->getPathInfo();
                $derectory='images/company-logos/';
                $companyImageUrl=$derectory.$imageName;

                Image::make($companyLogo)->save($companyImageUrl);

//       return 'success';

                $jobPost->job_title=$request->job_title;
                $jobPost->job_designation=$request->job_designation;
                $jobPost->vacancey=$request->vacancey;
                $jobPost->category_id=$request->category_id;
                $jobPost->educational_requirements=$request->educational_requirements;
                $jobPost->experience_requirements=$request->experience_requirements;
                $jobPost->job_descripton=$request->job_descripton;
                $jobPost->job_location=$request->job_location;
                $jobPost->company_name=$request->company_name;
                $jobPost->company_logo= $companyImageUrl;
                $jobPost->company_address=$request->company_address;
                $jobPost->job_nature=$request->job_nature;
                $jobPost->salary=$request->salary;

                $jobPost->save();

            }else{
                $jobPost = Job::find($request->job_id);
                $jobPost->job_title=$request->job_title;
                $jobPost->job_designation=$request->job_designation;
                $jobPost->vacancey=$request->vacancey;
                $jobPost->category_id=$request->category_id;
                $jobPost->educational_requirements=$request->educational_requirements;
                $jobPost->experience_requirements=$request->experience_requirements;
                $jobPost->job_descripton=$request->job_descripton;
                $jobPost->job_location=$request->job_location;
                $jobPost->company_name=$request->company_name;

                $jobPost->company_address=$request->company_address;
                $jobPost->job_nature=$request->job_nature;
                $jobPost->salary=$request->salary;
                $jobPost->save();
            }



        return redirect('job-post/manage-job-post')->with('message', 'Job details Update Successfuly!');
    }


}
