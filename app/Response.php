<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public function exam(){
        return $this->belongsTo(Exam::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
