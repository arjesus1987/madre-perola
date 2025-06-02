<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoUsuario;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $tipo_usuario = [
            [
                'id_tipo_usuario' => 1,
                'descricao' => 'Administrador',
             ],
             [
                'id_tipo_usuario' => 2,
                'descricao' => 'Gerente',
             ],
             [
                'id_tipo_usuario' => 3,
                'descricao' => 'usuário',
             ],

        ];

            foreach ($tipo_usuario as $tipo) {
                TipoUsuario::create($tipo);
            }
    }
}
