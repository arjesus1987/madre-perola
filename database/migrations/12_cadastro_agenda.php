<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cadastro_agenda', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->integer('duracao_consulta')->default(30);

            $table->foreignId('medico_id')->constrained('medico'); // <-- CORRIGIDO

            $table->string('especialidade');
            $table->enum('tipo_atendimento', ['presencial', 'teleconsulta'])->default('presencial');
            $table->string('sala')->nullable();
            $table->text('observacoes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cadastro_agenda');
    }
};
