<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefoneUsuario extends Model
{
    use HasFactory;

    protected $table = 'telefone_usuario';
    protected $primaryKey = 'id_telefone';
    protected $fillable = ['telefone', 'idUsuario'];
}