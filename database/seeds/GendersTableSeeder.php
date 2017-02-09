<?php

use Illuminate\Database\Seeder;
use App\Gender;
class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gender=new Gender();
        $gender->id='M';
        $gender->name='Homme';
        $gender->save();

        $gender=new Gender();
        $gender->id='F';
        $gender->name='Femme';
        $gender->save();
        
     
    }
}
