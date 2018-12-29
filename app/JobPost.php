<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    public function test(){
        return $this->hasMany('App\Test');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
