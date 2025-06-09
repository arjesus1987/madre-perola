
<?php
// database/migrations/xxxx_xx_xx_create_cadastro_usuario.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    
    public function up(): void
    {
        Schema::create('cadastro_usuario', function (Blueprint $table) {
            $table->id('idUsuario');
                $table->primary('idUsuario');

            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg');
            $table->date('dt_nascimento');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('login')->unique();
            $table->string('senha');
            $table->integer('tipo_usuario');
            $table->string('status');
            $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cadastro_usuario');
    }
};

