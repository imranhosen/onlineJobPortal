<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;
use DB;

class ProgramController extends Controller
{
    public function showProgramPage(){

        $showProgramInfo=Program::find($id=1);
        return view('front.program.our-program',['showProgramInfo'=> $showProgramInfo]);
    }



    public  function program(){
        return view('admin.program.add-program');
    }


    public function saveProgramInfo(Request $request){

        $programInfo= new Program();
        $programInfo->headline_one=$request->headline_one;
        $programInfo->details_one=$request->details_one;
        $programInfo->headline_two=$request->headline_two;
        $programInfo->details_two=$request->details_two;
        $programInfo->headline_three=$request->headline_three;
        $programInfo->details_three=$request->details_three;

        $programInfo->save();

        return redirect('program/add-program')->with('message', 'Program Page detals Added Successfully!');


    }
    public function editProgramInfo(){
        $editProgramInfo=Program::find($id=1);
        return view('admin.program.edit-program',['editProgramInfo'=> $editProgramInfo]);
    }


    public function updateProgramInfo(Request $request)
    {

        $updateProgram = Program::find($request->id=1);
        $updateProgram->headline_one = $request->headline_one;
        $updateProgram->details_one = $request->details_one;
        $updateProgram->headline_two = $request->headline_two;
        $updateProgram->details_two = $request->details_two;
        $updateProgram->headline_three = $request->headline_three;
        $updateProgram->details_three = $request->details_three;

        $updateProgram->save();
        return redirect('program/edit-program')->with('message', 'Program Page Update Successfully!');
    }












}
