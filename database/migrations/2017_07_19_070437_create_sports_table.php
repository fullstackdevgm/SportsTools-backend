<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->increments('id');

            $table->string('sport_name', 45);
            $table->string('main_sport_name', 45)->nullable();
            $table->string('sport_description', 45)->nullable();
            $table->string('sports_modifier', 45)->nullable();
            $table->string('doc_link', 45)->nullable();
            $table->string('indoor_outdoor', 45)->nullable();

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
        Schema::dropIfExists('sports');
    }
}
