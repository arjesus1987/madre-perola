<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Sabonete de Argila Verde',
                'descricao' => 'Limpeza profunda para peles oleosas e acneicas.',
                'preco' => 12.90,
                'imagem' => 'produtos/sabonete-argila-verde.jpg'
            ],
            [
                'nome' => 'Hidratante Corporal de Amêndoas',
                'descricao' => 'Hidratação intensa com fragrância suave.',
                'preco' => 29.50,
                'imagem' => 'produtos/hidratante-amendoas.jpg'
            ],
            [
                'nome' => 'Óleo Essencial de Lavanda',
                'descricao' => 'Aromaterapia calmante e relaxante.',
                'preco' => 18.00,
                'imagem' => 'produtos/oleo-lavanda.jpg'
            ],
            [
                'nome' => 'Esfoliante Natural de Café',
                'descricao' => 'Remove células mortas e ativa a circulação.',
                'preco' => 22.75,
                'imagem' => 'produtos/esfoliante-cafe.jpg'
            ],
            [
                'nome' => 'Shampoo Sólido de Alecrim',
                'descricao' => 'Estimula o crescimento capilar.',
                'preco' => 19.90,
                'imagem' => 'produtos/shampoo-alecrim.jpg'
            ],
            [
                'nome' => 'Creme Facial com Vitamina C',
                'descricao' => 'Ilumina e uniformiza o tom da pele.',
                'preco' => 45.00,
                'imagem' => 'produtos/creme-vitamina-c.jpg'
            ],
            [
                'nome' => 'Bálsamo Labial de Menta',
                'descricao' => 'Hidrata e refresca os lábios.',
                'preco' => 9.90,
                'imagem' => 'produtos/balsamo-menta.jpg'
            ],
            [
                'nome' => 'Máscara de Argila Rosa',
                'descricao' => 'Suaviza e revigora peles sensíveis.',
                'preco' => 14.80,
                'imagem' => 'produtos/mascara-argila-rosa.jpg'
            ],
            [
                'nome' => 'Perfume Botânico Floral',
                'descricao' => 'Notas leves de jasmim e flor de laranjeira.',
                'preco' => 59.90,
                'imagem' => 'produtos/perfume-floral.jpg'
            ],
            [
                'nome' => 'Desodorante Natural de Cedro',
                'descricao' => 'Proteção eficaz sem alumínio.',
                'preco' => 17.60,
                'imagem' => 'produtos/desodorante-cedro.jpg'
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
