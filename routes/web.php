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

Route::get('/',"TodoController@home")->name('home');

Route::post('/save',"TodoController@saveEntry")->name('saveEntry');

Route::get('/fetch/{todo}',"TodoController@fetchToUpdate")->name('fetchToUpdate');

Route::post('/update/{todo}',"TodoController@updateEntry")->name('updateEntry');

Route::post('/delet/{todo}',"TodoController@deleteEntry")->name('deleteEntry');
