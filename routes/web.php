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

Route::get('mahasiswa' , 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa/create' , 'MahasiswaController@create')->name('mahasiswa.create');
Route::Post('mahasiswa/simpan' , 'MahasiswaController@store')->name('mahasiswa.simpan');
Route::get('mahasiswa-edit/{id}' , 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::Post('mahasiswa-update/{id}' , 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('mahasiswa-hapus/{id}' , 'MahasiswaController@destroy')->name('mahasiswa.hapus');