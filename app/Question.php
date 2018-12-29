<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function question(){
        return $this->hasMany('App\Question');
    }
}
