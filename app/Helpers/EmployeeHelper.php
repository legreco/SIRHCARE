<?php
namespace App\Helpers;
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
}