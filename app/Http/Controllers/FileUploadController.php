<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\StudentDetailExport;
use App\Imports\StudentDetailImport;
use Maatwebsite\Excel\Facades\Excel;
  

class FileUploadController extends Controller
{
    public function export() 
    {
        return Excel::download(new StudentDetailExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        
        Excel::import(new StudentDetailImport,request()->file('file'));
           
        return back();
    }
}
