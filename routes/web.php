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
Route::get('lihat/{id}','LihatController@index');

Route::get('/create-gambar','UploadGambarController@create')->name('create-gambar');
Route::post('/simpan-gambar','UploadGambarController@store')->name('simpan-gambar');
Route::get('/data-gambar','UploadGambarController@index')->name('data-gambar');
Route::get('/edit-gambar/{id}','UploadGambarController@edit')->name('edit-gambar');
Route::post('/update-gambar/{id}','UploadGambarController@update')->name('update-gambar');
Route::get('/delete-gambar/{id}','UploadGambarController@destroy')->name('delete-gambar');