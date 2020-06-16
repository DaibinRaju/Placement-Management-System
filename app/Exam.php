<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function section(){
        return $this->hasMany(Section::class);
    }

    public function responses(){
        return $this->hasMany(Response::class);
    }

    
}
