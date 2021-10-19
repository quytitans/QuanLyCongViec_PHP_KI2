<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_models', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dob');
            $table->string('address');
            $table->string('IDnumber');
            $table->unsignedInteger('typeID');
            $table->foreign('typeID')->references('id')->on('type_staff_models');
            $table->string('taxCode');
            $table->string('bankAccNumber');
            $table->integer('status'); //1: dang hoat dong, 2: da khoa, 3: deleted
            $table->date('createAt');
            $table->date('updateAt');
            $table->date('deletedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_models');
    }
}
