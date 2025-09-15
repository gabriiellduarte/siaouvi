<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->string('cpf')->unique();
    $table->date('data_nascimento');
    $table->enum('sexo', ['masculino', 'feminino', 'outro']);
    $table->string('grau_instrucao')->nullable();
    $table->string('email')->nullable();
    $table->enum('tipo_telefone', ['whatsapp','celular','fixo'])->nullable();
    $table->string('telefone')->nullable();
    $table->timestamps();
    
});
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
