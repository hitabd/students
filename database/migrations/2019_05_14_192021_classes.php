<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Classes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('class_student', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->unique();
            $table->unsignedBigInteger('class_id');
            $table->integer('roll');

            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
        Schema::dropIfExists('class_student');
    }
}
