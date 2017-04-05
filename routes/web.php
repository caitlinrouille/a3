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

//Get Master homepage view
// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/', 'BillController@bill');


//Bill Splitter Controller
Route::get('/bill', 'BillController@bill');

//logViewer Service Package
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
