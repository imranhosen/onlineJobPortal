<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;
use Session;
Use Mail;
use App\Category;

class EmployerController extends Controller
{
    public function showCreateAccountPage(){
        return view('front.employer.create-account');
    }

    public function showDashBoardPage(){
        $categories=Category::all();
        return view('front.employer.employer-dashboard',['categories'=>$categories]);

    }
    public function newEmployer(Request $request)
    {

        $employerInfo = new Employer();
        $employerInfo->full_name = $request->full_name;
        $employerInfo->email = $request->email;
        $employerInfo->password = bcrypt($request->password);
        $employerInfo->company_name = $request->company_name;
        $employerInfo->save();

        Session::put('employerId', $employerInfo->id);
        Session::put('employerFullName', $employerInfo->full_name);

//        $data = $employerInfo->toArray();
//
//
//        Mail::send('front.email.congratulation-mail', $data, function ($message) use ($data) {
//            $message->to($data['email']);
//            $message->subject('Congratulation Mail');
//            return redirect('/employer-dashboard');
//
//        });
        return redirect('/employer/employer-dashboard');
    }

    public function employerLogin(Request $request){
        $employer=Employer::where('email', $request->employer_email)->first();

        if($employer){
            if(password_verify($request->employer_password, $employer->password)){
                Session::forget('userId', $employer->id);
                Session::forget('userFullName', $employer->full_name);
                Session::put('employerId', $employer->id);
                Session::put('employerFullName', $employer->full_name);

                return redirect('employer/employer-dashboard');

            }else{
              return redirect('/');
            }
        }else{
           return redirect('/');
        }

    }

    public function employerLogout(){
        Session::forget('employerId');
        Session::forget('employerFullName');

        return redirect('/');
    }


    public function showJobHistory(){
         return view('front.employer.show-job-histroy');
}


}
