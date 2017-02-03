<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialCodificationsSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('funds', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('fund_id');
            $table->string('description')->nullable();
            $table->date('startDate');
            $table->date('endDate');
              $table->softDeletes();
            $table->timestamps();



            $table->foreign('fund_id')->references('id')->on('funds')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('activity_Ids', function (Blueprint $table) {
            $table->string('id')->primary;
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('project_id');
            $table->softDeletes();
            $table->timestamps();



            $table->foreign('project_id')->references('id')->on('funds')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('source_types', function (Blueprint $table) {
            $table->string('id')->primary;
            $table->string('name');
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('dept_ids', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('business_units', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
        Schema::dropIfExists('business_units');
        Schema::dropIfExists('dept_ids');
        Schema::dropIfExists('funds');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('source_types');
        Schema::dropIfExists('activity_ids');
        Schema::enableForeignKeyConstraints();
    }
}
