<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function(Blueprint $table){
            $table -> increments('id_empresa');
            $table -> integer('id_usuario_responsavel');
            $table -> text('nome_empresa');
            $table -> text('descricao_empresa');
            $table -> text('endereco_empresa');
            $table -> text('telefone_empresa');
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
        Schema::drop('empresa');
    }
}
