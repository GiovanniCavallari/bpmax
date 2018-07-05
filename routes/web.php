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

<<<<<<< HEAD
Route::get('/', function () {

	$users = DB::table('users')->get();

    return view('welcome');
});
=======
Auth::routes();

//paginas common
Route::get('/', 'BeginController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 6e515f8c4e63c06536a6465d4bfb87a37f066a40
