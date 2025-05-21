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
        Schema::create('produto_publicar', function (Blueprint $table) {

            $table->id('id_produto_publicar');
            $table->string('descricao');
            $table->string('data_publicacao');

            $table->bigInteger('id_produto')->unsigned();

            $table->foreign('id_produto')
                ->references('id_produto')
                ->on('cadastro_produto')
                ->onDelete('cascade');

                $table->bigInteger('idUsuario')->unsigned();

                $table->foreign('idUsuario')
                    ->references('idUsuario')
                    ->on('cadastro_usuario')
                    ->onDelete('cascade');

            $table->primary('id_produto_publicar');
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
