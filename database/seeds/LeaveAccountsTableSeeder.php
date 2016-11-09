<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\LeaveAccount;
use App\Employee;
class LeaveAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee=Employee::where('firstName','=','Toto Sup Sup')->first();

        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=1;
        $employee->leave_accounts()->save($leaveAccount);


        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=2;
        $employee->leave_accounts()->save($leaveAccount);



        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=3;
        $employee->leave_accounts()->save($leaveAccount);


        $employee=Employee::where('firstName','=','Toto Sup')->first();

        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=1;
        $employee->leave_accounts()->save($leaveAccount);
     

        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=2;
        $employee->leave_accounts()->save($leaveAccount);

        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=3;
        $employee->leave_accounts()->save($leaveAccount);

        $employee=Employee::where('firstName','=','Toto')->first();

        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=1;
        $employee->leave_accounts()->save($leaveAccount);


        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=2;
        $employee->leave_accounts()->save($leaveAccount);

        $leaveAccount=new LeaveAccount();
        $leaveAccount->balance=15;
        $leaveAccount->leave_type_id=3;
        $employee->leave_accounts()->save($leaveAccount);
        
     
      
    }
}
