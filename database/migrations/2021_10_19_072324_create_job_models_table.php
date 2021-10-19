<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('mainStaffID');
            $table->foreign('mainStaffID')->references('id')->on('type_staff_models');
            $table->unsignedInteger('othersStaffID');
            $table->foreign('othersStaffID')->references('id')->on('type_staff_models');
            $table->unsignedInteger('managerID');
            $table->foreign('managerID')->references('id')->on('type_staff_models');
            $table->unsignedInteger('generalManagerID');
            $table->foreign('generalManagerID')->references('id')->on('type_staff_models');
            $table->date('startDate');
            $table->date('dealline');
            $table->date('endDate');
            $table->integer('jobEvaluation');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_models');
    }
}
