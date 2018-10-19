<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function(Blueprint $table){
            $table -> increments('id_usuario');
            $table -> text('nome_usuario');
            $table -> text('senha_usuario');
            $table -> string('email_usuario')->unique();
            $table -> boolean('administrador_usuario');
            $table -> timestamp('email_verificado_em')->nullable();
            $table -> timestamps();
            $table -> softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
