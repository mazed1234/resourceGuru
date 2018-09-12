<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('picture');
            $table->string('email')->unique();
            $table->string('permission');
            $table->timeTz('time_zone');
            $table->string('normal_availability');
            $table->string('bookable');
            $table->string('contractor');
            $table->string('department');
            $table->string('job_title');
            $table->string('color');
            $table->string('phone');
            $table->string('notes');
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
        Schema::dropIfExists('people');
    }
}
