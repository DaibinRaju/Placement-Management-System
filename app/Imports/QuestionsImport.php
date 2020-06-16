<?php

namespace App\Imports;

use App\Answer;
use App\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function __construct($subject_id)
    {
        $this->subject_id = $subject_id;
    }



    public function model(array $row)
    {
        //dd($this->examid);

        // die();
        // foreach($row as $row){
        //     echo json_encode($row[0])."<hr><br>";

        // $q=Question::create([
        //     'question'=>$row[0],
        //     'op1'=>$row[1],
        //     'op2'=>$row[2],
        //     'op3'=>$row[3],
        //     'op4'=>$row[4],
        //     'correct'=>$row[5],
        //     'exam_id'=>$this->examid,
        // ]);

        //dd($row);
        $question=Question::create([
            'name' => $row[0],
            'question' => $row[0],
            'type' => 'MCQ',
            'subject_id' => $this->subject_id,
        ]);

        
        Answer::create([
            'option' => $row[1],
            'isCorrect' => $row[5]=='A',
            'question_id' => $question->id
        ]);

        Answer::create([
            'option' => $row[2],
            'isCorrect' => $row[5]=='B',
            'question_id' => $question->id
        ]);

        Answer::create([
            'option' => $row[3],
            'isCorrect' => $row[5]=='C',
            'question_id' => $question->id
        ]);

        Answer::create([
            'option' => $row[4],
            'isCorrect' => $row[5]=='D',
            'question_id' => $question->id
        ]);

        return $question;

        //return "done:";
    }
}
