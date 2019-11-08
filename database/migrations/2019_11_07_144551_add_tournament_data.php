<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


class AddTournamentData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('tournaments')->insert([
            [
                'name' => "FA Cup 2019",
                'type' => "2",
                'dateTime' => '2019-11-09',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
