<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/club', 'ClubController');
Route::resource('/booking', 'BookingController');
Route::resource('/fixture', 'FixtureController');
Route::resource('/league', 'LeagueController');
Route::resource('/player', 'PlayerController');
Route::resource('/score', 'ScoreController');
Route::resource('/tournament', 'TournamentController');
