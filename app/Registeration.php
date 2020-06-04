<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registeration extends Model
{
    protected $guarded=[];

    public function drive(){
        return $this->belongsTo(Drive::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
