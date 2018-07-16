<?php
use App\Reserve;

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
	Route::get('blockcliente/{id}', [
		'uses' => 'UserController@getBlockcliente',
		'as'   => 'cliente.block'
		]);

	Route::get('unlockcliente/{id}', [
		'uses' => 'UserController@getUnlockcliente',
		'as'   => 'cliente.unlock'
		]);
	

	Route::get('edit/{id}',[
		'uses' => 'UserController@getFormedit',
		'as'   => 'user.edit'	
		]);
	Route::put('actualizar/{id}', [
		'uses' => 'UserController@putActualizar',
		'as'   => 'user.atualizar'
		]);
	Route::post('pesquisar', [
		'uses' => 'UserController@pesquisar',
		'as'   => 'user.pesquisar'
		]);

	Route::post('pesquisar/cliente', [
		'uses' => 'UserController@clientepesquisar',
		'as'   => 'cliente.pesquisar'
		]);
	Route::get('perfil/{id}', [
		'uses' => 'UserController@clienteperfil',
		'as'   =>  'cliente.perfil'
		]);
});

Route::group(['midlewhere' => 'auth', 'prefix' => 'categoria'], function(){

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
	Route::post('addmodal',[
		'uses' => 'CategoryController@postAddmodalcategoria',
		'as'   => 'categoriaModal.save'
		]);

	Route::post('pesquisar', [
		'uses' => 'CategoryController@categoriaPesquisar',
		'as'   => 'categoria.pesquisar'
		]);
});

Route::group(['midlewhere' => 'auth', 'prefix' => 'servico'], function(){
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
	Route::post('pesquisar', [
		'uses' => 'ServiceController@servicoPesquisar',
		'as'   => 'servico.pesquisar'
		]);

});

Route::group(['midlewhere' => 'auth', 'prefix' => 'preco'], function(){
	
	Route::get('form', [
		'uses' => 'PriceController@getFormregistarpreco',
		'as'   => 'form.preco'
		]);
	Route::post('add', [
		'uses' => 'PriceController@postAddpreco',
		'as'   => 'preco.save'
		]);
	Route::get('list', [
		'uses' => 'PriceController@getFormlistpreco',
		'as'   => 'list.preco'
		]);
	Route::get('edit/{id}', [
		'uses' => 'PriceController@getFormreeditarpreco',
		'as'   => 'edit.preco'
		]);

	Route::post('actualizar/{id}', [
		'uses' => 'PriceController@putActualizarpreco',
		'as'   => 'preco.actualizar'
		]);

	Route::post('',[
		'uses' => 'ServiceController@postAddmodalpreco',
		'as'   => 'servicoModal.save'
		]);

	Route::post('pesquisar', [
		'uses' => 'PriceController@precoPesquisar',
		'as'   => 'preco.pesquisar'
		]);

});

Route::group(['midlewhere' => 'auth', 'prefix' => 'cliente'], function(){

	Route::get('listar', [
		'uses' => 'UserController@getListarcliente',
		'as'   => 'cliente.listar'
		]);

});

Route::group(['midlewhere' => 'auth', 'prefix' => 'reserva'], function()
{
	Route::get('form', [
			'uses' => 'ReserveController@getReserva',
			'as'   => 'reserve.form'
		]);
	Route::get('gerir', [
		'uses' => 'ReserveController@getGerirreserva',
		'as'   => 'reserve.gerir'
		]);
	Route::get('data/{id}', [
		'uses' => 'ReserveController@escolherDatareserva',
		'as'   => 'data.reserva'

		]);

	Route::post('sub/reserva', [
		'uses' => 'ReserveController@submeterReserva',
		'as'   => 'sub.reserva' 
		]);

	Route::post('data/{id}/hora', [
	'uses'  => 'ReserveController@horario',
	'as'    => 'horario.form'

	]);
	Route::get('editar/{id}', [
		'uses' => 'ReserveController@editarescolherDatareserva',
		'as'   => 'editar.reserva'
		]);

	Route::post('editar/data/{id}/hora', [
	'uses'  => 'ReserveController@editarHorario',
	'as'    => 'horario.editar'

	]);

	Route::post('actualizar/{id}', [
		'uses' => 'ReserveController@atualizarReserva',
		'as'   => 'actualizar.reserva'
		]);

	Route::get('listar', [
		'uses' =>'ReserveController@listarReservas',
		'as'   => 'reser.listar'
		]);

	Route::get('confirmar/{id}', [
		'uses' => 'ReserveController@confirmarReserva',
		'as'   => 'reseva.confirmar'
		]);

	Route::post('pesquisar', [
		'uses' => 'ReserveController@reservaPesquisa',
		'as'   => 'reserva.pesquisar'
		]);

	Route::get('cancelar/{id}', [
			'uses' => 'ReserveController@cancelarReserva',
			'as'   => 'reserva.concelar'
			]);

	Route::get('detalhes/{id}', [
			'uses' => 'ReserveController@DetalhesReserva',
			'as'   => 'reserva.detalhes'
		]);

	});

Route::group(['midlewhere' => 'auth', 'prefix' => 'reserva'], function()
{
	Route::get('reservas', [
		'uses'  => 'ReserveController@relatorioTodasreservas',
		'as'    => 'relatorio.reservas'
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