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
            $table->uuid('id');
            $table->string('employeeId',10)->unique();
            $table->string('categoryId',10)->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->unsignedInteger('gender_id');
            $table->uuid('employee_sup_id')->nullable();
            $table->string('cinOrNif');
            $table->date('birthDate');
            $table->string('email');
            $table->date('hireDate');
            $table->timestamps();
            
            $table->primary('id');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->foreign('employee_sup_id')->references('id')->on('employees')->onDelete('cascade');
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
