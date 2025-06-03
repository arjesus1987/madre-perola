<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cadastro_produto', function (Blueprint $table) {
            $table->id("id_produto");
            $table->string('descricao');
            $table->primary('id_produto');
            $table->string('nome_produto');
            $table->decimal('preco', 10, 2)->nullable();
            $table->integer('quantidade')->default(0);
            $table->string('categoria')->nullable();
            $table->string('imagem')->nullable(); // Caminho da imagem, por exemplo: "produtos/imagem.jpg"
            $table->boolean('status')->default(true); // true = ativo, false = inativo

            $table->bigInteger('id_fornecedor')->unsigned();

            $table->foreign('id_fornecedor')
                ->references('id_fornecedor')
                ->on('cadastro_fornecedor')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_produto');
    }
};
