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

/**
* Main homepage visitors see when they visit just /
*/

Route::get('/', 'ScoreController@index');
Route::post('/', 'ScoreController@score');
Route::get('/leaders', 'ScoreController@leaderboard');


//logViewer Service Package
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
