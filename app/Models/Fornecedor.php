<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fornecedor extends Model
{
    protected $table = 'cadastro_fornecedor';
    protected $primaryKey = 'id_fornecedor';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cnpj_cpf',
        'email',
        'telefone',
        'endereco',
        'status',
        'idUsuario',
    ];
}

