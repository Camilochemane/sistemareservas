<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
	    			return view('Admin.index');

	    		}elseif ($user->type_id == 2) {
	    			
	    			return view('User.index');

	    		}elseif ($user->type_id == 3) {

	    			return view('home');
	    		}else{

	    			echo "Nao achou o tipo";

	    		}

	    			
    	}

    	return redirect()->back();
    }

}
