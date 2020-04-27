<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\StudentDetail;
use App\FormItems;
class SearchController extends Controller
{
    public function search(Request $request){
        
        $departments=Department::all();
        $form_items=FormItems::all();
        
        return view('admin.search',compact('departments','form_items'));

    }

    public function result(Request $request){
        
        $required_data=$request->required_data;
        $departments=Department::all();
        $form_items=FormItems::all();
        $details=StudentDetail::where('branch',$request->department)->get($request->required_data);
        return view('admin.search',compact('departments','details','required_data','form_items'));

    }
}
