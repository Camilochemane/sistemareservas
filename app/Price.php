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
}
