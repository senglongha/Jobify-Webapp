<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public function student(){
        return $this->hasMany('App\Student');
    }
}
