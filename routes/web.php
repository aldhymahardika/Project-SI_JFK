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

Route::get('/usulan', 'UsulanController@index');
Route::get('/usulan/tambah', 'UsulanController@usulan');
Route::post('/usulan/store', 'UsulanController@simpan');
Route::get('/usulan/detail', 'UsulanController@detail');;
Route::get('/peserta/tambah', 'UsulanController@tambah');
Route::post('/peserta/store', 'UsulanController@store');
Route::get('/peserta/edit/{id}', 'UsulanController@edit');
Route::put('/peserta/update/{id}', 'UsulanController@update');
Route::get('/peserta/hapus/{id}', 'UsulanController@hapus');