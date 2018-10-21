<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCamposTableRestaurante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurante', function (Blueprint $table) {
            $table->renameColumn('id_empresa', 'id');
            $table->renameColumn('nome_empresa', 'nome');
            $table->renameColumn('descricao_empresa', 'descricao');
            $table->renameColumn('endereco_empresa', 'endereco');
            $table->renameColumn('telefone_empresa', 'telefone');
            $table->renameColumn('bairro_empresa', 'bairro');
            $table->renameColumn('cidade_empresa', 'cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurante', function (Blueprint $table) {
            $table->renameColumn('id', 'id_empresa');
            $table->renameColumn('nome', 'nome_empresa');
            $table->renameColumn('descricao', 'descricao_empresa');
            $table->renameColumn('endereco', 'endereco_empresa');
            $table->renameColumn('telefone', 'telefone_empresa');
            $table->renameColumn('bairro', 'bairro_empresa');
            $table->renameColumn('cidade', 'cidade_empresa');
        });
    }
}
