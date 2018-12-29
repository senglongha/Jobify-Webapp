<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function test(){
        return $this->hasMany('App\Test');
    }
    public function vc(){
        return $this->belongsTo('App\Cv');
    }
}
