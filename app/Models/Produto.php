<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'cadastro_produto';

    protected $primaryKey = 'id_produto';

    public $timestamps = false; // se não tiver created_at/updated_at

    protected $fillable = [
        'nome_produto',
        'descricao',
        'preco',
        'quantidade',
        'categoria',
        'id_fornecedor',
        'imagem',
        'status'
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor', 'id_fornecedor');
    }
}
