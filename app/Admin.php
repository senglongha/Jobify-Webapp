<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function test(){
        return $this->hasMany('Jobify\Test');
    }
}
