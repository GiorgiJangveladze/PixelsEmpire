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

Route::get('/',['uses' => 'FrontControllers\HomeController@index','as' => 'home']);

Auth::routes();

//index page
Route::get('/home', ['uses' => 'FrontControllers\HomeController@index','as' => 'home']);

Route::group(['middleware'=>'auth', 'namespace'=>'FrontControllers'], function(){
    Route::get('/game', ['uses' => 'GameController@index','as' => 'game']);
    Route::post('/update_map', 'GameController@updateMap');
    Route::post('/update_map_online', 'GameController@updateMapOnline');
    Route::post('/game/message', 'GameController@sendMessage');
    Route::post('/get_message', 'GameController@getMessage');
});
