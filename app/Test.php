<?php

namespace Jobify;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function admin(){
        return $this->belongsTo('Jobify\Admin');
    }
    public function student(){
        return $this->belongsTo('Jobify\Student');
    }
    public function result(){
        return $this->belongsTo('Jobify\Results');
    }
    public function jobPost(){
        return $this->belongsTo('Jobify\JobPosts');
    }
}
