<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients/all','ClientControler@index')->name('client.index');
Route::get('/clients/create','ClientControler@create')->name('client.create');
Route::post('/clients/store','ClientControler@store')->name('client.store');
Route::get('/clients/destroy/{id}','ClientControler@destroy')->name('client.destroy');

Route::get('/clients/edit/{id}','ClientControler@edit')->name('client.edit');
Route::post('/clients/update/{id}','ClientControler@update')->name('client.update');
