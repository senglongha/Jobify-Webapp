<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function jobPost(){
        return $this->belongsTo('App\JobPost');
    }
}
