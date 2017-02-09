<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    
    public $incrementing=false;
    public $timestamps=false;
    //
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
