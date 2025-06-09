<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaPacienteTable extends Migration
{
    public function up()
    {
        Schema::create('consulta_paciente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agenda_id');
            $table->string('nome_paciente');
            $table->string('email_paciente')->nullable();
            $table->string('telefone_paciente')->nullable();
            $table->timestamps();

            // Exemplo de chave estrangeira
            $table->foreign('agenda_id')->references('id')->on('cadastro_agendas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consulta_paciente');
    }
}

