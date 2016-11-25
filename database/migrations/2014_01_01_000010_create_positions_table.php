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
            $table->string('name',50);
           
            $table->unsignedInteger('position_status_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('location_id');
            $table->timestamps();



            $table->foreign('position_status_id')->references('id')->on('position_statuses')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');

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
