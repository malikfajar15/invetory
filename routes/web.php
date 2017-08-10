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
//Route::get('/create', function (){
//    return view('transaksi.create');
//});
Route::group(['prefix' =>'home/inventory', 'middleware'=>'auth', 'as'=>'inventory.', 'name'=>'inventory'],function (){
    Route::get('/', 'TransaksiController@index')->name('index');
    Route::get('create', 'TransaksiController@create')->name('create');
    Route::post('store', 'TransaksiController@store')->name('store');
    Route::get('show/{id}', 'TransaksiController@show')->name('show');
    Route::get('edit/{id}', 'TransaksiController@edit')->name('edit');
    Route::put('update/{id}', 'TransaksiController@update')->name('update');
    Route::delete('delete/{id}', 'TransaksiController@delete')->name('delete');
});

