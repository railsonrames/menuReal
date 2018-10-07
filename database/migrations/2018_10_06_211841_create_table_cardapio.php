<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCardapio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapio', function(Blueprint $table){
            $table -> increments('id_item_cardapio');
            $table -> text('nome_item_cardapio');
            $table -> text('descricao_item_cardapio');
            $table -> float('preco_item_cardapio', 8, 2);
            $table -> boolean('entrega_item_cardapio');
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
        Schema::drop('cardapio');
    }
}
