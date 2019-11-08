<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiniLeagueStandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_league_standing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tournament_id')->nullable()->default(NULL);
            $table->string('group_name')->nullable()->default(NULL);
            $table->string('team_id')->nullable()->default(NULL);
            $table->string('comment')->nullable()->default(NULL);
            $table->string('point')->nullable()->default(NULL);
            $table->string('played')->nullable()->default(NULL);
            $table->string('won')->nullable()->default(NULL);
            $table->string('lost')->nullable()->default(NULL);
            $table->string('goal_for')->nullable()->default(NULL);
            $table->string('goal_againt')->nullable()->default(NULL);
            $table->string('yellow_card')->nullable()->default(NULL);
            $table->string('read_card')->nullable()->default(NULL);
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
        Schema::dropIfExists('mini_league_standing');
    }
}
