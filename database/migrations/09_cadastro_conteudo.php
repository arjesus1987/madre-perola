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
        Schema::create('cadastro_conteudo', function (Blueprint $table) {
            $table->id("id_conteudo");
            $table->string('descricao');
    
            $table->primary('id_conteudo');

            $table->bigInteger('idUsuario')->unsigned();

            $table->foreign('idUsuario')
                ->references('idUsuario')
                ->on('cadastro_usuario')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
