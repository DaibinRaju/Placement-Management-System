<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Exam;
use App\Question;
use App\Section;
use App\StudentDetail;
use Faker\Calculator\Ean;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExamhandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userdata = StudentDetail::where('admission_number', $user->admission_number)->firstOrFail();
        $exams = Exam::all();
        return view('student.exam', compact('user', 'userdata', 'exams'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Exam $exam)
    {
        // dd($request->session());
        if ($request->session()->has('exam_id')) {
            if ($exam->id == $request->session()->get('exam_id')) {
                return redirect()->action('ExamhandleController@question', $exam);
            }
        }
        return view('exam.verify');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request, Exam $exam)
    {

        $request->validate([
            'password' => 'required'
        ]);
        if ($request->password == $exam->password) {
            // $request->session()->put('id', $exam->id);
            // $request->session()->put('mark', 0);
            // $request->session()->put('responses', []);
            // // return (ExamController::exam($request, $exam));
            // $section=$exam->section->first();
            // $question=$section->subject->question;

            $sections = $exam->section;
            $qid = [];
            $qst = [];
            $qsec = [];
            $q = collect();
            $count = 0;
            foreach ($sections as $section) {
                $questions = $section->subject->question->shuffle();
                foreach ($questions as $question) {
                    $qid[$count] = $question->id;
                    $qst[$count] = 0;
                    $qsec[$count] = $section->id;
                    $count++;
                }
                // $q = $q->concat($questions);
            }

            // echo $request->session()->get('questions');
            // $shuffledq = $q->shuffle();


            $request->session()->put('exam_id', $exam->id);
            $request->session()->put('qid', $qid);
            $request->session()->put('qst', $qst);
            $request->session()->put('qsec', $qsec);
            $request->session()->put('current_q', 0);
            $request->session()->put('q_count', $count);
            return redirect()->action('ExamhandleController@question', $exam);
        }
    }

    public function question(Request $request, Exam $exam)
    {
        if ($request->session()->has('exam_id')) {
            if ($exam->id != $request->session()->get('exam_id')) {
                return "Wrong exam";
            }
        } else {
            return "Wrong exam";
        }

        $current_q = $request->session()->get('current_q');
        $qid = $request->session()->get('qid');
        $qst = $request->session()->get('qst');
        $qsec = $request->session()->get('qsec');
        $q_count = $request->session()->get('q_count');
        $question = Question::findOrFail($qid[$current_q]);
        $answer = $question->answer->shuffle();
        return view('exam.exam', compact('exam', 'question', 'answer', 'q_count', 'qsec', 'current_q', 'qst'));
    }


    public function response(Request $request, Exam $exam)
    {
        $current_q = $request->session()->get('current_q');
        $qid = $request->session()->get('qid');
        $qst = $request->session()->get('qst');
        $q_count = $request->session()->get('q_count');
        if ($request->has('skip')) {
            $qst[$current_q] = -1;
            $current_q++;
            $request->session()->put('current_q', $current_q);
            $request->session()->put('qst', $qst);
            return redirect()->action('ExamhandleController@question', $exam);
        }

        if ($request->has('response')) {
            $request->validate([
                'answer' => 'required'
            ]);
            $question = Question::findOrFail($qid[$current_q]);
            $answer = Answer::findOrFail($request->answer);
            if ($question->answer->contains($answer)) {
                $qst[$current_q] = $request->answer;
                $current_q++;
                $request->session()->put('current_q', $current_q);
                $request->session()->put('qst', $qst);
                return redirect()->action('ExamhandleController@question', $exam);
            } else {
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        //$request->session()->flush();
        $request->session()->forget('exam_id');
        return redirect('/student/exam');
    }
}
