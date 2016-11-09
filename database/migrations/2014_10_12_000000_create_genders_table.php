<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
       
            $table->increments('id');
            $table->string('name',25);
            $table->char('code',1)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
       
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('genders');
        Schema::enableForeignKeyConstraints();
    }
}
