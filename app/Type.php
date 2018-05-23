<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     protected $fillable = ['name',];


     public function user()
     {
     	return $this->belongTo(User::class);
     }
}
