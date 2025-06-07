<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailUsuario extends Model
{
    use HasFactory;

    protected $table = 'email_usuario';
    protected $primaryKey = 'id_email';
    protected $fillable = ['email', 'idUsuario'];
}