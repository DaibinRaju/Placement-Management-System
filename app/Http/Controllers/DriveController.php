<?php

namespace App\Http\Controllers;

use App\Drive;
use App\Faculty;
use App\DriveFile;
use App\FormItems;
use App\Department;
use Illuminate\Http\Request;
use App\Form;
use App\Registeration;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\DriveAnnouncement;
use App\Placement;

class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $drives = Drive::all()->toArray();
        return view('admin.drive', compact('drives'));

    }

    // public function mail_test(){
    //     $id=1;
    //     $drive= Drive::findOrFail($id);
    //     Mail::to('joeljames270@gmail.com')->send(new DriveAnnouncement($drive));
    // //     return new DriveAnnouncement($drive);
    //  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formItems=FormItems::all();
        return view("admin.createdrive",compact('formItems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Request::validate($request);
        //dd(serialize($request->items));
        $validated_data=request()->validate([
            'company_name'=>'required',
            'description'=>'required',
            'date'=>'required',
            'time'=>'required',
            'venue'=>'required',
            'last_date_to_register'=>'required'
        ]);
        //dd($request);

        $drive=Drive::create([
            'company_name'=>$request->company_name,
            'description'=>$request->description,
            'date'=>$request->date,
            'time'=>$request->time,
            'venue'=>$request->venue,
            'last_date_to_register'=>$request->last_date_to_register
        ]);

        foreach($request->items as $item){
            Form::create([
                'drive_id'=>$drive->id,
                'form_item_id'=>$item
            ]);
        }
        $departments = Department::all()->toArray();
        $faculties = Faculty::all()->toArray();
        foreach($departments as $depart){
            $dep=Department::findOrFail($depart['id']);
            $dep_fac=$dep->faculty;
            $faculties_dept=[];
            foreach($dep_fac as $f){
                array_push($faculties_dept,$f['email']);
            }
            //Mail::to($depart['email'])->cc($faculties_dept)->send(new DriveAnnouncement($drive));
        }
       
        return redirect('/admin/drive');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drive= Drive::findOrFail($id);
        $registrations=$drive->registration;
        $files=DriveFile::where('drive_id',$id)->get();
        return view('admin.driveshow',compact('drive','files','registrations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Drive $drive)
    {
        // dd($request);
        $request->validate([
            'pld_stu'=>'required'
        ]);

        foreach($request->pld_stu as $user_id){
            Placement::create([
                'drive_id'=>$drive->id,
                'user_id'=>$user_id
            ]);
        }

        return back()->with("success","Students added to placed list");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drive $drive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drive = Drive::find($id);
        if ($drive) {
            Storage::deleteDirectory($drive->company_name);
            $drive->delete();
        }
        return back();
    }

    public function delete_placement(Request $request,$id){
        $request->validate([
            'id'=>'required'
        ]);
        $placement=Placement::findOrFail($request->id);
        $placement->delete();
        return back()->with("success","Entry deleted");
    }
}
