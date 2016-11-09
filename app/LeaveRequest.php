<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{

    //
    use UuidTrait;
    public $incrementing = false;
    protected $fillable=[
        'startDate',
        'duration',
        'comments',
        'leave_type_id',
        'address',
        'telephone'
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    
    
    public function leave_type()
    {
        return $this->belongsTo('App\LeaveType');
    }

    public function approbations()
    {
        return $this->morphMany('App\Approbation','approvable');
    }
}
