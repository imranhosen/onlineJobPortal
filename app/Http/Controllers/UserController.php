<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Image;
use Session;

class UserController extends Controller
{
    public function showLoginForm(){
        return view('front.user.user-login');
    }
    public function showLoginApplyForm(){
        return view('front.user.user-login-apply');
    }

    public function showCreateAccountForm(){
        return view('front.user.user-new-account');
    }

    public function showUserDashboard(){
        return view('front.user.user-dashboard');
    }


    public function newUserAccount(Request $request){

        $this->validate($request, [
        'full_name' => 'required|min:5|max:100|regex:/^[\pL\s\-\.]+$/u',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required',
            'mobile_number' => 'required|regex:/(01)[5-9][0-9]{8}/',
            'user_image' => 'required',

        ]);

        $userImage=$request->file('user_image');
        $imageName=$userImage->getClientOriginalName();
        $imageTempPath=$userImage->getPathInfo();
        $derectory='images/user-images/';
        $userImageUrl=$derectory.$imageName;
        Image::make($userImage)->save($userImageUrl);
//     return 'success';

        $newUser=new Employee();
        $newUser->full_name=$request->full_name;
        $newUser->email=$request->email;
        $newUser->password=bcrypt($request->password);
        $newUser->mobile_number=$request->mobile_number;
        $newUser->user_image=$userImageUrl;

        $newUser->save();

        Session::put('userId', $newUser->id);
        Session::put('userFullName', $newUser->full_name);
        return redirect('user/user-dashboard');
    }
    public function employeeLogin(Request $request){

        $employee=Employee::where('email', $request->email)->first();


        if($employee){
            if(password_verify($request->password, $employee->password)){
                Session::forget('employerId');
                Session::forget('employerFullName');
                Session::put('userId', $employee->id);
                Session::put('userFullName', $employee->full_name);




                    return redirect('user/user-dashboard');



            }else{
                return redirect('user/user-login');
            }
        }else{
            return redirect('user/user-login');
        }

    }
    public function employeeLogout(){
        Session::forget('userId');
        Session::forget('userFullName');

        return redirect('/');
    }

    public function employeeLoginApply(Request $request){

        $employee=Employee::where('email', $request->email)->first();


        if($employee){
            if(password_verify($request->password, $employee->password)){
                Session::forget('employerId');
                Session::forget('employerFullName');
                Session::put('userId', $employee->id);
                Session::put('userFullName', $employee->full_name);




                return redirect('job/job-apply-success/'.Session::get('userId'));



            }else{
                return redirect('user/user-login');
            }
        }else{
            return redirect('user/user-login');
        }

    }


}
