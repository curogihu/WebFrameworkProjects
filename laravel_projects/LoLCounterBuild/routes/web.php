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
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/list', function () {
    return view('list');
});

Route::post('/test', 'StatisticsController@create');

Route::get('/champion/statistics', function () {
    return view('welcome');
});

Route::get('/champion/statistics/{champion_name}', 'StatisticsController@create');

Route::get('/champion/{champion_name}/statistics/{role}/{enemy_champion_name}', 'StatisticsController@index')->name('statistics');


/*
/api/v1/self/{champion_name}?token=??? -> get existed lanes info
/api/v1/self/{champion_name}/{lane}?token=??? -> get existed enemies info
/api/v1/self/{champion_name}/{lane}/enemy/{enemy-champion}?token=??? -> get counter win lose build incluing all ranks
/api/v1/self/{champion_name}/{lane}/enemy/{enemy-champion}?token=???&rank=bronze,silver,challenger -> get counter win lose build including particular ranks
*/