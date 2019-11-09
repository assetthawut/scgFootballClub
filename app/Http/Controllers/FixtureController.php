<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FixtureController extends Controller
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

    public function speacialUpdate(Request $request){
        print_r($request->input());
        $semi = $request->input('semi');
        $third = $request->input('third');
        $final = $request->input('final');
        // update semi A 
        DB::table('fixtures')
            ->where('id', $semi['1']['id'])
            ->update([
                'home_id' => $semi['1']['h'],
                'away_id' => $semi['1']['a']
                ]); 
        // update semi B 
        DB::table('fixtures')
            ->where('id', $semi['2']['id'])
            ->update([
                'home_id' => $semi['2']['h'],
                'away_id' => $semi['2']['a']
                ]);          
        // update Third 
        DB::table('fixtures')
            ->where('id', $third['id'])
            ->update([
                'home_id' => $third['h'],
                'away_id' => $third['a']
                ]);             
        // update Final 
        DB::table('fixtures')
            ->where('id', $final['id'])
            ->update([
                'home_id' => $final['h'],
                'away_id' => $final['a']
                ]);                     
        return redirect('/tournament/1');    
    }
}
