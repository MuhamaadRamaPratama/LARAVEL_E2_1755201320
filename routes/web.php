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

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/', 'MahasiswaController@index');
//Mahasiswa (Route dengan detail satu persatu)
Route::get('/mhs', 'MahasiswaController@index')->name('mhs.index');
Route::get('/mhs/list', 'MahasiswaController@mhs_list')->name('mhs.list');
Route::get('/mhs/create', 'MahasiswaController@create');
Route::post('/mhs/store', 'MahasiswaController@store');
Route::get('/mhs/edit/{nim}', 'MahasiswaController@edit');
Route::put('/mhs/update/{mahasiswa:nim}', 'MahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:nim}', 'MahasiswaController@destroy')->name('mhs.delete');
//Prodi (Route Framework)
Route::resource('/prodi', 'ProdiController');

Route::resource('/mk', 'mkController');


Route::get('/', 'mkController@index'); 
//Mahasiswa (Route dengan detail satu persatu)
Route::get('/matakuliah', 'mkController@index')->name('matakuliah.index'); 
Route::get('/matakuliah/list', 'mkController@matakuliah_list')->name('matakuliah.list'); 
Route::get('/matakuliah/create', 'mkController@create'); 
Route::post('/matakuliah/store', 'mkController@store'); 
Route::get('/matakuliah/{kode_mk}/edit', 'mkController@edit'); 
Route::put('/matakuliah/{kode_mk}/update', 'mkController@update')->name('matakuliah.update'); 
Route::delete('/matakuliah/{kode_mk}', 'mkController@destroy')->name('matakuliah.delete'); 