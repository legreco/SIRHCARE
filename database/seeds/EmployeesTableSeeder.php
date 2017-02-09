<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Employee;
use Carbon\Carbon;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the dbase seeds.
     *
     * @return void
     */
    public function run()
    {

        Excel::load(base_path() . '/database/seeds/excel/employees.xlsx', function ($reader) {

            // Loop through all sheets
            // $reader->dd();
            // Loop through all sheets

            $array = $reader->toArray();

            foreach ($array as $row) {
            $employee=new Employee();
                $employee->employeeId=$row['code'];
                $employee->country_id='HTI';
                $employee->firstName=$row['nom'];
                $employee->lastName=$row['prenom'];
                $employee->gender_id=$row['sex'];
                $employee->save();

            }


        });



        $departements=['IT','EDU','OPE','RADIO','FIN','PROC','VSLA','PQL','DFAP','ASUS','KAT'];
        $locations=['JER','PAP','GON','PASCA','HIN','JAC','JRABEL','LAG'];
        $jobs=['Magasinier','Chauffeur','Network Administrator','Auditeur','Agent de sécurité','Superviseur Terrain'];
        $faker = Faker\Factory::create();
        //
        $employee1= new Employee();
        $employee1->employeeId='2046';
        $employee1->country_id='HTI';
        $employee1->firstName='Toto Sup Sup';
        $employee1->lastName='Jean';
        $employee1->gender_id='M';
        $employee1->cinOrNif='2434222442';
        $employee1->birthDate='1978-11-05';
        $employee1->business_email='supsuperieuremployesirhcare@gmail.com';
        $employee1->save();



        $employee2= new Employee();
        $employee2->employeeId='2047';
        $employee2->firstName='Toto Sup';
        $employee2->country_id='HTI';
        $employee2->lastName='Jean';
        $employee2->gender_id='M';
        $employee2->cinOrNif='2434262523';
        $employee2->birthDate='1980-11-05';
        $employee2->business_email='superieuremployesirhcare@gmail.com';
        $employee1->employees()->save($employee2);


        $employee3= new Employee();
        $employee3->employeeId='2048';
        $employee3->country_id='HTI';
        $employee3->firstName='Toto';
        $employee3->lastName='Jean';
        $employee3->gender_id='M';
        $employee3->cinOrNif='243426442';
        $employee3->birthDate='1990-11-05';
        $employee3->business_email='employesirhcare@gmail.com';
        $employee2->employees()->save($employee3);






        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            $employee=New Employee();
            $employee->employeeId=$faker->unique()->numberBetween(0,100000);
            $employee->firstName=$faker->firstName;
            $employee->country_id='HTI';
            $employee->lastName=$faker->lastName;
            $employee->gender_id='M';
            $employee->cinOrNif=$faker->creditCardNumber;
            $employee->birthDate=$faker->date('Y-m-d','now');
            $employee->business_email=$faker->unique()->email;
            $employee->save();
        }
        
        
      
    }
}
