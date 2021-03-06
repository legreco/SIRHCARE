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
            $table->string('id')->primary();
            $table->string('name');
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
            $table->string('leave_type_id');
            $table->decimal('yearlyAllowance')->unsigned();

            $table->timestamps();
        });


        Schema::create('leave_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->integer('duration');
            $table->string('comments')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('leave_type_id');
            $table->string('status');
            $table->uuid('employee_id');
            $table->dateTime('submittedOn')->nullable();
            $table->boolean('validated')->nullable();
            $table->dateTime('validatedOn')->nullable();
            $table->uuid('validatedBy')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('employee_id')->references('id')->on('employees')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('leave_type_id')->references('id')->on('leave_types')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('leave_accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->double('balance',5,2);
            $table->uuid('employee_id');
            $table->string('leave_type_id');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('leave_type_id')->references('id')->on('leave_types')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['employee_id','leave_type_id']);
        });

        Schema::create('leave_transactions', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('leave_account_id');
            $table->string('transaction_type',30);
            $table->double('amount',5,2);
            $table->double('old_balance',5,2);
            $table->double('new_balance',5,2);
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('leave_account_id')->references('id')->on('leave_accounts')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('leave_transactions');
        Schema::enableForeignKeyConstraints();
    }
}
