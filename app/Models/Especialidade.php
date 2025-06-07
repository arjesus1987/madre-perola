<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = 'especialidades';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'codigo',
        'descricao',
        'status',
        'observacoes',
    ];
    public $timestamps = false;
}

