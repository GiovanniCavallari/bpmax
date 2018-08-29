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
Auth::routes();

//paginas common
Route::get('/', 'BeginController@index')->name('welcome');
Route::get('/solucao', 'BeginController@solucao')->name('solucao');
Route::get('/servicos', 'BeginController@servicos')->name('servicos');
Route::get('/componentes', 'BeginController@componentes')->name('componentes');
Route::get('/equipe', 'BeginController@equipe')->name('equipe');
Route::get('/ruidos', 'BeginController@ruidos')->name('ruidos');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/arduino', 'ArduinoController@index')->name('arduino');