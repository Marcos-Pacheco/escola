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
        Schema::create('turma_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('turma_id')->constrained('turmas');
            $table->foreignId('disciplina_id')->constrained('disciplinas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_disciplinas');
    }
};
