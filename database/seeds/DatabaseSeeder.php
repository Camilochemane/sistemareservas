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
        'funcao'        => '',
        'estado'        => 'Activo',
    		]);
      
        User::create([

        'name'          => 'Camilo',
        'Apelido'       => 'Chemane', 
        'email'         => 'chemane@gmail.com', 
        'password'      => bcrypt('123456'),   
        'telefone'      => '842317035',  
        'endereco'      => 'Maputo-Mozambique',
        'type_id'       =>1,
        'funcao'        => '',
        'estado'        => 'Activo',

            ]);

         User::create([
        'name'          => 'Cremildo',
        'Apelido'       => 'Come', 
        'email'         => 'c.come@gmail.com', 
        'password'      => bcrypt('123456'),   
        'telefone'      => '842317035',  
        'endereco'      => 'Maputo-Mozambique',
        'type_id'       =>2,
        'funcao'        => '',
        'estado'        => 'Activo',

            ]);
    }
}
        // 'name'          => 'Camilo',
        // 'Apelido'       => 'Chemane', 
        // 'email'         => 'chemane@gmail.com', 
        // 'password'      => bcrypt('123456'),   
        // 'telefone'      => '842317035',  
        // 'endereco'      => 'Maputo-Mozambique',
        // 'type_id'       =>1,
        // 'funcao'        => '',
        // 'estado'        => 'Activo',

        // 'name'          => 'Cremildo',
        // 'Apelido'       => 'Come', 
        // 'email'         => 'c.come@gmail.com', 
        // 'password'      => bcrypt('123456'),   
        // 'telefone'      => '842317035',  
        // 'endereco'      => 'Maputo-Mozambique',
        // 'type_id'       =>2,
        // 'funcao'        => '',
        // 'estado'        => 'Activo',
        //     ]);