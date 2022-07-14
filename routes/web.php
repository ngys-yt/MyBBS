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

Route::view('/', 'welcome')->name('welcome');

Route::view('/top', 'top')->name('top');
Route::get('/top', 'MybbsController@top')->name('top');

Route::view('/create_post', 'create_post')->name('create_post');
Route::post('/create_post', 'MybbsController@store')->name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/mypage', 'mypage')->name('mypage');
Route::get('/mypage', 'MybbsController@mypage')->name('mypage');
Route::get('/destroy/{id}', 'MybbsController@destroy')->name('destroy');
Route::get('/edit/{id}', 'MybbsController@edit')->name('edit');
Route::get('/update_post/{id}', 'MybbsController@updatePost')->name('update_post');


