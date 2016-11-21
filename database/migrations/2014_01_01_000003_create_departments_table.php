<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('departments', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name',50);
        $table->string('usualName',50);
        $table->string('code',20)->unique();
        $table->integer('department_id')->unsigned()->nullable();;
        $table->timestamps();
        
        $table->foreign('department_id')->references('id')->on('departments');
    });

      
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
