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

         Category::create([
        'designacao'    => 'Masagem', 
        'descricao'     => 'Fazemos todo tipo de mansagem',
            ]);

        Category::create([
        'designacao'    => 'Cabeleira', 
        'descricao'     => 'Fazemos todo tipo de mansagem',
            ]);

        Category::create([
        'designacao'    => 'Manicures', 
        'descricao'     => 'Fazemos todo tipo de mansagem',
            ]);

        Service::create([
        'name'          => 'Massagem Chineza',
        'categoria_id'  => 1,
        'descricao'     => 'Fazemos isso a anos',
            ]);

        // Service::create([
        // 'name'          => 'Massagem Mocambicana',
        // 'categoria_id'  => 1,
        // 'descricao'     => 'Fazemos isso a anos',
        //     ]);

        // Service::create([
        // 'name'          => 'Corte de cabelo',
        // 'categoria_id'  => 2,
        // 'descricao'     => 'Fazemo cortes ate de juba',
        //     ]);
        // Service::create([
        // 'name'          => 'lavagem de cabelo',
        // 'categoria_id'  => 2,
        // 'descricao'     => 'Fazemos todo tipo de moda',
        //     ]);
        // Price::create([
        // 'valor'        => '600',     
        // 'servico_id'   => 1,             
        // 'descricao'    => '',         
        //     ]);
        // Price::create([
        // 'valor'        => '400',     
        // 'servico_id'   => 2,             
        // 'descricao'    => '',         
        //     ]);
        // Price::create([
        // 'valor'        => '150',     
        // 'servico_id'   => 3,             
        // 'descricao'    => '',         
        //     ]);
        // Price::create([
        // 'valor'        => '300',     
        // 'servico_id'   => 4,             
        // 'descricao'    => '',         
        //     ]);
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