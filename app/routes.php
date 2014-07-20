<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Route::get('/', 'App\\Controllers\\BootstrapController@home');
//Route::get('/show', 'App\\Controllers\\HomeController@showWelcome');
//Route::get('/', 'App\\Controllers\\TestController@index');

$NS = 'App\\Controllers\\';

Route::get('/',$NS.'AnggotaController@view');
Route::get('/anggota',$NS . 'AnggotaController@view');
Route::get('/anggota/add',$NS . 'AnggotaController@add');
Route::post('/anggota/add/proses',$NS . 'AnggotaController@addProses');
Route::get('/anggota/edit/{id}',$NS . 'AnggotaController@edit');
Route::post('/anggota/edit/proses',$NS . 'AnggotaController@editProses');
Route::get('/anggota/delete/{id}',$NS . 'AnggotaController@delete');

Route::get('/buku',$NS . 'BukuController@view');
Route::get('/buku/add',$NS . 'BukuController@add');
Route::post('/buku/add/proses',$NS . 'BukuController@addProses');
Route::get('/buku/edit/{id}',$NS . 'BukuController@edit');
Route::post('/buku/edit/proses',$NS . 'BukuController@editProses');
Route::get('/buku/delete/{id}',$NS . 'BukuController@delete');


Route::get('/peminjaman',$NS . 'PeminjamanController@view');
Route::get('/peminjaman/add',$NS . 'PeminjamanController@add');
Route::post('/peminjaman/add/proses',$NS . 'PeminjamanController@addProses');
Route::get('/peminjaman/edit/{id}',$NS . 'PeminjamanController@edit');
Route::post('/peminjaman/edit/proses',$NS . 'PeminjamanController@editProses');
Route::get('/peminjaman/delete/{id}',$NS . 'PeminjamanController@delete');







