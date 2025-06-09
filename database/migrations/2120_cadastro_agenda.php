<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cadastro_agendas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->integer('duracao_consulta');
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('especialidade_id');
            $table->enum('tipo_atendimento', ['presencial', 'teleconsulta']);
            $table->string('sala')->nullable();
            $table->text('observacoes')->nullable();
            $table->timestamps();
            $table->enum('status', ['disponivel', 'agendado'])->default('disponivel');


            // Chave estrangeira com users
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('especialidade_id')->references('id')->on('especialidades')->onDelete('cascade');
        });
    }


public function down()
{
    Schema::table('cadastro_agendas', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

};
