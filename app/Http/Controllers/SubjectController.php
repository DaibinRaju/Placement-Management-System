<?php

namespace App\Http\Controllers;

use App\Subject;
Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects=User::find(Auth::user()->id)->subject;
        
        return view('faculty.subject',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $valid=$request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $subject=Subject::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'shared'=>$request->has('shared'),
            'user_id'=>Auth::user()->id,
        ]);
        return back()->with("success","Subject created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $questions=$subject->question;
        return view('faculty.subjectshow',compact('subject','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $subject=Subject::findOrFail($request->id);
        $subject->delete();
        return back()->with('success','Subject deleted');
    }

    public function questionCreate(Request $request)
    {
        return view('faculty.questioncreate');
    }
}
