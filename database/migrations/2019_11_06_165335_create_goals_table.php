<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('player_id')->nullable()->default(NULL);
            $table->string('fixture_id')->nullable()->default(NULL);
            $table->string('team_id')->nullable()->default(NULL);
            $table->string('score_no')->nullable()->default(NULL);
            $table->string('type')->comment('1:openPlay,2:freekick,3.penalty')->nullable()->default(NULL);
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
        Schema::dropIfExists('goals');
    }
}
