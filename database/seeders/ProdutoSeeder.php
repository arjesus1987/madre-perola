<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Produto extends Model
{
    protected $table = 'cadastro_produto'; // se sua tabela se chama cadastro_produto
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
    ];
}
