<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Price;
use App\Reserve;

class Service extends Model
{
    
protected $fillable = [
          'name','categoria_id','descricao'
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

}
