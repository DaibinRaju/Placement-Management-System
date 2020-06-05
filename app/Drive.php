<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $guarded=[];

    public function registration(){
        return $this->hasMany(Registeration::class);
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
