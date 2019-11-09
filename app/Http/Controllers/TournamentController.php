<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return  view('tournament.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournamentId = $id;
        $fixtures = DB::table('fixtures')
                                         ->join('teams as home','fixtures.home_id','home.id')
                                         ->join('teams as away','fixtures.away_id','away.id')
                                         ->select('fixtures.*','home.name as home_name','away.name as away_name')
                                         ->where('tournament_id',$id)
                                         ->orderBy('start_at', 'asc')
                                         ->get();
        $teams = DB::table('teams')->get();

        $minileague['A'] = DB::table('mini_league_standing')
                                ->join('teams','mini_league_standing.team_id','teams.id')
                                ->select('mini_league_standing.*','teams.name')
                                ->where('group_name','A')
                                ->orderBy('mini_league_standing.point', 'desc')
                                ->get();
        $minileague['B'] = DB::table('mini_league_standing')
                                ->join('teams','mini_league_standing.team_id','teams.id')
                                ->select('mini_league_standing.*','teams.name')
                                ->where('group_name','B')
                                ->orderBy('mini_league_standing.point', 'desc')
                                ->get();                                
        $minileague['C'] = DB::table('mini_league_standing')
                                ->join('teams','mini_league_standing.team_id','teams.id')
                                ->select('mini_league_standing.*','teams.name')
                                ->where('group_name','C')
                                ->orderBy('mini_league_standing.point', 'desc')
                                ->get();                  
        $minileague['D'] = DB::table('mini_league_standing')
                                ->join('teams','mini_league_standing.team_id','teams.id')
                                ->select('mini_league_standing.*','teams.name')
                                ->where('group_name','D')
                                ->orderBy('mini_league_standing.point', 'desc')
                                ->get();                                                                         
        // stat  
        /*
            select COUNT(*) as total,players.firstname FROM goals 
            LEFT JOIN players on players.id = goals.player_id
            GROUP by player_id
            ORDER By total desc        
        */   
        $stat   = DB::select("select COUNT(*) as total, firstname,lastname FROM goals 
        LEFT JOIN players on players.id = goals.player_id
        GROUP by goals.player_id,firstname,lastname
        ORDER By total desc");
        return  view('tournament.index',['fixtures' => $fixtures,'teams' => $teams,'minileague' => $minileague,'stat' => $stat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
