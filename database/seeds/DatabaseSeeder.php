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
         $this->call(GendersTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesPermissionsTableSeeder::class);
        $this->call(LeaveTypesTableSeeder::class);
        $this->call(LeaveAccountsTableSeeder::class);
        $this->call(ContractStatusesTableSeeder::class);
    }
}
