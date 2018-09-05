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

//admin
Route::prefix('admin')->group(function(){
	Route::get('/', 'HomeController@index')->name('admin.dashboard');

	//alas
	Route::get('/alas/listar', 'Admin\AlasController@index')->name('admin.alas.listar');
	Route::get('/alas/cadastrar', 'Admin\AlasController@cadastrar')->name('admin.alas.cadastrar');
	Route::get('/alas/submit', 'Admin\AlasController@cadastrar')->name('admin.alas.submit');

	//robos
	Route::get('/robos/listar', 'Admin\RobosController@index')->name('admin.robos.listar');
	Route::get('/robos/cadastrar', 'Admin\RobosController@cadastrar')->name('admin.robos.cadastrar');
	Route::get('/robos/submit', 'Admin\RobosController@cadastrar')->name('admin.robos.submit');

	//colaboradores
	Route::get('/colaboradores/listar', 'Admin\ColaboradoresController@index')->name('admin.colaboradores.listar');
	Route::get('/colaboradores/cadastrar', 'Admin\ColaboradoresController@cadastrar')->name('admin.colaboradores.cadastrar');
	Route::get('/colaboradores/submit', 'Admin\ColaboradoresController@cadastrar')->name('admin.colaboradores.submit');

	//log
	Route::get('/log/listar', 'Admin\LogController@index')->name('admin.log.listar');
	Route::get('/log/cadastrar', 'Admin\LogController@cadastrar')->name('admin.log.cadastrar');
	Route::get('/log/submit', 'Admin\LogController@cadastrar')->name('admin.log.submit');
});