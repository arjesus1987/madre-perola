<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroAgenda extends Model
{
    protected $table = 'cadastro_agenda';
    protected $fillable = [
        'data', 'hora_inicio', 'hora_fim', 'duracao_consulta',
        'medico_id', 'especialidade', 'tipo_atendimento', 'sala', 'observacoes',
    ];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}