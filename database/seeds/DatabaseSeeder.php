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
        $this->call(CountriesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(FonctionsTableSeeder::class);
       
        $this->call(LocationsTableSeeder::class);
        $this->call(PositionTypesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(FinancialCodificationsTablesSeeder::class);
         $this->call(HolidayListsTableSeeder::class);
         $this->call(EducationLevelsTableSeeder::class);
         $this->call(LanguagesTableSeeder::class);


         $this->call(MonthsTableSeeder::class);
         $this->call(HolidayTypesTableSeeder::class);
         $this->call(AllDatesTableSeeder::class);
         $this->call(CalendarYearsTableSeeder::class);
        $this->call(ContractTypesTableSeeder::class);
        $this->call(SalaryPeriodsTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(LeaveCalculatingMethodsTableSeeder::class);
     
        
       
       
        $this->call(PositionStatusesTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(OpeningStatusesTableSeeder::class);
       
        $this->call(UsersTableSeeder::class);
        $this->call(RolesPermissionsTableSeeder::class);
        $this->call(LeaveTypesTableSeeder::class);
       // $this->call(LeaveAccountsTableSeeder::class);
        $this->call(ContractStatusesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(ExchangeRatesTableSeeder::class);
    }
}
