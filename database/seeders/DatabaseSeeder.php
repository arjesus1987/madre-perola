<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;
// use Database\Seeders\ProdutoSeeder;

class DatabaseSeeder extends Seeder
{
    // Ensure ProdutoSeeder exists in the same directory and namespace
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);



        $this->call(TipoUsuarioSeeder::class);
        $this->call(CadastroFornecedorSeeder::class);

        $this->call([
            EspecialidadeSeeder::class,
        ]);

        $this->call([
            ProdutoSeeder::class,
        ]);
    }
}
class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ProdutoSeeder::class);
    }
}
