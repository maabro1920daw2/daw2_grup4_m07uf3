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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('channel','ChannelController');
/*Route::get('/channel','ChannelController@index');
Route::post('/channel/create','ChannelController@store');
Route::get('/channel/{id}/edit','ChannelController@edit');
Route::post('/channel/edit','ChannelController@update');*/
Route::resource('show','ShowController');
Route::resource('grid','GridController');
