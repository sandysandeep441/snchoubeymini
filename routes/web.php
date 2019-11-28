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
//Route::resource('grain', 'grainController');

Route::get('/grain', 'GrainController@index')->name('grain');
  
// Route::resource('grain', 'Admin/grainsController');
Route::resource('grain/customer', 'grain\\customerController');
Route::resource('customer', 'customerController');


//Route::prefix('admin')->group(function () {
//    Route::get('users', function () {
//        // Matches The "/admin/users" URL
//    });
//    Route::resource('grain', 'grainController');
//    Route::resource('grain/customer', 'grain\\customerController');
//    Route::resource('customer', 'customerController');
//
//});


Route::resource('admin/data', 'Admin\\DataController');