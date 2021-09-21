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
// route Navigasi
Route::get('/', 'NavController@home');
Route::get('/alat', 'NavController@alat');
Route::get('/kategori', 'NavController@kategori');
Route::get('/kalibrator', 'NavController@kalibrator');
Route::get('/project', 'NavController@project');
Route::get('/tentang', 'NavController@tentang');

// route Alat
Route::get('/alat/tambah', 'AlatController@tambah');
Route::get('/alat/hapus/{id}', 'AlatController@hapus');
Route::get('/alat/edit/{id}', 'AlatController@edit');
Route::post('/alat/store', 'AlatController@store');
Route::put('/alat/update/{id}', 'AlatController@update');

// route Kategori
Route::get('/kategori/tambah', 'KategoriController@tambah');
Route::get('/kategori/hapus/{id}', 'KategoriController@hapus');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/kategori/store', 'KategoriController@store');
Route::put('/kategori/update/{id}', 'KategoriController@update');

// route kalibrator
Route::get('/kalibrator/tambah', 'KalibratorController@tambah');
Route::get('/kalibrator/hapus/{id}', 'KalibratorController@hapus');
Route::get('/kalibrator/edit/{id}', 'KalibratorController@edit');
Route::post('/kalibrator/store', 'KalibratorController@store');
Route::put('/kalibrator/update/{id}', 'KalibratorController@update');