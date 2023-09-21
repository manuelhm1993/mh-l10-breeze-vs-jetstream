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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->string('url');

            $table->foreignId('user_id')
                  ->nullable() // Si un usuario se da de baja, queremos mantener sus videos, entonces user_id debe aceptar nulos
                  ->constrained()
                  ->onUpdate('set null')
                  ->onDelete('set null'); // Si un usuario se da de baja, su id se vuelve null, pero el videos se mantiene

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
