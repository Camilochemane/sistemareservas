<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;
Use DB;

class UserController extends Controller
{
      public function postlogin(Request $request)
    {

        // dd($request->all());
    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password,

    		]))
    	{
	    		$user = User::where('email', $request->email)->first();

	    		if($user->type_id == 1)
	    		{
	    			return view('BackEnd.Admin.index');

	    		}elseif ($user->type_id == 2) {
	    			
	    			return view('BackEnd.User.index');

	    		}elseif ($user->type_id == 3) {

	    			return view('FrontEnd.Home.homeClientelogado');
	    		}else{

	    			echo "Nao achou o tipo";

	    		}

	    			
    	}

    	return redirect()->back();
    }

     public function postCreate(Request $request)
    {      
            $this->Validate($request, [

            'name' => 'required',
            'email' => 'required|unique:users',
            'Apelido' => 'required',
            'telefone' => 'required'

            ]);
            
        $user               = new User;
        $user->name         = Input::get('name');
        $user->Apelido      = Input::get('Apelido');
        $user->email        = Input::get('email');
        $user->password    = bcrypt(Input::get('password'));
        $user->telefone     = Input::get('telefone');
        $user->endereco     = Input::get('endereco');
        $user->type_id      = 3;
        $user->funcao       = 'Cabelereiro';
        $user->estado       = 'Activo';
        $user-> save();

        return redirect()->route('func.listar');
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
        return view('BackEnd.Admin.FormAddFuncionario');
    }

     public function getListarfuncionario()
    {
        $user = User::all();
        return view('BackEnd.Admin.FormListarFuncionario', compact('user'));
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
        $user->type_id      = 3;
        $user->funcao       = 'Cabelereiro';
        $user->estado       = 'Bloqueiado';
        $user->update();

        return redirect()->route('func.listar');

    }
}
