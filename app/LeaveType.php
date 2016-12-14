<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    //
    
    public function leave_accounts()
    {
        return $this->hasMany('App\LeaveAccount');
    }
    
    
    public function leave_requests()
    {
        return $this->hasMany('App\LeaveRequest');
    }
    
    public function leave_policies()
    {
        return $this->belongsToMany('App\LeavePolicy');
    }
}
