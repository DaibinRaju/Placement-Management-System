<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\StudentDetail;

use App\Department;
class ProfileController extends Controller
{
    
    public function showStudentProfile(){
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        //dd($userdata);
        return view('student.home', compact('user','userdata'));
    }
    
    public function fillProfile(){
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        $student_details = StudentDetail::findOrFail($userdata->id);
        return view('student.test', compact('user','userdata'));
        
    }



    public function completeProfile(Request $request){
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();

        $student_details = StudentDetail::findOrFail($userdata->id);
        //x
        $student_details->x_cgpa=$request->x_cgpa;
        $student_details->x_country=$request->x_country;
        $student_details->x_state=$request->x_state;
        $student_details->x_city=$request->x_city;
        $student_details->x_institue=$request->x_inst;
        $student_details->x_board=$request->x_board;
        $student_details->x_yop=$request->x_yop;
        //xii
        $student_details->xii_cgpa=$request->xii_cgpa;
        $student_details->xii_country=$request->xii_country;
        $student_details->xii_state=$request->xii_state;
        $student_details->xii_city=$request->xii_city;
        $student_details->xii_institue=$request->xii_inst;
        $student_details->xii_board=$request->xii_board;
        $student_details->xii_yop=$request->xii_yop;
        //diploma
        $student_details->dip_cgpa=$request->dip_cgpa;
        $student_details->dip_country=$request->dip_country;
        $student_details->dip_state=$request->dip_state;
        $student_details->dip_city=$request->dip_city;
        $student_details->dip_university=$request->dip_univ;
        $student_details->dip_institute=$request->dip_inst;
        $student_details->dip_branch=$request->dip_branch;
        $student_details->dip_yop=$request->dip_yop;
        //bachelor
        $student_details->bach_cgpa=$request->bach_cgpa;
        $student_details->bach_country=$request->bach_country;
        $student_details->bach_state=$request->bach_state;
        $student_details->bach_city=$request->bach_city;
        $student_details->bach_university=$request->bach_univ;
        $student_details->bach_institute=$request->bach_inst;
        $student_details->bach_branch=$request->bach_branch;
        $student_details->bach_yop=$request->bach_yop;
        //master
        $student_details->mast_cgpa=$request->mast_cgpa;
        $student_details->mast_country=$request->mast_country;
        $student_details->mast_state=$request->mast_state;
        $student_details->mast_city=$request->mast_city;
        $student_details->mast_university=$request->mast_univ;
        $student_details->mast_institute=$request->mast_inst;
        $student_details->mast_branch=$request->mast_branch;
        $student_details->mast_yop=$request->mast_yop;
        //others
        if($request->hack==0){
            $student_details->hack=0;
        }
        else{
            $student_details->hack=1;
        }

       
        if($request->cert==0){
            $student_details->cert=0;
            }
        else{
            $student_details->cert=1;
        }
        $student_details->save();
    
    }


}
