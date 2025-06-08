<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'cadastro_usuario';
    protected $primaryKey = 'idUsuario';
    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'dt_nascimento',
        'sexo',
        'estado_civil',
        'login',
        'senha',
        'tipo_usuario',
        'status',
        'observacao'
    ];

    protected $hidden = ['senha'];

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function emails()
    {
        return $this->hasMany(EmailUsuario::class, 'idUsuario', 'idUsuario');
    }

    public function telefones()
    {
        return $this->hasMany(TelefoneUsuario::class, 'idUsuario', 'idUsuario');
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'idUsuario', 'idUsuario');
    }

    public function medico()
    {
        return $this->hasMany(Medico::class, 'idUsuario', 'idUsuario');
    }
}
