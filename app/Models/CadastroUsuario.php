<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroUsuario extends Model
{
    protected $table = 'cadastro_usuario';
    protected $primaryKey = 'idUsuario';
    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'dt_nascimento',
        'sexo',
        'estado_civil',
        'tipo_usuario',
        'login',
        'senha',
        'status',
        'observacao'
    ];
    public $timestamps = false;
    protected $hidden = ['senha'];


    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'idUsuario', 'idUsuario');
    }
}
