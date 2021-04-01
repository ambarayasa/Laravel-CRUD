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


Route::get('/', 'GolongandarahController@index');

route::get('/mahasiswa', 'MahasiswaController@index');
route::get('/mahasiswa/create', 'MahasiswaController@create');
route::post('/mahasiswa', 'MahasiswaController@store');
route::delete('/mahasiswa/{id}', 'MahasiswaController@destroy');
route::resource('/mahasiswa', 'MahasiswaController');

route::get('/kontak', 'MahasiswaController@index');

route::get('/hobby', 'HobbyController@index');
route::get('/hobby/create', 'HobbyController@create');
route::post('/hobby', 'HobbyController@store');
route::delete('/hobby/{id}', 'HobbyController@destroy');
route::resource('/hobby', 'HobbyController');

route::get('/golongandarah', 'GolongandarahController@index');
route::get('/golongandarah/create', 'GolongandarahController@create');
route::post('/golongandarah', 'GolongandarahController@store');
route::delete('/golongandarah/{id}', 'GolongandarahController@destroy');
route::resource('/golongandarah', 'GolongandarahController');

route::get('/kontakhobby', 'KontakhobbyController@index');
route::get('/kontakhobby/create', 'KontakhobbyController@create');
route::post('/kontakhobby', 'KontakhobbyController@store');
route::delete('/kontakhobby/{id}', 'KontakhobbyController@destroy');
route::resource('/kontakhobby', 'KontakhobbyController');


