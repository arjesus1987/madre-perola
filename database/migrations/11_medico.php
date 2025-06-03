<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->id(); // ID primário da tabela médico

            $table->string('crm');
            $table->string('uf');

            // FK para cadastro_usuario
            $table->unsignedBigInteger('idUsuario');

            $table->foreign('idUsuario')
                  ->references('idUsuario')
                  ->on('cadastro_usuario')
                  ->onDelete('cascade');

            $table->timestamps(); // Opcional, mas recomendado
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medico');
    }
};
