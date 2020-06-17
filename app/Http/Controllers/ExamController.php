<?php

namespace App\Http\Controllers;

use App\Exam;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\StudentDetail;
use App\Question;
use Illuminate\Support\Arr;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::all();
        
        //dd($exams);
        return view('faculty.exam', compact('exams'));
    }

    public function index_admin()
    {
        $exams = Exam::all();
        
        //dd($exams);
        return view('admin.exam', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.examcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $user=Auth::user();

        $exam = Exam::create([
            'name' => $request->name,
            'password' => $request->password,
            'act_date' => $request->act_date,
            'act_time' => $request->act_time,
            'exp_date' => $request->exp_date,
            'exp_time' => $request->exp_time,
            'time' => $request->time,
            'user_id'=> $user->id,
        ]);

        // if ($request->has('file1')) {
        //     Excel::import(new QuestionsImport($exam->id), request()->file('file1'));
        // }
        

        // if($request->has('file2')){
        //    Excel::import(new QuestionsImport, request()->file('file2'));
        // }
        return redirect('/faculty/exam')->with("success","Exam created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = Exam::findOrFail($id);
        $sections=$exam->section;
        $subjects=User::find(Auth::user()->id)->subject;
        return view('faculty.examshow', compact('exam','subjects','sections'));
    }

    public function show_admin($id)
    {
        $exam = Exam::findOrFail($id);
        $sections=$exam->section;
        $subjects=User::find(Auth::user()->id)->subject;
        return view('admin.examshow', compact('exam','subjects','sections'));
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
        $exam = Exam::find($id);

        if ($exam) {
            $exam->delete();
        }

        return back()->with("success","Exam deleted");
    }

}
