<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        $categorias = ['medicamento', 'equipamento', 'suplemento'];

        for ($i = 1; $i <= 20; $i++) {
            DB::table('cadastro_produto')->insert([
                'nome_produto' => 'Produto ' . $i,
                'descricao' => 'Descrição do Produto ' . $i,
                'preco' => mt_rand(1000, 50000) / 100, // ex: 120.50
                'quantidade' => rand(1, 100),
                'categoria' => $categorias[array_rand($categorias)],
                'id_fornecedor' => rand(2, 8), // ajuste conforme seus fornecedores
                'imagem' => null, // ou use uma imagem default se quiser exibir
                'status' => rand(0, 1),
            ]);
        }
    }
}
