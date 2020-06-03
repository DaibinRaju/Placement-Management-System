<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Subject;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.questioncreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if($request->has('form11')){
            $request->validate([
                'name'=>'required',
                'question'=>'required',
                'option1'=>'required',
                'option2'=>'required',
                'option3'=>'required',
                'option4'=>'required',
                'correct'=>'required',
            ]);

            $subject=Subject::findOrFail($id);
            $question=Question::create([
                'name'=>$request->name,
                'question'=>$request->question,
                'type'=>"MCQ",
                'subject_id'=>$subject->id
            ]);

            Answer::create([
                'option'=>$request->option1,
                'isCorrect'=>1==$request->correct,
                'question_id'=>$question->id
            ]);

            Answer::create([
                'option'=>$request->option2,
                'isCorrect'=>2==$request->correct,
                'question_id'=>$question->id
            ]);

            Answer::create([
                'option'=>$request->option3,
                'isCorrect'=>3==$request->correct,
                'question_id'=>$question->id
            ]);

            Answer::create([
                'option'=>$request->option4,
                'isCorrect'=>4==$request->correct,
                'question_id'=>$question->id
            ]);

            return back()->with("success","Question created under this subject");

        }

        if($request->has('form12')){
            $request->validate([
                'name'=>'required',
                'question'=>'required',
                'option1'=>'required',
                'option2'=>'required',
                'option3'=>'required',
                'option4'=>'required',
                'correct'=>'required',
            ]);

            $subject=Subject::findOrFail($id);
            $question=Question::create([
                'name'=>$request->name,
                'question'=>$request->question,
                'type'=>"MCQ",
                'subject_id'=>$subject->id
            ]);

            Answer::create([
                'option'=>$request->option1,
                'isCorrect'=>1==$request->correct,
                'question_id'=>$question->id
            ]);

            Answer::create([
                'option'=>$request->option2,
                'isCorrect'=>2==$request->correct,
                'question_id'=>$question->id
            ]);

            Answer::create([
                'option'=>$request->option3,
                'isCorrect'=>3==$request->correct,
                'question_id'=>$question->id
            ]);

            Answer::create([
                'option'=>$request->option4,
                'isCorrect'=>4==$request->correct,
                'question_id'=>$question->id
            ]);

            return redirect()->route('subject.show',$subject)->with("success","Question created under this subject");

        }

        if($request->has('form21')){
            $request->validate([
                'name'=>'required',
                'question'=>'required',
                'answer'=>'required',
            ]);

            $subject=Subject::findOrFail($id);
            $question=Question::create([
                'name'=>$request->name,
                'question'=>$request->question,
                'type'=>"Input type",
                'subject_id'=>$subject->id
            ]);

            Answer::create([
                'option'=>$request->answer,
                'isCorrect'=>1,
                'question_id'=>$question->id
            ]);

            return back()->with("success","Question created under this subject");
        }

        if($request->has('form22')){
            $request->validate([
                'name'=>'required',
                'question'=>'required',
                'answer'=>'required',
            ]);

            $subject=Subject::findOrFail($id);
            $question=Question::create([
                'name'=>$request->name,
                'question'=>$request->question,
                'type'=>"Input type",
                'subject_id'=>$subject->id
            ]);

            Answer::create([
                'option'=>$request->answer,
                'isCorrect'=>1,
                'question_id'=>$question->id
            ]);

            return redirect()->route('subject.show',$subject)->with("success","Question created under this subject");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    public function imageHandler(Request $request){
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg',
        ]);
    
        //dd($request);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            
            return json_encode(['location'=>asset('/images/'.$name)]);
        }
        else{
            abort(404);
        }
    }
}
