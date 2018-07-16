<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Price extends Model
{
    

    protected $fillable=['valor','servico_id','descricao',
    ];

    public function serv()
    {
    	return $this->belongsTo(Service::class, 'servico_id');
    }

    public function pesquisar(Array $data, $totalPage)
    {
      return $this->where(function ($query) use ($data){

        if(isset($data['servico_id']))
            $query->where('servico_id', $data['servico_id']);


        if(isset($data['servico']))
            $query->where('valor', '=' ,$data['servico']);

      })->orderByRaw('valor DESC')->paginate($totalPage);
    }
}
