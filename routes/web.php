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

Route::get('/', 'PageController@pricing');


Route::get('/register', 'PageController@register');

Route::get('/mobil', 'Mobil@index');


Route::get('/mobil/edit/{id}', "Mobil@edit");

Route::post('/mobil/update', "Mobil@update")-> name('mobil.update');

Route::get('/mobil/detail', 'Mobil@detail')-> name('mobil.detail');

Route::get('/mobil_create', 'Mobil@create');

Route::get('/mobil/create', 'Mobil@create');

Route::post('/mobil/store', 'Mobil@store') ->name('mobil.store');

Route::get('/mobil/hapus/{id}', 'Mobil@hapus');

Route::get('/mobil/detail/{id}', "Mobil@detail");

Route::get('/mobil/detail1/{id}', "Mobil@detail1");


Auth::routes();

Route::get('/home', 'HomeController@pricing')->name('home');

Route::get('/logout', 'Mobil@logout');


Route::get('/peminjaman','Peminjaman@index');

Route::get('/pengembalian','Pengembalian@index');

Route::get('/peminjaman_create', 'Peminjaman@create');

Route::post('/peminjaman/store', 'Peminjaman@store') ->name('peminjaman.store');

Route::get('/peminjaman/hapus/{id}', "Peminjaman@hapus");

Route::get('/pengembalian/kembali/{id}', "Pengembalian@kembali");

Route::get('/peminjaman/detail/{id}', "Peminjaman@detail");

Route::get('/peminjaman/edit/{id}', "Peminjaman@edit");

Route::post('/peminjaman/update', "Peminjaman@update")-> name('peminjaman.update');

Route::get('/peminjaman/cetak_pdf', 'Peminjaman@cetak_pdf');


Route::get('/pelanggan', "Pelanggan@index");

Route::get('/pelanggan/edit/{id}', "Pelanggan@edit");

Route::post('/pelanggan/update', "Pelanggan@update")-> name('pelanggan.update');

Route::get('/pelanggan/detail', 'Pelanggan@detail')-> name('pelanggan.detail');

Route::get('/pelanggan_create', 'Pelanggan@create');

Route::get('/pelanggan/create', 'Pelanggan@create');

Route::post('/pelanggan/store', 'Pelanggan@store') ->name('pelanggan.store');

Route::get('/pelanggan/hapus/{id}', 'Pelanggan@hapus');

Route::get('/pelanggan/detail/{id}', "Pelanggan@detail");
