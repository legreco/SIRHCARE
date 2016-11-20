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
        $departements=['IT','EDU','OPE','RADIO','FIN','PROC','VSLA','PQL','DFAP','ASUS','KAT'];
        $locations=['JER','PAP','GON','PASCA','HIN','JAC','JRABEL','LAG'];
        $jobs=['Magasinier','Chauffeur','Network Administrator','Auditeur','Agent de sécurité','Superviseur Terrain'];
        $faker = Faker\Factory::create();
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
        $employee1->contractEnd=$faker->date('Y-m-d','now');
        $employee1->salary=$faker->randomFloat(2,200,4000);
        $employee1->departement=$faker->randomElement($departements);
        $employee1->location=$faker->randomElement($locations);
        $employee1->job=$faker->randomElement($jobs);
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
        $employee2->contractEnd=$faker->date('Y-m-d','now');
        $employee2->salary=$faker->randomFloat(2,200,4000);
        $employee2->departement=$faker->randomElement($departements);
        $employee2->location=$faker->randomElement($locations);
        $employee2->job=$faker->randomElement($jobs);
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
        $employee3->contractEnd=$faker->date('Y-m-d','now');
        $employee3->salary=$faker->randomFloat(2,200,4000);
        $employee3->departement=$faker->randomElement($departements);
        $employee3->location=$faker->randomElement($locations);
        $employee3->job=$faker->randomElement($jobs);
        $employee2->employees()->save($employee3);






        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            $employee=New Employee();
            $employee->employeeId=$faker->unique()->numberBetween(0,100000);
            $employee->categoryId=$faker->unique()->numberBetween(0,100000);
            $employee->firstName=$faker->firstName;
            $employee->lastName=$faker->lastName;
            $employee->gender_id=$faker->numberBetween(1,2);
            $employee->cinOrNif=$faker->creditCardNumber;
            $employee->birthDate=$faker->date('Y-m-d','now');
            $employee->email=$faker->unique()->email;
            $employee->hireDate=$faker->date('Y-m-d','now');
            $employee->contractEnd=$faker->dateTimeBetween('-2 years','+1 year');
            $employee->salary=$faker->randomFloat(2,200,4000);
            $employee->departement=$faker->randomElement($departements);
            $employee->location=$faker->randomElement($locations);
            $employee->job=$faker->randomElement($jobs);
            $employee->save();
        }
        
        
      
    }
}
