<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home_id')->nullable()->default(NULL);
            $table->string('away_id')->nullable()->default(NULL);
            $table->string('home_score')->nullable()->default(NULL);
            $table->string('away_score')->nullable()->default(NULL);
            $table->string('stadium_name')->nullable()->default(NULL);
            $table->string('tournament_id')->nullable()->default(NULL);
            $table->string('type')->nullable()->default(NULL)->comment('1:league,2:knockout');
            $table->string('winner_id')->nullable()->default(NULL);
            $table->string('slot_ref')->nullable()->default(NULL);
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
        Schema::dropIfExists('fixtures');
    }
}
