<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    protected $table = 'endereco';
    protected $primaryKey = 'id_endereco';
    protected $fillable = [
        'logradouro',
        'numero',
        'cep',
        'cidade',
        'uf',
        'complemento',
        'idUsuario'
    ];
    public $timestamps = false;

   public function usuario()
    {
        return $this->belongsTo(CadastroUsuario::class, 'idUsuario', 'idUsuario');
    }
}
