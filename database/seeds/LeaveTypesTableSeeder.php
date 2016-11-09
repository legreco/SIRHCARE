<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class LeaveTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('leave_types')->insert([
            'name' => 'Congé annuel',
            'code' =>'AL',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('leave_types')->insert([
            'name' => 'Congé maladie',
            'code' =>'SL',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('leave_types')->insert([
            'name' => 'Congé urgence',
            'code' =>'UL',
            'created_at'=>Carbon::now(),
        ]);
    }
}
