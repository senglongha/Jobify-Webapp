<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function test(){
        return $this->hasMany('Jobify\Test');
    }
}
