<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserValidation;
use Auth;
use App\User;
use App\Type;
use App\Category;
use App\Reserve;
use Illuminate\Support\Facades\Input;
Use DB;

class UserController extends Controller
{
    private $totalpaginate = 5;
      public function postlogin(Request $request)
    {

        // dd($request->all());
    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password,

    		]))
    	{
	    		$user        = User::where('email', $request->email)->first();
                $reservas    = Reserve::where('estado', '=', 'Pendente')->first();


	    		if($user->type_id == 1)
	    		{    
                    if($reservas){
                        $messagem = 'Caro utilizador existem reservas clica aqui para validar';

                        return view('BackEnd.Admin.index', ['messagem' => $messagem]);
                                    
                    }else{
	    			    return view('BackEnd.Admin.index');
                     }

	    		}elseif ($user->type_id == 2) {
	    			 if($reservas){

                        $messagem = 'Caro utilizador existem reservas clica aqui para validar';

                        return view('BackEnd.User.index', ['messagem' => $messagem]); 
                    }else{
                        return view('BackEnd.User.index');
                     }
	    		}elseif ($user->type_id == 3) {

	    			return view('FrontEnd.Home.homeClientelogado');
	    		}else{

	    			echo "Nao achou o tipo";

	    		}   			
    	}

    	return redirect()->back();
    }

     public function postCreate(UserValidation $request)
    {      
        $data                   = new User($request->all()) ;
        $data['password']       = bcrypt($data['password']);
        $data['estado']         = 'Activo';

        if ($request->hasFile('image')&& $request->file('image')->isValid()){

            $name = $data['name'].kebab_case($data['Apelido']);
            $extension = $request->image->extension();
            $nameFile = "{$name}.{$extension}";

            $data['image'] = $nameFile;

            $upload = $request->image->storeAs('users', $nameFile);

            if(!$upload)
                    return redirect()
                                ->back()
                                ->with('error', 'falha ao fazer uplaod da imagem');
        }
        // dd($data['type_id']);
        $save  = $data->save();

        if($save)
            return redirect()
                        ->route('func.listar')
                        ->with('success', 'Gravado com sucesso');

        return redirect()
                        ->back()
                        ->with('error', ' falha ao gravar');
    }

    public function getContacto()
    {
        return view('FrontEnd.Home.Contacto.contacto');
    }

    public function getSobre()
    {
        return view('FrontEnd.Home.Sobre.sobre');
    }


    public function getFormfuncionario()
    {
        $tipo               = Type::where('types.id', '<>', 3)->get();
        $funcao             = Category::all();
        return view('BackEnd.Admin.FormAddFuncionario', [
                'tipo'      => $tipo,
                'funcao'    => $funcao
            ]);
    }



     public function getListarfuncionario()
    {
        $user = User::where('users.type_id', '<>', 3)->paginate($this->totalpaginate);
        return view('BackEnd.Admin.FormListarFuncionario', compact('user'));
    }

       public function getListarcliente()
    {
        $user = User::where('users.type_id', '=', 3)->paginate($this->totalpaginate);
        return view('BackEnd.Admin.FormListCliente', compact('user'));
    }


       public function getBlockuser(Request $request, $id)
    {
        $user = User::find($id);

        $user->estado = 'Bloqueiado';

        $user->update();
       
       return redirect()->route('func.listar');
    }

     public function getUnlock(Request $request, $id)
    {
        $user = User::find($id);

        $user->estado = 'Activo';
        $user->update();
       
       return redirect()->route('func.listar');
    }

    public function getBlockcliente(Request $request, $id)
    {
        $user = User::find($id);

        $user->estado = 'Bloqueiado';

        $user->update();
       
       return redirect()->route('cliente.listar');
    }

     public function getUnlockcliente(Request $request, $id)
    {
        $user = User::find($id);

        $user->estado = 'Activo';
        $user->update();
       
       return redirect()->route('cliente.listar');
    }


    function getFormedit(Request $request,$id)
    {
        $user = User::find($id);

        return view('BackEnd.Admin.FormEditFuncionario',
            [
                'user' => $user,
            ]);
    }

    public function putActualizar(Request $request, $id)
    {
        $user = User::find($id);
        $user->name         = Input::get('name');
        $user->Apelido      = Input::get('Apelido');
        $user->email        = Input::get('email');
        $user->password     = bcrypt(Input::get('password'));
        $user->telefone     = Input::get('telefone');
        $user->endereco     = Input::get('endereco');
        $user->type_id      = Input::get('type');
        $user->funcao       = Input::get('funcao');
        $user->estado       = 'Bloqueiado';
        $user->update();

        return redirect()->route('func.listar');

    }

    public function pesquisar(Request $request, User $user)
    {
        $dataForm       = $request->except('_token');

        $user   = $user->pesquisar($dataForm, $this->totalpaginate);

        return view('BackEnd.Admin.FormListarFuncionario', compact('user', $dataForm));

        // dd($dadosPesquisa);
    }
}
