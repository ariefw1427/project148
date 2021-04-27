<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/ujian','UjianController@index');
Route::get('/ujian/tambah', 'UjianController@tambah');
Route::post('/ujian/store', 'UjianController@store');
Route::get('/ujian/edit/{id}', 'UjianController@edit');
Route::put('/ujian/update/{id}', 'UjianController@update');
Route::get('/ujian/hapus/{id}', 'UjianController@delete');