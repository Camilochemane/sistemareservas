<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Sevice;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','Apelido','email','password','telefone','endereco','type_id','codigoCliente','funcao','estado','sexo', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function pesquisar(Array $data, $totalpaginate)
    {
        return $this->where(function ($query) use ($data){

            if(isset($data['name']))
                $query->where('name', $data['name']);


            if(isset($data['funcao']))
                $query->where('funcao', $data['funcao'] );

        })
        ->paginate($totalpaginate);
    }

    public function service()
    {
        return $this->hasMany(Sevice::class, 'id');
    }
}
