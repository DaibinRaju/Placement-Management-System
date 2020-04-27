<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Attendance;
class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all()->toArray();
        return view('admin.training', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.trainingcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = request()->validate([
            'training_name' => 'required',
            'trainer' => 'required',
            'training_description' => 'required',
            'nSection' => 'required',
            'dates' => 'required',

        ]);

        $dates=implode(",",$request->dates);
        $dates_array=$request->dates;
        


        $record = Training::create([
            'training_name' => $request->training_name,
            'trainer' => $request->trainer,
            'description' => $request->training_description,
            'days' => $request->nSection,
            'dates' => $dates,
        ]);
        
        $train=Training::where('training_name',$request->training_name)->firstOrFail();
        $len_train_dates=sizeof($dates_array);
        
        
        for ($x=0; $x < $len_train_dates; $x++){

            $record = Attendance::create([
                'date' => $dates_array[$x],
                'training_id' => $train->id,
                'training_attendance' => NULL,
            ]);

        }

        return redirect('/admin/training');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainingdata = Training::where('id', $id)->firstOrFail();
        $dates= attendance::where('training_id',$id)->get();
        //$bill_data= training_bill::where('training_id',$id)->get();
        return view('admin.trainingshow', compact('trainingdata','dates','bill_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::find($id);
        if ($training) {
            $training->delete();
        }
        return back();
    }
}
