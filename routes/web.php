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
    // return view('welcome');
    return view('FrontEnd.Home.home');
});

Auth::routes();
Route::auth();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['midlewhere' => 'auth', 'prefix' => 'user'], function()
{
	Route::post('login',[

		'uses' => 'UserController@postlogin',
		'as'   => 'user.login' 

		]);
	Route::get('registar/funcionario', [

		'uses' => 'UserController@getFormfuncionario',
		'as'   => 'func.form'
		]);
	Route::get('listar/funcionario', [

		'uses' => 'UserController@getListarfuncionario',
		'as'   => 'func.listar'
		]);

	Route::post('adicionar', [
		'uses' => 'UserController@postCreate',
		'as'   => 'form.add'
		]);
	Route::get('block/{id}', [
		'uses' => 'UserController@getBlockuser',
		'as'   => 'user.block'
		]);

	Route::get('unlock/{id}', [
		'uses' => 'UserController@getUnlock',
		'as'   => 'user.unlock'
		]);
	Route::get('edit/{id}',[
		'uses' => 'UserController@getFormedit',
		'as'   => 'user.edit'	
		]);
	Route::put('actualizar/{id}', [
		'uses' => 'UserController@putActualizar',
		'as'   => 'user.atualizar'
		]);

});

Route::group(['prefix' => 'categoria'], function(){

	Route::get('form', [
		'uses' => 'CategoryController@getFormcategoria',
		'as'   => 'categoria.form'
		]);
	Route::get('lista', [
		'uses' => 'CategoryController@getListcategoria',
		'as'   => 'categoria.list'
		]);
	Route::post('add', [
		'uses' => 'CategoryController@postAddcategoria',
		'as'   => 'categoria.save'
		]);
	Route::get('edit/{id}', [
		'uses' => 'CategoryController@getFormedit',
		'as'   => 'cateoria.edit'
		]);
	Route::put('actualizar/{id}', [
		'uses' => 'CategoryController@putActualizarcategoria',
		'as'   => 'categoria.actualizar'
		]);
});

Route::group(['prefix' => 'servico'], function(){
	Route::get('form', [
		'uses' => 'ServiceController@getFormservico',
		'as'   => 'form.servico'
		]);
	Route::get('lista', [
		'uses' => 'ServiceController@getListaservico',
		'as'   => 'list.servico'
		]);
	Route::post('add', [
		'uses' => 'ServiceController@postAddservico',
		'as'   => 'servico.save'
		]);
	Route::get('edit/{id}', [
		'uses' => 'ServiceController@getEditservice',
		'as'   => 'edit.servico'
		]);
	Route::put('actualizar/{id}', [
		'uses' => 'ServiceController@putActualizarservico',
		'as'   => 'servico.actualizar'
		]);

});

Route::group(['midlewhere' => 'auth', 'prefix' => 'reserve'], function()
{
	Route::get('form', [
			'uses' => 'ReserveController@getReserva',
			'as'   => 'reserve.form'
		]);
	});

Route::get('contacto', [
		'uses' => 'UserController@getContacto',
		'as'   => 'contacto'
		]);
Route::get('sobre', [
		'uses' => 'UserController@getSobre',
		'as'   => 'sobre'
	]);
// Route::get('', ['uses' => 'HomeController']);