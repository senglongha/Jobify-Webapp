<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function test(){
        return $this->hasMany('Jobify\Test');
    }
    public function vc(){
        return $this->belongsTo('Jobify\Cv');
    }
}
