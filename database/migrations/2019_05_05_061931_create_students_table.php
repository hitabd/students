<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('residensial')->default(false);
            $table->string('image')->nullable();
            $table->string('name_bn');
            $table->string('name_en');
            $table->string('f_name_bn');
            $table->string('f_name_en');
            $table->string('f_occupation')->nullable();
            $table->string('f_income')->nullable();
            $table->string('m_name_bn');
            $table->string('m_name_en');
            $table->string('m_occupation')->nullable();
            $table->string('m_income')->nullable();
            $table->string('p_village');
            $table->string('p_house');
            $table->string('p_post');
            $table->string('p_thana');
            $table->string('p_district');
            $table->string('per_village');
            $table->string('per_house');
            $table->string('per_post');
            $table->string('per_thana');
            $table->string('per_district');
            $table->date('dob');
            $table->string('b_group')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('skin_color')->nullable();
            $table->string('b_sign')->nullable();
            $table->string('lg_name')->nullable();
            $table->string('lg_village')->nullable();
            $table->string('lg_house')->nullable();
            $table->string('lg_post')->nullable();
            $table->string('lg_thana')->nullable();
            $table->string('lg_district')->nullable();
            $table->string('relationship')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('students');
    }
}
