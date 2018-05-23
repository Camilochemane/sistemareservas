<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Type;
use App\Category;
use App\Service;
use App\Price;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name'      => 'Admin',

            ]);
        Type::create([
            'name'      => 'Funcionario',

            ]);
        Type::create([
            'name'      => 'Cliente',

            ]);

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
        'sexo'          =>'Masculino',

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
        'sexo'          => 'Masculino',
            ]);

         User::create([
        'name'          => 'Cremildo',
        'Apelido'       => 'Come', 
        'email'         => 'c.come@gmail.com', 
        'password'      => bcrypt('123456'),   
        'telefone'      => '842317035',  
        'codigoCliente' => '201837304',
        'endereco'      => 'Maputo-Mozambique',
        'type_id'       =>2,
        'funcao'        => '',
        'estado'        => 'Activo',
        'sexo'          => 'Masculino',

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