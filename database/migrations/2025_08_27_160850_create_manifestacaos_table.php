<?php

// database/migrations/2025_08_28_ouvidoria_manifestacoes.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\models\Manifestacao;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('manifestacoes', function (Blueprint $table) {
            $table->id();
            
            // Informações do usuário
            $table->boolean('anonimo')->default(false);
            $table->string('nome')->nullable();
            $table->string('cpf')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('grau_instrucao')->nullable();
            $table->string('email')->nullable();
            $table->string('tipo_telefone')->nullable();
            $table->string('telefone')->nullable();
            
            // Informações da manifestação
            $table->string('secretaria')->nullable();
            $table->string('tipo_assunto');
            $table->string('forma_contato');
            $table->string('natureza');
            $table->text('mensagem')->nullable();
            $table->timestamps();
            

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manifestacoes');
    }
};
