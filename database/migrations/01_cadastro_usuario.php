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
        Schema::create('cadastro_usuario', function (Blueprint $table) {
            $table->id("idUsuario");
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('dt_nascimento');
            $table->string('estado_civil');
            $table->string('login');
            $table->string('senha');
            $table->string('status');
            $table->string('observacao');
            $table->primary('idUsuario');
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
