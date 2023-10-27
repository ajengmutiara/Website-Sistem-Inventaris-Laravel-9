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

Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('home', function(){
    return view('home');
});

Route::get('data_peminjam', function(){
    return view('peminjam/data_peminjam');
});

Route::get('lihat_data_peminjam', 'App\Http\Controllers\PeminjamController@lihat_data_peminjam');

Route :: group(array('prefix' => 'admin'), function(){
    //url ke halaman home
    Route::get('/', function(){
        return 'Halaman Home Admin';
    });
    //Route ke halaman input data buku
    Route::get('post', function(){
        return "Halaman Input data Buku";
    });
     //Route ke halaan input data buku
     Route::get('post/simpan', function(){
        return "Data berhasil disimpan";
    });
});

Route::get('data_peminjam', 'App\Http\Controllers\DataPeminjamController@index');

Route::get('data_peminjam/create', 'App\Http\Controllers\DataPeminjamController@create')->name('data_peminjam.create');
Route::get('data_peminjam/store', 'App\Http\Controllers\DataPeminjamController@store')->name('data_peminjam.store');
