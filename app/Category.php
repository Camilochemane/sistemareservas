<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Category extends Model
{
   
	protected $fillable = [
        'designacao','descricao',
    ];


    public function service()
    {
    	return $this->hasMany(Service::class, 'id');
    }

    public function pesquisar(Array $data, $totalPagina)
    {
      return $this->where(function ($query) use ($data){

        if(isset($data['name']))
            $query->where('designacao' ,$data['name']);

      })->orderByRaw('designacao DESC')->paginate($totalPagina);
    }
}
