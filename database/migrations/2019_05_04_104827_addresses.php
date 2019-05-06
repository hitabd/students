<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('divisions', function (Blueprint $table) {
        //     $table->increments('id');            
        //     $table->string('name');
        //     $table->string('bn_name');
        //     $table->string('country')->default('Bangladesh');
        //     $table->timestamps();
        // });
        // Schema::create('districts', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedInteger('division_id');
        //     $table->string('name');
        //     $table->string('bn_name');
        //     $table->double('lat');
        //     $table->double('lon');
        //     $table->string('website');
        //     $table->timestamps();
        //     $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade')->onUpdate('cascade');
        // });
        // Schema::create('upazilas', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedInteger('district_id');
        //     $table->string('name');
        //     $table->string('bn_name');
        //     $table->timestamps();
        //     $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upazilas');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('divisions');
    }
}
