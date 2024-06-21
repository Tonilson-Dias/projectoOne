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
        Schema::create('user_socials', function (Blueprint $table) {
            $table->increments('id');
            
            // dados da postagem
            $table -> date('data_create');
            $table -> varchar('text', 200)->nullable();
            $table -> varchar('imagem')->nullable();
            $table -> varchar('video')->nullable();
            $table -> varchar('video')->nullable();
            $table -> varchar('linken')->nullable();
            $table -> integer('user_mensagem_id');

            $table->timestamps();

            // relacionamento
            $table ->foreign('user_mensagem_id') -> references('$id')->on('user_mensagem');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('user_socials', function (Blueprint $table){ 
            $table -> dropForeign('user_socials_user_mensagem_id_foreign');

        });
            

        Schema::dropIfExists('user_socials');
    }
};
