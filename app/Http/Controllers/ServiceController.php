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
   
  private $totalPage    = 4;

   public function getFormservico()
   {
      $categoria        = Category::all();
   	return view('BackEnd.Servico.FormRegistarServico',[
            'categoria' => $categoria
         ]);
   }

   public function getListaservico()
   {  
        $categoria = Category::all();
        return view('BackEnd.Servico.ListServico', 
            ['categoria' => $categoria,'servico'         => Service::paginate($this->totalPage)]);
   }
   public function postAddservico(Request $request)
   {
   		 $servico                = Service::all()->last();
       $data                   = new Service($request->all());
       $nomeServico            = explode(" ", $data['name'])[0];
       $nomeImagem             = $nomeServico.$servico->id.$data['categoria_id'];

       if ($request->hasFile('image')&& $request->file('image')->isValid()){

            $name              = kebab_case($nomeImagem);
            $extension         = $request->image->extension();
            $nameFile          = "{$name}.{$extension}";

            $upload = $data['image']->move(public_path().'/imagens/', $nameFile);
            $data['image']     = $nameFile;

            if(!$upload)
                    return redirect()
                                ->back()
                                ->with('error', 'falha ao fazer uplaod da imagem');
        }

   		 $data->save();

   		return redirect()->route('list.servico');
   }

   public function getEditservice($id)
   {
   		   $servico               = Service::find($id);
         $categoria             = Category::all();	
   		   return view('BackEnd.Servico.FormEditServico', [
   			'servico'               => $servico,
        'categoria'             => $categoria
   			]);
   }

   public function putActualizarservico(Request $request, $id)
   {
   		
   		$servico                   = Service::find($id);
   		$servico->name				     = $request->input('name');
   		$servico->categoria_id		 = $request->input('categoria_id');		
   		$servico->descricao			   = $request->input('descricao');	

   		$servico->update();

   		return redirect()->route('list.servico');

   }
     public function postAddmodalpreco(Request $request)
  {
    $servico                   = new Service;
    $servico->name             = $request->input('name');
    $servico->categoria_id     = $request->input('categoria_id');     
    $servico->descricao        = $request->input('descricao');  

    $servico->save();
    
    return redirect()->route('form.preco');
  }

  public function servicoPesquisar(Request $request, Service $servico)
  {
       $dataForm       = $request->except('_token');
       $servico        = $servico->pesquisar($dataForm, $this->totalPage);
      $categoria       = Category::all();
      return view('BackEnd.Servico.ListServico', 
            ['categoria' => $categoria,'servico'  => $servico]);
  }
}


