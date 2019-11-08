<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColReadCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('mini_league_standing', function (Blueprint $table) {
            $table->renameColumn('read_card', 'red_card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('mini_league_standing', function (Blueprint $table) {
            $table->renameColumn('red_card', 'read_card');
        });        
    }
}
