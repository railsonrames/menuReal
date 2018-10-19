<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsBairroECidadeToTableEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresa', function($table){
            $table -> text('bairro_empresa');
            $table -> text('cidade_empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresa', function($table){
            $table->dropColumn('bairro_empresa');
            $table->dropColumn('cidade_empresa');
        });
    }
}
