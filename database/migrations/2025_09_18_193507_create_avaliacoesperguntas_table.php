<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avaliacoesperguntas', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            for ($i = 1; $i <= 14; $i++) {
                $table->integer('resposta'.$i)->nullable();
            }
            $table->text('o_mensagem')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avaliacoesperguntas');
    }
};