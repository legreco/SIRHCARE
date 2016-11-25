<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedInteger('title_id');
            $table->string('profile_picture')->nullable();
            $table->string('employeeId',10)->unique();
            $table->string('categoryId',10)->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('gender_id');
            $table->uuid('employee_sup_id')->nullable();
            $table->string('cinOrNif');
            $table->date('birthDate');
            $table->string('email')->unique();
            $table->date('hireDate');
            $table->timestamps();

          
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('employee_sup_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('employees');
        Schema::enableForeignKeyConstraints();
    }
}
