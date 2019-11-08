<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable()->default(NULL);
            $table->string('player_id')->nullable()->default(NULL);
            $table->string('fixture_id')->nullable()->default(NULL);
            $table->string('team_id')->nullable()->default(NULL);
            $table->string('type')->comment('1:yellow,2:red')->nullable()->default(NULL);          
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
        Schema::dropIfExists('booking');
    }
}
