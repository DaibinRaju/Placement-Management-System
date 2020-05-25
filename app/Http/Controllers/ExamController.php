<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\StudentDetail;
use App\Imports\QuestionsImport;
use Maatwebsite\Excel\Facades\Excel;
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
        $exams = Exam::all()->toArray();
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
        return view('admin.examcreate');
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

        $exam = Exam::create([
            'name' => $request->name,
            'password' => $request->password,
            'act_date' => $request->act_date,
            'act_time' => $request->act_time,
            'exp_date' => $request->exp_date,
            'exp_time' => $request->exp_time,
            'mark' => $request->mark,
            'nmark' => $request->nmark,
            'time' => $request->time,
            'nsection' => $request->nSection,
        ]);

        if ($request->has('file1')) {
            Excel::import(new QuestionsImport($exam->id), request()->file('file1'));
        }
        if ($request->has('file2')) {
            Excel::import(new QuestionsImport($exam->id), request()->file('file2'));
        }
        if ($request->has('file3')) {
            Excel::import(new QuestionsImport($exam->id), request()->file('file3'));
        }
        if ($request->has('file4')) {
            Excel::import(new QuestionsImport($exam->id), request()->file('file4'));
        }
        if ($request->has('file5')) {
            Excel::import(new QuestionsImport($exam->id), request()->file('file5'));
        }

        // if($request->has('file2')){
        //    Excel::import(new QuestionsImport, request()->file('file2'));
        // }
        return redirect('/admin/exam')->with("success","Exam created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = Exam::where('id', $id)->firstOrFail();
        return view('admin.examshow', compact('exam'));
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

    public function index_student()
    {
        $user=Auth::user();
        $userdata= StudentDetail::where('admission_number',$user->admission_number)->firstOrFail();
        $exams = Exam::all();

        return view('student.exam', compact('user','userdata','exams'));
    }


    public function exam(Request $request, Exam $exam)
    {
        $questions = Question::where('exam_id', $exam->id)->get(['id', 'question', 'op1', 'op2', 'op3', 'op4']);
        $count = Question::where('exam_id', $exam->id)->count();
        return view('exam.exam', compact('exam', 'questions', 'count'));
    }

    public function attend(Request $request, $id)
    {
        // dd($request);
        $exam = Exam::findOrFail($id);

        if ($request->session()->has('id')) {

            //return(ExamController::exam());
            if ($request->session()->get('id') == $id) {
                return (ExamController::exam($request, $exam));
            } else
                return back();
        }

        if ($request->has('password')) {
            if ($request->password == $exam->password) {

                $request->session()->put('id', $id);
                $request->session()->put('mark', 0);
                $request->session()->put('responses', []);

                return (ExamController::exam($request, $exam));
            }
            else{
                return back();
            }
        } else {
            return view('exam.verify');
        }
    }

    public function evaluate(Request $request,$id){
        $mark=$request->session()->get('mark');
        $responses=$request->session()->get('responses');
        $question_id=$request->get('question_id');
        $response=$request->get('response');

        $question=Question::findOrFail($question_id);
        $exam = Exam::findOrFail($id);
        if (($request->session()->has('id')) &&($request->session()->get('id') == $id)) {
            if(!(Arr::exists($responses,$question_id) && $responses[$question_id]==$response)){

                if($question['correct']==$response){
                    $mark+=$exam['mark'];
                }
                else{
                    $mark-=$exam['nmark'];
                }
            }
            
            $responses[$question_id]=$response;
            $request->session()->put('responses', $responses);
            $request->session()->put('mark', $mark);
            return $mark;

        }
        else{
            return 0;
        }

        
    }

    public function end(Request $request)
    {
        //$request->session()->flush();
        $request->session()->forget('id');
        $request->session()->forget('mark');
        $request->session()->forget('responses');
        return redirect('/student/exam');
    }

    public function test(Request $request){
        
        
        $a=$request->session()->get('mark');
        dd($a);
    }
}
