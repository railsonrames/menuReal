<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $fillable = ['nome_item_cardapio', 'descricao_item_cardapio', 'preco_item_cardapio', 'entrega_item_cardapio', 'url_imagem_item_cardapio'];
    protected $guarded = ['id_item_cardapio', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'cardapio';
}
