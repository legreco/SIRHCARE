<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveAccount extends Model
{
    //
    protected $appends=['leaveName'];

    public function getLeaveNameAttribute()
    {
        return $this->leave_type->name;
    }



    public function leave_type()
    {
        return $this->belongsTo('App\LeaveType');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
