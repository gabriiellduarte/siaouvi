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
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manifestacao_id')->constrained('manifestacoes')->onDelete('cascade');
            $table->string('tipo_assunto')->nullable();
            $table->text('mensagem')->nullable();
            $table->text('mensagem_resposta')->nullable();
            $table->string('secretaria')->nullable();
            $table->string('acao');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacoes');
    }
};
