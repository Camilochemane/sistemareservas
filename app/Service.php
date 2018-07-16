<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Price;
use App\Reserve;

class Service extends Model
{
    
protected $fillable = [
          'name','categoria_id','descricao', 'image',
    ];


    public function category()
    {
    	return $this->belongsTo(Category::class, 'categoria_id');
    }

    public function preco(){
  		return $this->hasMany(Price::class, 'id');
    }
    
     public function reserve(){

  		return $this->hasMany(Reserve::class, 'id');
    }

     public function pesquisar(Array $data, $totalPage)
    {
      return $this->where(function ($query) use ($data){

        if(isset($data['categoria']))
            $query->where('categoria_id', $data['categoria']);


        if(isset($data['name']))
            $query->where('name', 'like' ,'%'.$data['name'].'%');

      })->orderByRaw('name DESC')->paginate($totalPage);
    }

}
