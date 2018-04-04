<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
		'name'     		=> 'Fernando',
		'Apelido'  		=> 'Maposse', 
		'email'    		=> 'maposse@gmail.com', 
		'password' 		=> bcrypt('123456'),   
		'telefone' 		=> '842317035',  
		'endereco' 		=> 'Maputo-Mozambique',
		'type_id'     	=>3,
    		]);

    }
}
