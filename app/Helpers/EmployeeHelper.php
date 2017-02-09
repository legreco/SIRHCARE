<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/**
 * Created by PhpStorm.
 * User: MarcGrecoPeralte
 * Date: 1/12/2017
 * Time: 11:48 PM
 */
class EmployeeHelper
{
public static function currentEmployee()
{
    return Auth::user()->employee;
}

    public static function generateEmployeeId()
    {
        $last_employee_id=DB::table('employees')->max('employeeId');
        $next_employee_id=(int)$last_employee_id+1;
        
        return (string) $next_employee_id;
    }
}