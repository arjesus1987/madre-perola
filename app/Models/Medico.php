<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CadastroUsuario;
use App\Models\CadastroAgenda;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medico';

    protected $primaryKey = 'id';

    protected $fillable = [
        'crm',
        'uf',
        'idUsuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(CadastroUsuario::class, 'idUsuario', 'idUsuario');
    }

    public function agendas()
    {
        return $this->hasMany(CadastroAgenda::class, 'medico_id');
    }
}

