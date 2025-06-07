<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'endereco';
    protected $primaryKey = 'id_endereco';
    protected $fillable = [
        'logradouro', 'numero', 'cep', 'cidade',
        'uf', 'complemento', 'idUsuario'
    ];
}