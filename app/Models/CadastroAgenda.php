<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CadastroAgenda extends Model
{
    use HasFactory;

    protected $table = 'cadastro_agendas'; // Nome da tabela
    protected $fillable = [
        'data',
        'hora_inicio',
        'hora_fim',
        'duracao_consulta',
        'medico_id',
        'especialidade_id',
        'tipo_atendimento',
        'sala',
        'observacoes',
        'status',
    ];


    public function medico()
    {
        return $this->belongsTo(User::class, 'medico_id'); // User com relação ao Medico
    }
     public function especialidade()
    {
        return $this->belongsTo(Especialidade::class, 'especialidade_id');
    }
}
