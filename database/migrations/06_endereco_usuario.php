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
        Schema::create('endereco', function (Blueprint $table) {
            
            $table->id('id_endereco');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('cep');
            $table->string('cidade');
            $table->string('uf');
            $table->string('complemento');

            $table->bigInteger('idUsuario')->unsigned();

            $table->foreign('idUsuario')
                ->references('idUsuario')
                ->on('cadastro_usuario')
                ->onDelete('cascade');

                $table->primary('id_endereco');
            
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
