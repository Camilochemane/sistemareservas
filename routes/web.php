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