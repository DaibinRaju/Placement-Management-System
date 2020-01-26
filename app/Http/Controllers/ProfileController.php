<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\StudentDetail;

class ProfileController extends Controller
{
    
    public function showStudentProfile(){
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        //dd($userdata);
        return view('student.profile', compact('user','userdata'));
    }
    

}
