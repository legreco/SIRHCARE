<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approbation extends Model
{
    //
    public function approvable()
    {
        return $this->morphTo();
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
