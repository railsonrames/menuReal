<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = ['id_usuario_responsavel', 'nome', 'descricao', 'endereco', 'telefone', 'bairro', 'cidade'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'restaurante';

}
