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
        $table->string('id')->primary();
        $table->string('name');
        $table->string('usualName');
        $table->boolean('isProject');
        $table->string('department_id')->nullable();
        $table->timestamps();
        
    });


        Schema::table('departments', function (Blueprint $table) {

            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('departments');
        Schema::enableForeignKeyConstraints();
        
    }
}
