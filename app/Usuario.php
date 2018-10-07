<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome_usuario', 'senha_usuario', 'email_usuario', 'administrador_usuario'];
    protected $guarded = ['id_usuairo', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'usuario';
}
