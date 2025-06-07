<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CadastroFornecedorSeeder extends Seeder
{
    public function run()
    {
        DB::table('cadastro_fornecedor')->insert([
            [
                'nome' => 'Clínica Estética Buriti',
                'cnpj_cpf' => '12.345.678/0001-90',
                'email' => 'contato@buritiestetica.com',
                'telefone' => '(71) 99182-1111',
                'endereco' => 'Rua A, 123 - Salvador - BA',
                'status' => 1,
            ],
            [
                'nome' => 'TricoHair Suplementos',
                'cnpj_cpf' => '98.765.432/0001-01',
                'email' => 'vendas@tricohair.com',
                'telefone' => '(71) 99182-2222',
                'endereco' => 'Av. Brasil, 456 - Lauro de Freitas - BA',
                'status' => 1,
            ],
            [
                'nome' => 'Dermapele Fornecimentos',
                'cnpj_cpf' => '11.222.333/0001-44',
                'email' => 'dermapele@fornecedores.com',
                'telefone' => '(71) 99182-3333',
                'endereco' => 'Rua das Flores, 789 - Camaçari - BA',
                'status' => 0,
            ],
            [
                'nome' => 'Beleza Pura Distribuidora',
                'cnpj_cpf' => '33.444.555/0001-22',
                'email' => 'contato@belezapura.com',
                'telefone' => '(11) 98888-7777',
                'endereco' => 'Rua Bela Vista, 101 - São Paulo - SP',
                'status' => 1,
            ],
            [
                'nome' => 'Estetic Line Cosméticos',
                'cnpj_cpf' => '44.555.666/0001-33',
                'email' => 'sac@esteticline.com.br',
                'telefone' => '(21) 99999-8888',
                'endereco' => 'Av. das Américas, 2020 - Rio de Janeiro - RJ',
                'status' => 1,
            ],
            [
                'nome' => 'Natural Look Produtos',
                'cnpj_cpf' => '55.666.777/0001-44',
                'email' => 'natural@look.com',
                'telefone' => '(85) 99999-5555',
                'endereco' => 'Rua do Sol, 333 - Fortaleza - CE',
                'status' => 1,
            ],
            [
                'nome' => 'BioDerma Fornecedores',
                'cnpj_cpf' => '66.777.888/0001-55',
                'email' => 'atendimento@bioderma.com',
                'telefone' => '(31) 98888-1111',
                'endereco' => 'Av. Contorno, 400 - Belo Horizonte - MG',
                'status' => 0,
            ],
            [
                
                'nome' => 'GlowMax Estética',
                'cnpj_cpf' => '77.888.999/0001-66',
                'email' => 'contato@glowmax.com',
                'telefone' => '(51) 97777-4444',
                'endereco' => 'Rua Alegria, 10 - Porto Alegre - RS',
                'status' => 1,
            ],
            [
                'nome' => 'Estética Zen Fornecimentos',
                'cnpj_cpf' => '88.999.000/0001-77',
                'email' => 'zen@estetica.com',
                'telefone' => '(61) 99666-3333',
                'endereco' => 'Quadra 12, Lote 5 - Brasília - DF',
                'status' => 1,
            ],
            [
                'nome' => 'Skin & Care Produtos',
                'cnpj_cpf' => '99.000.111/0001-88',
                'email' => 'sac@skin-care.com',
                'telefone' => '(62) 99444-2222',
                'endereco' => 'Rua Saúde, 999 - Goiânia - GO',
                'status' => 0,
            ],
            [
                'nome' => 'Lumiere Equipamentos',
                'cnpj_cpf' => '10.111.222/0001-99',
                'email' => 'vendas@lumiere.com.br',
                'telefone' => '(41) 98765-1234',
                'endereco' => 'Av. Central, 321 - Curitiba - PR',
                'status' => 1,
            ],
            [
                'nome' => 'Dermashop Comércio',
                'cnpj_cpf' => '20.222.333/0001-00',
                'email' => 'dermashop@comercio.com',
                'telefone' => '(27) 91234-5678',
                'endereco' => 'Rua Nova, 12 - Vitória - ES',
                'status' => 1,
            ],
            [
                'nome' => 'EstetiMais Soluções',
                'cnpj_cpf' => '30.333.444/0001-11',
                'email' => 'contato@estetimais.com',
                'telefone' => '(95) 92345-6789',
                'endereco' => 'Rua Bela, 50 - Boa Vista - RR',
                'status' => 1,
            ],
            [
                'nome' => 'TricoClinic Parceiros',
                'cnpj_cpf' => '40.444.555/0001-22',
                'email' => 'tricoclinic@parceiros.com',
                'telefone' => '(92) 93456-7890',
                'endereco' => 'Rua dos Médicos, 77 - Manaus - AM',
                'status' => 1,
            ],
            [
                'nome' => 'Estética Tropical',
                'cnpj_cpf' => '50.555.666/0001-33',
                'email' => 'tropical@estetica.com',
                'telefone' => '(98) 99876-5432',
                'endereco' => 'Av. Beira Mar, 888 - São Luís - MA',
                'status' => 1,
            ],
        ]);
    }
}
