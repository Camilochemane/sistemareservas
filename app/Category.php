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
}
