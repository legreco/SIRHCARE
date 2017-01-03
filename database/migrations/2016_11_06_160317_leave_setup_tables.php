<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeaveSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('leave_renewal_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('leave_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code',15)->unique();
            $table->string('description',128)->nullable();
            $table->unsignedInteger('minDaysPrior')->default(0);
            $table->boolean('isPaid')->nullable();
            $table->decimal('maxBalance')->unsigned()->nullable();
            $table->boolean('doWeekendCount')->default(false);
            $table->boolean('isActive')->default(false);
            $table->boolean('isDeductibleFromBank')->default(false);
            $table->timestamps();
        });

        Schema::create('leave_policies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('leave_policy_leave_type', function (Blueprint $table) {
            $table->unsignedInteger('leave_policy_id');
            $table->unsignedInteger('leave_type_id');
            $table->decimal('yearlyAllowance')->unsigned();

            $table->timestamps();
        });


        Schema::create('leave_requests', function (Blueprint $table) {
            $table->uuid('id');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('duration');
            $table->string('comments');
            $table->string('address');
            $table->string('telephone');
            $table->unsignedInteger('leave_type_id');
            $table->string('status');
            $table->uuid('employee_id');
            $table->boolean('validated')->nullable();
            $table->dateTime('validatedOn')->nullable();
            $table->uuid('validatedBy')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('employee_id')->references('id')->on('employees')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('leave_type_id')->references('id')->on('leave_types')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('leave_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->double('balance',5,2);
            $table->uuid('employee_id');
            $table->integer('leave_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('leave_type_id')->references('id')->on('leave_types')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['employee_id','leave_type_id']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('leave_types');
        Schema::dropIfExists('leave_policies');
        Schema::dropIfExists('leave_renewal_plans');
        Schema::dropIfExists('leave_policy_leave_type');
        Schema::dropIfExists('leave_accounts');
        Schema::dropIfExists('leave_requests');
        Schema::enableForeignKeyConstraints();
    }
}
