<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AddTeamToMiniLeagueTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            //
            DB::table('mini_league_standing')->insert([
                [
                    'tournament_id' => '1',
                    'group_name' => 'A',
                    'team_id' => '1',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],
                [
                    'tournament_id' => '1',
                    'group_name' => 'A',
                    'team_id' => '5',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],     
                [
                    'tournament_id' => '1',
                    'group_name' => 'A',
                    'team_id' => '9',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],     
                [
                    'tournament_id' => '1',
                    'group_name' => 'A',
                    'team_id' => '13',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],  
                [
                    'tournament_id' => '1',
                    'group_name' => 'B',
                    'team_id' => '2',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],        
                [
                    'tournament_id' => '1',
                    'group_name' => 'B',
                    'team_id' => '6',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],  
                [
                    'tournament_id' => '1',
                    'group_name' => 'B',
                    'team_id' => '10',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],
                [
                    'tournament_id' => '1',
                    'group_name' => 'C',
                    'team_id' => '3',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],       
                [
                    'tournament_id' => '1',
                    'group_name' => 'C',
                    'team_id' => '7',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],   
                [
                    'tournament_id' => '1',
                    'group_name' => 'C',
                    'team_id' => '11',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],    
                [
                    'tournament_id' => '1',
                    'group_name' => 'D',
                    'team_id' => '4',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ], 
                [
                    'tournament_id' => '1',
                    'group_name' => 'D',
                    'team_id' => '8',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(), 
                ],
                [
                    'tournament_id' => '1',
                    'group_name' => 'D',
                    'team_id' => '12',
                    'comment' => '',
                    'point' => '0',
                    'played' => '0',
                    'won' => '0',
                    'lost' => '0',
                    'goal_for' => '0',
                    'goal_againt' => '0',
                    'yellow_card' => '0',
                    'read_card' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],                                                                                                                                                                                         
            ]);
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mini_league_table', function (Blueprint $table) {
            //
        });
    }
}
