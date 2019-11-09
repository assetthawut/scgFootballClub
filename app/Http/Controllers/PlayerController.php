<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // print_r($request->input());
        $clubId = $request->input('clubId');
        $firstnameLists = $request->input('firstname');
        $lastnameLists = $request->input('lastname');
        $tournamentId = $request->input('tournamentId');
/*        
        $lastId  = DB::table('players')->insertGetId(
            [
                'firstname' => 'dd',
                'lastname' => 'dd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        print_r($lastId);
*/       
        // print_r($firstnameLists[1]);
        foreach( $firstnameLists as $key => $value) {
            if(!empty($firstnameLists[$key]) || !empty($lastnameLists[$key])){
                $lastId  = DB::table('players')->insertGetId(
                    [
                        'firstname' => $firstnameLists[$key],
                        'lastname' => $lastnameLists[$key],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
                DB::table('player_in_club')->insert([
                    'player_id' => $lastId,
                    'team_id' => $clubId,
                    'tournament_id' => $tournamentId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()                    
                ]);
            }
        }

        return redirect('/tournament/1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
