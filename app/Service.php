<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
protected $fillable = [
          'name','categoria_id','descricao'
    ];

}
