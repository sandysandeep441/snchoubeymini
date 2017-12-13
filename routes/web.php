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

Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('grain_type', 'grain_typeController');
Route::resource('grain_type', 'grain_typeController');
Route::resource('grain_type', 'grain_typeController');
Route::resource('grain_type', 'grain_typeController');
Route::resource('grain_type', 'grain_typeController');
Route::resource('grain_type', 'grain_typeController');
Route::resource('grain', 'grainController');
Route::resource('grain/customer', 'grain\\customerController');
Route::resource('customer', 'customerController');
Route::resource('grain', 'grainController');