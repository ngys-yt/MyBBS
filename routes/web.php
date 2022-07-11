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

use App\Http\Controllers\MybbsController;

Route::get('/', 'MybbsController@top')->name('top');

Route::view('/create_post', 'create_post')->name('create_post');
Route::post('/create_post', 'MybbsController@store')->name('store');
