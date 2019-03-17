<?php

namespace App\Http\Controllers;

use App\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public  function socilaLink(){
        return view('admin.social-link/add-social-link');
    }


    public function savesocilaLinkInfo(Request $request){

        $socialLinkInfo= new SocialLink();
        $socialLinkInfo->name=$request->name;
        $socialLinkInfo->class=$request->class;
        $socialLinkInfo->link=$request->link;

        $socialLinkInfo->save();

        return redirect('social-link/add-social-link')->with('message', 'Social Link Added Successfully!');


    }

    public function manageSocialLinkInfo(){
        $socialLink=SocialLink::orderBy('id', 'desc')->get();
        return view('admin.social-Link.manage-social-Link', ['socialLink'=>$socialLink]);
    }

    public function editSocialLinkInfo($id){
        $socialLinkInfoById=SocialLink::find($id);
        return view('admin.social-link.edit-social-link',['socialLinkInfoById'=> $socialLinkInfoById]);
    }

    public function deleteSocialLinkInfo($id){
        $deletesocialLink=SocialLink::find($id);
        $deletesocialLink->delete();
        return redirect('social-link/manage-social-link')->with('deleteMessage', 'Social Link Deleted Successfully!');
    }




    public function updateSocialLinkInfo(Request $request){

        $updateSocial = SocialLink::find($request->id);
        $updateSocial->name =$request->name;
        $updateSocial->class =$request->class;
        $updateSocial->link=$request->link;

        $updateSocial->save();

        return redirect('social-link/manage-social-link')->with('message', 'Social Link Update Successfully!');


    }









}
