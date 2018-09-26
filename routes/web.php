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
Route::get('/dblevel', 'BeginController@dblevel')->name('dblevel');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::post('/arduino', 'ArduinoController@index')->name('arduino');
Route::post('/power', 'ArduinoController@power')->name('power');

//admin
Route::prefix('admin')->group(function(){
	Route::get('/', 'HomeController@index')->name('admin.dashboard');

	//robos
	Route::get('/configuration', 'Admin\ConfigurationController@index')->name('config');
	Route::get('/configuration/{id}/editar', 'Admin\ConfigurationController@editar');
	Route::post('/configuration/{id}/update', 'Admin\ConfigurationController@update');
	Route::get('/configuration/cadastrar', 'Admin\ConfigurationController@cadastrar')->name('config.cadastrar');
	Route::post('/configuration/submit', 'Admin\ConfigurationController@submit')->name('config.submit');

	//alas
	Route::get('/alas/listar', 'Admin\AlasController@index')->name('admin.alas.listar');
	Route::get('/alas/cadastrar', 'Admin\AlasController@cadastrar')->name('admin.alas.cadastrar');
	Route::post('/alas/submit', 'Admin\AlasController@submit')->name('admin.alas.submit');
	Route::get('/alas/{id}/editar', 'Admin\AlasController@editar');
	Route::post('/alas/{id}/update', 'Admin\AlasController@update');

	//colaboradores
	Route::get('/colaboradores/listar', 'Admin\ColaboradoresController@index')->name('admin.colaboradores.listar');
	Route::get('/colaboradores/cadastrar', 'Admin\ColaboradoresController@cadastrar')->name('admin.colaboradores.cadastrar');
	Route::get('/colaboradores/submit', 'Admin\ColaboradoresController@cadastrar')->name('admin.colaboradores.submit');
	Route::get('/colaboradores/pontuacao','Admin\ColaboradoresController@pontuacao');

	//log
	Route::get('/log/listar', 'Admin\LogController@index')->name('admin.log.listar');
	Route::get('/log/cadastrar', 'Admin\LogController@cadastrar')->name('admin.log.cadastrar');
	Route::get('/log/submit', 'Admin\LogController@cadastrar')->name('admin.log.submit');
});