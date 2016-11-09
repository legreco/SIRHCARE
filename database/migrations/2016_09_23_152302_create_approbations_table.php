<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprobationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approbations', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('approvable_id');
            $table->string('approvable_type');
            $table->uuid('employee_id');
            $table->uuid('confirmation_code');
            $table->uuid('rejection_code');
            $table->boolean('isApproved')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->dateTime('rejected_at')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('approbations');
        Schema::enableForeignKeyConstraints();
       
    }
}
