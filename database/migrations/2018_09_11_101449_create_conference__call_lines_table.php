<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceCallLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference__call_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timeTz('time_zone');
            $table->string('normal_availability');
            $table->string('bookable');
            $table->string('picture');
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
        Schema::dropIfExists('conference__call_lines');
    }
}
