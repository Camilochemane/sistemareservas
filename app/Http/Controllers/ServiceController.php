<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Input;
Use DB;

class ServiceController extends Controller
{
   

   public function getFormservico()
   {
      $categoria = Category::all();
   	return view('BackEnd.Servico.FormRegistarServico',[
            'categoria' => $categoria
         ]);
   }


   public function getListaservico()
   {
   		$servico = Service::all();

         $servico = DB::table('services')
                              ->join('categories', 'services.categoria_id', '=', 'categories.id')
                              ->select(
                                    'services.id            as id',
                                    'services.name          as servicoName',
                                    'services.categoria_id  as categoria_id ',
                                    'services.descricao     as servicoDescricao',
                                    'categories.designacao  as categoriaDesignacao',
                                    'categories.descricao   as categoriaDescricao'
                                 )->get();

   		return view('BackEnd.Servico.ListServico', 
            ['servico' => $servico]
            );

   }
   public function postAddservico(Request $request)
   {
   		$servico = new Service;
   		$servico->name				= $request->input('name');
   		$servico->categoria_id		= $request->input('categoria_id');		
   		$servico->descricao			= $request->input('descricao');	

   		$servico->save();

   		return redirect()->route('list.servico');
   }

   public function getEditservice($id)
   {
   		$servico = Service::find($id);
         $categoria = Category::all();	
   		return view('BackEnd.Servico.FormEditServico', [
   			'servico'   => $servico,
            'categoria' => $categoria
   			]);
   }

   public function putActualizarservico(Request $request, $id)
   {
   		
   		$servico = Service::find($id);
   		$servico->name				= $request->input('name');
   		$servico->categoria_id		= $request->input('categoria_id');		
   		$servico->descricao			= $request->input('descricao');	

   		$servico->update();

   		return redirect()->route('list.servico');

   }
}


