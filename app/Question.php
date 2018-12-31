<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function question(){
        return $this->hasMany('Jobify\Question');
    }
}
