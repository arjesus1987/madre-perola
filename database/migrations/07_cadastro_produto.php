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
        Schema::create('cadastro_produto', function (Blueprint $table) {
            $table->id("id_produto");
            $table->string('descricao');
    
            $table->primary('id_produto');


            $table->bigInteger('id_fornecedor')->unsigned();

            $table->foreign('id_fornecedor')
                ->references('id_fornecedor')
                ->on('cadastro_fornecedor')
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
