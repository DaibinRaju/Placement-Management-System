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
        if($student_details->complete==1){
            return redirect()->action('ProfileController@showStudentProfile')->with('info','Profile Details already updated!');
        }
        elseif($student_details->complete==0){
            return view('student.completeprofile', compact('user','userdata'));
        }
    }

    public function editProfile(){
        $user=Auth::user();
        $user_data= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        //dd($user_data);
        $certifications=[1];
        $hackathons=[1];
        $hack=$user_data['hack'];
        $cert=$user_data['cert'];
        $x_check=[$user_data['x_country'],$user_data['x_state']];
        $x_country=$user_data['x_country'];
        $x_state=$user_data['x_state'];
        ///////xii///////
        $xii_check=[$user_data['xii_country'],$user_data['xii_state']];
        $xii_country=$user_data['xii_country'];
        $xii_state=$user_data['xii_state'];
        ///////////diploma/////////
        $dip_check=[$user_data['dip_country'],$user_data['dip_state']];
        $dip_country=$user_data['dip_country'];
        $dip_state=$user_data['dip_state'];
        //dd($dip_check,$dip_country,$dip_state);
        /////////////bachelor/////////
        $bach_check=[$user_data['bach_country'],$user_data['bach_state']];
        $bach_country=$user_data['bach_country'];
        $bach_state=$user_data['bach_state'];
        ///////////////master//////////
        $mast_check=[$user_data['mast_country'],$user_data['mast_state']];
        $mast_country=$user_data['mast_country'];
        $mast_state=$user_data['mast_state'];

        //dd($x_check);
        //dd($cert,$hack);
        //dd($certifications,$hackathons);
        return view('student.editprofile',compact('user','user_data','certifications','hackathons','hack','cert','x_country','x_state','x_check','xii_country','xii_state','xii_check','dip_country','dip_state','dip_check','bach_country','bach_state','bach_check','mast_country','mast_state','mast_check'));
    }

    public function editProfile2(Request $request){
        //dd($request->hack,$request->cert);
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        $student_details = StudentDetail::findOrFail($userdata->id);
        //personal info
        $student_details->student_phone_no=$request->student_phone_no;
        $student_details->mail_id=$request->mail_id;
        $student_details->present_address=$request->present_address;
        $student_details->permanent_address=$request->permanent_address;

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
        if($request->hack=="0"){
            $student_details->hack=0;
        }
        else{
            $student_details->hack=1;
        }

       
        if($request->cert=="0"){
            $student_details->cert=0;
            }
        else{
            $student_details->cert=1;
        }
        //dd($student_details);
        $student_details->save();
        return redirect()->action('ProfileController@showStudentProfile')->with('success','Profile Details updated!');


    }


    public function completeProfile(Request $request){
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        //$validated_data=request()->validate([
            // 'x_cgpa'=>'required',
            // 'x_country'=>'required',
            // 'x_state'=>'required',
            // 'x_city'=>'required',
            // 'x_inst'=>'required',
            // 'x_board'=>'required',
            // 'x_yop'=>'required',
            // //////////////////////
            // 'xii_cgpa'=>'required',
            // 'xii_country'=>'required',
            // 'xii_state'=>'required',
            // 'xii_city'=>'required',
            // 'xii_inst'=>'required',
            // 'xii_board'=>'required',
            // 'xii_yop'=>'required',
            // //////////////////////
            // 'batch_cgpa'=>'required',
            // 'batch_country'=>'required',
            // 'batch_state'=>'required',
            // 'batch_city'=>'required',
            // 'bach_univ'=>'required',
            // 'bach_inst'=>'required',
            // 'bach_branch'=>'required',
            // 'bach_yop'=>'required',
            // ////////////////////////
            // 'hack'=>'required',
            // 'cert'=>'required',
        //]);

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
        $student_details->complete=1;
        $student_details->save();

        return redirect()->action('ProfileController@showStudentProfile')->with('success','Profile Details updated!');
    
    }


}
