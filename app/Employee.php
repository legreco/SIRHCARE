<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use UuidTrait;
    public $incrementing = false;
    protected $fillable=[
        'employeeId',
        'firstName',
        'lastName',
        'country_id',
        'address',
        'business_tel',
        'business_email',
        'organizational_email',
        'employeeId',
        'categoryId',
        'gender_id',
        'employee_id',
        'cinOrNif',
        'birthDate',
        'email'];
   protected $appends = ['age','fullName'];


    public function getFullNameAttribute()
    {
        return $this->firstName." ".mb_strtoupper($this->lastName);
    }

    


    public function getAgeAttribute()
    {
        return $this->calculateAge();
    }

    private function calculateAge()
    {
        if(!empty($this->birthDate))
        {
            $birthDate = Carbon::parse($this->birthDate);
            $today   = Carbon::now();
            $age = $birthDate->diff($today)->y;
            return $age;
        }
        else
        {
            return 40;
        }
    }
   
    public function pars()
    {
        return $this->hasMany('App\Par');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }



    public function leave_accounts()
    {
        return $this->hasMany('App\LeaveAccount');
    }

    public function leave_requests()
    {
        return $this->hasMany('App\LeaveRequest');
    }


    public function employee()
    {
        return $this->belongsTo('App\Employee','employee_sup_id');
    }

    public function employees()
        {
    return $this->hasMany('App\Employee','employee_sup_id');
        }

    public function subordinates_leave_requests()
    {
   return $this->hasManyThrough('App\LeaveRequest','App\Employee','employee_sup_id','employee_id','id');
    }
    public function approbations()
    {
        return $this->hasMany('App\Approbation');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }

    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }

    public function current_contract()
    {
      //  return $this->contracts()->where
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    
    public function employee_status()
    {
        return $this->belongsTo('App\EmployeeStatus');
    }

}
