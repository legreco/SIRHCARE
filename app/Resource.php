<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //


    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }
}
