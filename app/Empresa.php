<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['id_usuario_responsavel', 'nome_empresa', 'descricao_empresa', 'endereco_empresa', 'telefone_empresa'];
    protected $guarded = ['id_empresa', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'empresa';
}
