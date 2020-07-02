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
Route::get('/', function(){
    return view('adminlte.index');
});
Route::get('/data-tables', function(){
    return view('adminlte.data_tables');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::get('/jawaban/create/{pertanyaan_id}', 'JawabanController@create');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');




