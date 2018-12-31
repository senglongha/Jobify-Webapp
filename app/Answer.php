<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question(){
        return $this->belongsTo('Jobify\Question');
    }
}
