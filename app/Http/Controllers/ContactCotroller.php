<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactCotroller extends Controller
{
    public function showContactUsPage(){

        $showContactInfo=Contact::find($id=1);
        return view('front.contact.contact-us',['showContactInfo'=> $showContactInfo]);
    }



    public  function contact(){
        return view('admin.contact.add-contact');
    }


    public function saveContactInfo(Request $request){

        $contactInfo= new Contact();
        $contactInfo->headline_one=$request->headline_one;
        $contactInfo->details_one=$request->details_one;
        $contactInfo->headline_two=$request->headline_two;
        $contactInfo->details_two=$request->details_two;
        $contactInfo->email=$request->email;
        $contactInfo->phone=$request->phone;

        $contactInfo->save();

        return redirect('contact/add-contact')->with('message', 'Contact Page detals Added Successfully!');


    }
    public function editContactInfo(){
        $editContactInfo=Contact::find($id=1);
        return view('admin.contact.edit-contact',['editContactInfo'=> $editContactInfo]);
    }


    public function updateContactInfo(Request $request)
    {

        $updateContact = Contact::find($request->id=1);
        $updateContact->headline_one = $request->headline_one;
        $updateContact->details_one = $request->details_one;
        $updateContact->headline_two = $request->headline_two;
        $updateContact->details_two = $request->details_two;
        $updateContact->email = $request->email;
        $updateContact->phone = $request->phone;

        $updateContact->save();
        return redirect('contact/edit-contact')->with('message', 'Contact Page Update Successfully!');
    }




}
