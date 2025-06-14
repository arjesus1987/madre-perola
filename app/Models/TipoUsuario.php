<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipo_usuario';
    protected $primaryKey = 'id_tipo_usuario';
    protected $fillable = ['descricao'];

    public $timestamps = false;
}
