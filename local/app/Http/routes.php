<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('movies');
});*/
Route::get('/','IndexController@index');

Route::post('/','AjaxController@updateOrder');

Route::get('/{n}', function ($n) {
    return view('movies')->with('page',$n);
});

