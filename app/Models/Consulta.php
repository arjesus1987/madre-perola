<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'agenda_id',
        'nome_paciente',
        'email_paciente',
        'telefone_paciente',
        'data_nascimento',
    ];

    public function agenda()
    {
        return $this->belongsTo(CadastroAgenda::class, 'agenda_id');
    }
}
