<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Basics Tables
   $this->call(FonctionsTableSeeder::class);
        $this->call(MonthsTableSeeder::class);
        $this->call(HolidayTypesTableSeeder::class);
        $this->call(AllDatesTableSeeder::class);
       // $this->call(CalendarYearsTableSeeder::class);
        $this->call(SourceTypesTableSeeder::class);
        $this->call(BusinessUnitsTableSeeder::class);
        $this->call(FundsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(DeptIdsTableSeeder::class);
        $this->call(ContractTypesTableSeeder::class);
        $this->call(SalaryPeriodsTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(LeaveCalculatingMethodsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
         $this->call(GendersTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(PositionStatusesTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(OpeningStatusesTableSeeder::class);
       
        $this->call(EmployeesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesPermissionsTableSeeder::class);
        $this->call(LeaveTypesTableSeeder::class);
        $this->call(LeaveAccountsTableSeeder::class);
        $this->call(ContractStatusesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
    }
}
