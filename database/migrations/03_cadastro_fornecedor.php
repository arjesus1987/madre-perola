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
        Schema::create('cadastro_fornecedor', function (Blueprint $table) {
            $table->id("id_fornecedor");
            $table->string('nome');
            $table->string('cnpj_cpf');

            // Novos campos
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->boolean('status')->default(true); // true = ativo

            $table->primary('id_fornecedor');

            // $table->bigInteger('idUsuario')->unsigned(); ainda não temos a autenticação implementada, então deixamos o idUsuario como null

            // $table->foreign('idUsuario')
            //     ->references('idUsuario')
            //     ->on('cadastro_usuario')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_fornecedor');
    }
};
