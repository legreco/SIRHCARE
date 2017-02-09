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
            $table->string('profile_picture')->nullable();
            $table->string('employeeId',10)->unique()->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('country_id',3)->nullable();
            $table->string('employee_status_id')->nullable();
            $table->string('gender_id',1)->nullable();
            $table->string('address')->nullable();
            $table->string('business_tel')->nullable();
            $table->string('business_email')->nullable();
            $table->string('organizational_email')->nullable();
            $table->uuid('employee_sup_id')->nullable();
            $table->string('cinOrNif')->nullable();
            $table->date('birthDate')->nullable();
            $table->date('dateOfFirstHiring')->nullable();
            $table->dateTime('banned_at')->nullable();
            $table->string('banned_for')->nullable();
            $table->timestamps();

          
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('employee_status_id')->references('id')->on('employee_statuses')->onDelete('cascade')->onUpdate('cascade');
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
