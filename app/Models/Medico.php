<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['usuario_id', 'crm'];

   public function medico()
{
    return $this->hasOne(\App\Models\Medico::class, 'usuario_id');
}
    
}
