<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee=Employee::where('employeeId','=','2048')->first();

        $user= new User();
        $user->name=$employee->firstName;
        $user->email=$employee->business_email;
        $user->password=bcrypt('secret');
       
        $employee->user()->save($user);

        //
        $employee=Employee::where('employeeId','=','2047')->first();

        $user= new User();
        $user->name=$employee->firstName;
        $user->email=$employee->business_email;
        $user->password=bcrypt('secret');


        $employee->user()->save($user);

        //

        $employee=Employee::where('employeeId','=','2046')->first();
        $user= new User();
        $user->name=$employee->firstName;
        $user->email=$employee->business_email;
        $user->password=bcrypt('secret');

        $employee->user()->save($user);
    }
}
