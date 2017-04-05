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

//Set homepage to the index controller and BillController file
Route::get('/', 'BillController@index');

//get the page /bill
Route::get('/bill', 'BillController@index');

//get the logic that hooks up the bill calculations and validation
Route::post('/bill', 'BillController@bill');

//logViewer Service Package
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
