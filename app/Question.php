<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'op1', 'op2', 'op3', 'op4', 'correct','exam_id'
    ];
}
