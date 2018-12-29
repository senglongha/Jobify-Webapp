<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function admin(){
        return $this->belongsTo('App\Admin');
    }
    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function result(){
        return $this->belongsTo('App\Results');
    }
    public function jobPost(){
        return $this->belongsTo('App\JobPosts');
    }
}
