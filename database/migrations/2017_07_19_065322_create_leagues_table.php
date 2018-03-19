<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('id');

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('games_number', 45)->nullable();
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->integer('organization_id')->nullable();
            $table->integer('sport_id')->nullable();
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
        Schema::dropIfExists('leagues');
    }
}
