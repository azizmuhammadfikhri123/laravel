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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

//siswa
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::get('/siswa/{student}', 'SiswaController@show');
Route::post('/siswa', 'SiswaController@store');
Route::delete('/siswa/{student}', 'SiswaController@destroy');
Route::get('/siswa/{student}/edit', 'SiswaController@edit');
Route::patch('/siswa/{student}', 'SiswaController@update');

//pendaftaran sekolah
Route::get('/pendaftaran', 'SchoolRegistrationsController@index');
Route::get('/pendaftaran/create', 'SchoolRegistrationsController@create');
Route::get('/pendaftaran/{id}', 'SchoolRegistrationsController@show');
Route::post('/pendaftaran', 'SchoolRegistrationsController@store');
Route::delete('/pendaftaran/{SchoolRegistration}', 'SchoolRegistrationsController@destroy');
Route::get('/pendaftaran/{SchoolRegistration}', 'SchoolRegistrationsController@edit');
Route::patch('/pendaftaran/{SchoolRegistration}', 'SchoolRegistrationsController@update');






