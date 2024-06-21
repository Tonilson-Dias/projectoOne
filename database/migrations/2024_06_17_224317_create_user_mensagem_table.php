<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_mensagem', function (Blueprint $table) {
            
            $table->increments('id');
             // people data
            $table -> varchar('nome', 100 );
            $table -> varchar('teleone', 15 )->nullable();
            $table -> Varchar('sexo', 1);
            $table -> varchar('interesses', 200)->nullable();
            $table -> date('nascimento' )->nullable();
            $table -> varchar('nacionalidade')->default('Angola');
            $table -> date('data_creat', 15 );
            $table -> varchar('conteudo', 200 )->nullable();
            
            
            // dados para logar
            $table -> varchar('email', 100 );
            $table -> varchar('password', 10);

            //permission
            $table -> varchar('status')->default('active');
            $table -> varchar('permission' )->default('app.user_mensagem');
             
            $table ->rememberToken('conteudo', 200 )->nullable();
            $table->timestamps();
            $table -> softDeletes();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('user_mensagem', function (Blueprint $table){

        });

        Schema::dropIfExists('user_mensagem');
    }
};
