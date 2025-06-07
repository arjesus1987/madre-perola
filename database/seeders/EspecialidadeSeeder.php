<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidade;

class EspecialidadeSeeder extends Seeder
{
    public function run()
    {
        $especialidades = [
            [
                'nome' => 'Tricologia',
                'codigo' => 1,
                'descricao' => 'Área que estuda e trata problemas do couro cabeludo e dos fios de cabelo.',
                'status' => 'ativo',
                'observacoes' => 'Muito procurada por pacientes com queda capilar.'
            ],
            [
                'nome' => 'Estética Facial',
                'codigo' => 2,
                'descricao' => 'Tratamentos estéticos voltados para a face, como limpeza de pele, peelings e rejuvenescimento.',
                'status' => 'ativo',
                'observacoes' => 'Alta procura por rejuvenescimento não invasivo.'
            ],
            [
                'nome' => 'Estética Corporal',
                'codigo' => 3,
                'descricao' => 'Cuidados com o corpo, incluindo massagens, drenagem linfática e redução de medidas.',
                'status' => 'ativo',
                'observacoes' => 'Tratamentos pós-operatórios são comuns.'
            ],
            [
                'nome' => 'Depilação a Laser',
                'codigo' => 4,
                'descricao' => 'Procedimento estético para remoção definitiva dos pelos.',
                'status' => 'ativo',
                'observacoes' => 'Requer equipamentos com manutenção periódica.'
            ],
            [
                'nome' => 'Micropigmentação',
                'codigo' => 5,
                'descricao' => 'Técnica estética para correção e realce de sobrancelhas, lábios e olhos.',
                'status' => 'inativo',
                'observacoes' => 'Em fase de credenciamento de profissionais.'
            ],
            [
                'nome' => 'Peeling Químico',
                'codigo' => 6,
                'descricao' => 'Procedimento que promove a renovação celular por meio da aplicação de ácidos.',
                'status' => 'ativo',
                'observacoes' => 'Indicada para manchas e linhas finas.'
            ],
        ];

        foreach ($especialidades as $dados) {
            Especialidade::create($dados);
        }
    }
}
