<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Exports\StudentDetailExport;
use App\Imports\StudentDetailImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\CommonFile;
use App\DriveFile;
use App\Drive;

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
           
        return back()->with("success","Student users created");
    }

    public function index() 
    {
        $user=Auth::user();
        $files= CommonFile::where('user_id',$user['id'])->get();
        return view('admin.file',compact('files'));
    }

    public function create() 
    {
        return view('admin.filecreate');
    }

    public function store(Request $request) 
    {   
        $allowedfileExtension=['pdf','jpg','png','docx'];
        $user=Auth::user();

        if ($request->cat=="drive"){
            $drive_data=Drive::findOrFail($request->drive_id);
            $file=$request->file;
            $ex=$file->getClientOriginalExtension();
            if (in_array($ex,$allowedfileExtension)){
                $file_name=$file->getClientOriginalName();
                $dir_name=$drive_data['company_name'];
                $file_path=$file->storeAs($dir_name,$file_name);
                $bytes=$file->getClientSize();
                $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
                for ($i = 0; $bytes > 1024; $i++) {
                    $bytes /= 1024;
                }
                $readable=round($bytes, 2) . ' ' . $units[$i];
                $uploaded_by=$user->name;
                $upload_date=date("d-m-Y");
                $record = DriveFile::create([
                    'filename' =>$file_name,
                    'filesize' =>$readable,
                    'filepath' =>$file_path,
                    'upload_date' =>$upload_date,
                    'uploaded_by' =>$uploaded_by, 
                    'drive_id' =>$drive_data['id'],
                ]);
                return redirect()->action('DriveController@show',['id' =>$request->drive_id ]);
            }
        }
        
        elseif($request->cat=="common"){
            $files=$request->allfiles;
            $j=0;
            $descriptions=$request->file_desc;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                if (in_array($extension,$allowedfileExtension)){
                    $file_name=$file->getClientOriginalName();
                    $file_desc=$descriptions[$j];
                    $dir_name=$user['id'];
                    $file_path=$file->storeAs($dir_name,$file_name);
                    $bytes=$file->getClientSize();
                    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
                    for ($i = 0; $bytes > 1024; $i++) {
                        $bytes /= 1024;
                    }
                    $readable=round($bytes, 2) . ' ' . $units[$i];
                    $upload_date=date("d-m-Y");
                    $record = CommonFile::create([
                        'filename' =>$file_name,
                        'filedesc' =>$file_desc,
                        'filesize' =>$readable,
                        'filepath' =>$file_path,
                        'upload_date' =>$upload_date, 
                        'user_id' => $user['id'],
                    ]);
                    $j=$j+1;
                   
                }
                else{
                    return back()->with('error','Invalid File Format');
                }
            }
            return back()->with('success',"Files uploaded");
        }
    }

    public function file_action(Request $request) 
    {
       if ($request->cat=="common"){
        $file = CommonFile::where('id', $request->fileid)->firstOrFail();
           if ($request->action=="delete"){
                Storage::delete($file->filepath);
                $file->delete();
                return back()->with("success","File deleted");

           }
           elseif ($request->action=="download"){
                return Storage::download($file->filepath);
           }
       }
       elseif($request->cat=="drive"){
           $file=DriveFile::where('id',$request->fileid)->firstOrFail();
           if($request->action=="delete"){     
                Storage::delete($file->filepath);
                $file->delete();
                return redirect()->action('DriveController@show',['id' =>$request->driveid ]);
           }
           elseif ($request->action=="download"){
               return Storage::download($file->filepath);
           }
       }
    }

}
