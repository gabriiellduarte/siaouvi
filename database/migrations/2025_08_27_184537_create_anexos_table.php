<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('anexos', function (Blueprint $table) {

            
            $table->id();
            
            $table->foreignId('manifestacao_id')
                  ->constrained('manifestacoes')
                  ->onDelete('cascade');

            $table->string('caminho_arquivo');
            $table->timestamps();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anexos');
    }
};
