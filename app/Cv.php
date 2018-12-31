<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public function student(){
        return $this->hasMany('Jobify\Student');
    }
}
