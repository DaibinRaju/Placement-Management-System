<?php

namespace App\Http\Controllers;

use App\Drive;
use App\DriveFile;
use App\FormItems;
use Illuminate\Http\Request;
use App\Form;
use App\Registeration;
use Illuminate\Support\Facades\Storage;

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
        // $validated_data=request()->validate([
        //     'company_name'=>'required',
        //     'description'=>'required',
        //     'date'=>'required',
        //     'time'=>'required',
        //     'venue'=>'required',
        //     'last_date_to_register'=>'required'
        // ]);
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
        $files=DriveFile::where('drive_id',$id)->get();
        return view('admin.driveshow',compact('drive','files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function edit(Drive $drive)
    {
        //
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
}
