<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function jobPost(){
        return $this->belongsTo('Jobify\JobPost');
    }
}
