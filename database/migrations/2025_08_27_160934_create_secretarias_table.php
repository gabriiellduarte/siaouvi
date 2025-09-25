<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('secretarias', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique(); // exemplo: "Secretaria da Educação"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('secretarias');
    }
};
