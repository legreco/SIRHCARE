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
             'id'=>'AL',
            'name' => 'Congé annuel',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('leave_types')->insert([
            'id' =>'SL',
            'name' => 'Congé maladie',
           
            'created_at'=>Carbon::now(),
        ]);
        DB::table('leave_types')->insert([
            'name' => 'Congé urgence',
            'id' =>'UL',
            'created_at'=>Carbon::now(),
        ]);
    }
}
