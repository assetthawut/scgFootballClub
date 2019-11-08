<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class InsertFixturesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('fixtures')->insert([
            [
                'home_id' => '1',
                'away_id' => '5',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '2', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'A', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 12:00:00',
                'end_at' => '2019-11-09 13:00:00'
            ],
            [
                'home_id' => '1',
                'away_id' => '9',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '2', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'A', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 13:00:00',
                'end_at' => '2019-11-09 14:00:00'
            ],      
            [
                'home_id' => '13',
                'away_id' => '1',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '2', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'A', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 14:00:00',
                'end_at' => '2019-11-09 15:00:00'
            ],
            [
                'home_id' => '2',
                'away_id' => '10',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '3', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'B', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 11:00:00',
                'end_at' => '2019-11-09 12:00:00'
            ],            
            [
                'home_id' => '9',
                'away_id' => '13',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '3', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'A', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 12:00:00',
                'end_at' => '2019-11-09 13:00:00'
            ],    
            [
                'home_id' => '5',
                'away_id' => '13',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '3', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'A', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 13:00:00',
                'end_at' => '2019-11-09 14:00:00'
            ], 
            [
                'home_id' => '5',
                'away_id' => '9',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '3', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'A', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 14:00:00',
                'end_at' => '2019-11-09 15:00:00'
            ],    
            [
                'home_id' => '3',
                'away_id' => '11',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '4', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'C', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 11:00:00',
                'end_at' => '2019-11-09 12:00:00'
            ],                
            [
                'home_id' => '2',
                'away_id' => '6',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '4', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'B', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 12:00:00',
                'end_at' => '2019-11-09 13:00:00'
            ],    
            [
                'home_id' => '4',
                'away_id' => '8',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '4', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'D', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 13:00:00',
                'end_at' => '2019-11-09 14:00:00'
            ],   
            [
                'home_id' => '7',
                'away_id' => '11',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '4', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'C', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 14:00:00',
                'end_at' => '2019-11-09 15:00:00'
            ],        
            [
                'home_id' => '4',
                'away_id' => '12',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '5', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'D', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 11:00:00',
                'end_at' => '2019-11-09 12:00:00'
            ],   
            [
                'home_id' => '3',
                'away_id' => '7',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '5', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'C', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 12:00:00',
                'end_at' => '2019-11-09 13:00:00'
            ],                            
            [
                'home_id' => '6',
                'away_id' => '10',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '5', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'B', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 13:00:00',
                'end_at' => '2019-11-09 14:00:00'
            ],                            
            [
                'home_id' => '8',
                'away_id' => '12',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '5', 
                'tournament_id' => '1',
                'type' => '1',
                'winner_id' => '',
                'slot_ref' => 'D', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 14:00:00',
                'end_at' => '2019-11-09 15:00:00'
            ],          
            [
                'home_id' => '',
                'away_id' => '',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '3', 
                'tournament_id' => '1',
                'type' => '2',
                'winner_id' => '',
                'slot_ref' => 'sem1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 15:00:00',
                'end_at' => '2019-11-09 16:00:00'
            ],     
            [
                'home_id' => '',
                'away_id' => '',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '4', 
                'tournament_id' => '1',
                'type' => '2',
                'winner_id' => '',
                'slot_ref' => 'sem2', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 15:00:00',
                'end_at' => '2019-11-09 16:00:00'
            ],
            [
                'home_id' => '',
                'away_id' => '',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '3', 
                'tournament_id' => '1',
                'type' => '2',
                'winner_id' => '',
                'slot_ref' => 'final', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 16:00:00',
                'end_at' => '2019-11-09 17:00:00'
            ],                             
            [
                'home_id' => '',
                'away_id' => '',
                'home_score' => '0', 
                'away_score' => '0', 
                'stadium_name' => '4', 
                'tournament_id' => '1',
                'type' => '2',
                'winner_id' => '',
                'slot_ref' => '3rd', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => '0',
                'start_at' =>'2019-11-09 16:00:00',
                'end_at' => '2019-11-09 17:00:00'
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
        //
    }
}
