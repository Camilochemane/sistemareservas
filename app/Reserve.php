<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\User;

class Reserve extends Model
{
    
    protected $fillable = ['user_id','servico_id','funcionario','data','hora','estado'];


     public function servicos()
    {
    	return $this->belongsTo(Service::class, 'servico_id');
    }


    public function users()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }


    public function pesquisar(Array $data, $totalPagina)
    {
    	return $this->where(function ($query) use ($data){

    		if(isset($data['name']))
    				$query->where('user_id', $data['name']);


    		if(isset($data['data']))
    				$query->where('data', 'like' ,$data['data'].'%');

    	})->paginate($totalPagina);
    }
}
