<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('Apelido')->nullable();
            $table->string('email', 30)->index()->unique();
            $table->string('password');
            $table->integer('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->unsignedInteger('type_id');
            $table->string('funcao')->nullable();
            $table->string('estado')->nullable();
            $table->rememberToken();
            $table->timestamps();
            

            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
