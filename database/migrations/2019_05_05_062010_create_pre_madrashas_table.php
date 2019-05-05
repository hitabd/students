<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreMadrashasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_madrashas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exam_class_name')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('result')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('board')->nullable();
            $table->string('document_no')->nullable();
            $table->string('addmission_class')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_madrashas');
    }
}
