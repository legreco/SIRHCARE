<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Carbon\Carbon;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //
        $employee1= new Employee();
        $employee1->employeeId='2046';
        $employee1->categoryId='3344';
        $employee1->firstName='Toto Sup Sup';
        $employee1->lastName='Jean';
        $employee1->gender_id=1;
        $employee1->cinOrNif='2434222442';
        $employee1->birthDate='1978-11-05';
        $employee1->email='supsuperieuremployesirhcare@gmail.com';
        $employee1->hireDate='2016-06-04';
        $employee1->save();



        $employee2= new Employee();
        $employee2->employeeId='2047';
        $employee2->categoryId='3345';
        $employee2->firstName='Toto Sup';
        $employee2->lastName='Jean';
        $employee2->gender_id=1;
        $employee2->cinOrNif='2434262523';
        $employee2->birthDate='1980-11-05';
        $employee2->email='superieuremployesirhcare@gmail.com';
        $employee2->hireDate='2016-06-04';

        $employee1->employees()->save($employee2);


        $employee3= new Employee();
        $employee3->employeeId='2048';
        $employee3->categoryId='3346';
        $employee3->firstName='Toto';
        $employee3->lastName='Jean';
        $employee3->gender_id=1;
        $employee3->cinOrNif='243426442';
        $employee3->birthDate='1990-11-05';
        $employee3->email='employesirhcare@gmail.com';
        $employee3->hireDate='2016-06-04';

        $employee2->employees()->save($employee3);





        
        
      
    }
}
