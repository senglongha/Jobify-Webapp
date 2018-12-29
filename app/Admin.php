<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function test(){
        return $this->hasMany('App\Test');
    }
}
