<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Input;
Use DB;

class CategoryController extends Controller
{
    
public function getFormcategoria()
{
	return view('BackEnd.Categoria.FormRegistarCategoria');
}


public function postAddcategoria(Request $request)
{
	$categoria 				= new Category;

	$categoria->designacao	= $request->input('designacao'); 
	$categoria->descricao	= $request->input('descricao');

	$categoria->save();

	return redirect()->route('categoria.list');
}

public function getListcategoria()
{
	$categoria = Category::all();

	return view('BackEnd.Categoria.ListCategoria', 

		[ 'categoria' => $categoria ]
		);
}

public function getFormedit($id)
{
	$categoria = Category::find($id);

	return view('BackEnd.Categoria.FormEditCategoria', 
		['categoria' => $categoria]);
}
public function putActualizarcategoria(Request $request, $id)
{
	$categoria = Category::find($id);

	$categoria->designacao	= $request->input('designacao'); 
	$categoria->descricao	= $request->input('descricao');

	$categoria->save();

	return redirect()->route('categoria.list');

}

public function postAddmodalcategoria(Request $request)
{
	$categoria = new Category;

	$categoria->designacao	= $request->input('designacao'); 
	$categoria->descricao	= $request->input('descricao');

	$categoria->save();

	return redirect()->route('form.servico');
}

}
