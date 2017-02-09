<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('positions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('categoryId')->nullable();
            $table->string('name');
            $table->string('position_status_id');
            $table->string('position_type_id')->nullable();
            $table->string('department_id')->nullable();
            $table->uuid('position_id')->nullable();
            $table->string('location_id')->nullable();
            $table->unsignedInteger('fonction_id')->nullable();
            $table->string('grade_id',1);
            $table->text('description')->nullable();
            $table->timestamps();

        });



        Schema::table('positions', function (Blueprint $table) {
         
            $table->foreign('position_status_id')->references('id')->on('position_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fonction_id')->references('id')->on('fonctions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('positions');
        Schema::enableForeignKeyConstraints();
    }
}
