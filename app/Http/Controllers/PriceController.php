<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use App\Service;
use App\Category;
use Illuminate\Support\Facades\Input;
Use DB;

class PriceController extends Controller
{
  private $totalPage = 5;
  public function getFormregistarpreco()
  {
  	$servico      = Service::all();
    $categoria    = Category::all();
  	return view('BackEnd.Preco.FormRegistarPreco', [
  		'servico'   => $servico,
      'categoria' =>$categoria
  		]);
  }


  public function postAddpreco(Request $request)
  {

  	$preco 				         = new Price;
    $precoNatabela         = Price::where('servico_id', '=', $request->input('servico_id'))->first();
    // dd($precoNatabela );
    if(!$precoNatabela){
      	$preco->valor 		     = $request->input('valor');	
    	  $preco->servico_id     = $request->input('servico_id');
      	$preco->descricao      = $request->input('descricao');
        $preco->save();
      	return redirect()->route('list.preco');
  }else{
       return redirect()->back()->with('error', 'Caro utilizador o servico escolhido ja possui um preco');
  }

  }

  public function getFormlistpreco()
  {
      $servico = Service::all();
      return view('BackEnd.Preco.ListPreco',[
  		'preco' => Price::paginate($this->totalPage), 'servico' => $servico]);
  }

    public function getFormreeditarpreco($id)
  {
  	$preco         = Price::find($id);
    $servico       = Service::all();
    $categoria     = Category::all();


  	return view('BackEnd.Preco.FormEditarPreco',[
  		'preco'      => $preco,
      'servico'    => $servico,
      'categoria'  =>$categoria
  		]);
  }

  public function putActualizarpreco(Request $request, $id)
  {
  	$preco 				        = Price::find($id);
  	$preco->valor  		    = $request->input('valor');	
	  $preco->servico_id    = $request->input('servico_id');
  	$preco->descricao     = $request->input('descricao');
  	$preco->update();

  	return redirect()->route('list.preco');
  }


  public function precoPesquisar(Request $request, Price $preco)
  {
      $dataForm       = $request->except('_token');
      $servico        = Service::all();
      $preco          = $preco->pesquisar($dataForm, $this->totalPage);  

      return view('BackEnd.Preco.ListPreco',[
      'preco' => $preco, 'servico' => $servico]);  
  }
}
