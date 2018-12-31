<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    public function test(){
        return $this->hasMany('Jobify\Test');
    }
    public function company(){
        return $this->belongsTo('Jobify\Company');
    }
}
