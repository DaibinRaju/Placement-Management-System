<?php

namespace App\Imports;

use App\Question;
use Maatwebsite\Excel\Concerns\ToModel;


class QuestionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function __construct($examid) {
        $this->examid = $examid;
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

        // dd($q);
         return new Question([
                    'question'=>$row[0],
                    'op1'=>$row[1],
                    'op2'=>$row[2],
                    'op3'=>$row[3],
                    'op4'=>$row[4],
                    'correct'=>$row[5],
                    'exam_id'=>$this->examid,
                ]);
        
        //return "done:";
    }
}
