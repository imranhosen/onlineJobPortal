<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function showAboutUsPage(){

        $showAboutUsInfo=About::find($id=1);
        return view('front.about.about-us',['showAboutUsInfo'=> $showAboutUsInfo]);
    }

    public function addAbout(){
        return view('admin.about.add-about');
    }

    public function saveAboutInfo(Request $request){

        $aboutInfo= new About();
        $aboutInfo->about_headline=$request->about_headline;
        $aboutInfo->about_details=$request->about_details;
        $aboutInfo->ourmission_headline=$request->ourmission_headline;
        $aboutInfo->ourmission_details=$request->ourmission_details;
        $aboutInfo->vission_headline=$request->vission_headline;
        $aboutInfo->vission_details=$request->vission_details;

        $aboutInfo->save();

        return redirect('about/add-about')->with('message', 'About Page detals Added Successfully!');


    }

    public function editAboutInfo(){
        $editAboutInfo=About::find($id=1);
        return view('admin.about.edit-about',['editAboutInfo'=> $editAboutInfo]);
    }

    public function updateAboutInfo(Request $request)
    {

        $updateAbout = About::find($request->id=1);
        $updateAbout->about_headline = $request->about_headline;
        $updateAbout->about_details = $request->about_details;
        $updateAbout->ourmission_headline = $request->ourmission_headline;
        $updateAbout->ourmission_details = $request->ourmission_details;
        $updateAbout->vission_headline = $request->vission_headline;
        $updateAbout->vission_details = $request->vission_details;

        $updateAbout->save();
        return redirect('about/edit-about')->with('message', 'About Page Update Successfully!');
    }






}
