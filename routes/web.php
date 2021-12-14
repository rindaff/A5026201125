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

Route::get('tugas4', function () {
    return view('tugas4web');
});
Route::get('praktikum2', function () {
    return view('prak2web');
});
Route::get('ets', 'ViewController@showEts');
Route::get('tugasphp', 'ViewController@showConvert');
Route::post('tugasphp', 'ViewController@calcFactorial');

//route CRUD Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'PegawaiController@detail');

//route CRUD Absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

//route CRUD Bedak
Route::get('/bedak', 'BedakController@indexbedak');
Route::get('/bedak/add', 'BedakController@add');
Route::post('/bedak/store', 'BedakController@store');
Route::get('/bedak/edit/{id}', 'BedakController@edit');
Route::post('/bedak/update', 'BedakController@update');
Route::get('/bedak/hapus/{id}', 'BedakController@hapus');
Route::get('/bedak/cari','BedakController@cari');
Route::get('/bedak/view/{id}','BedakController@detail');
