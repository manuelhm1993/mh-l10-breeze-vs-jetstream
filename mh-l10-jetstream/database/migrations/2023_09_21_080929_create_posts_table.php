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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('body');

            $table->foreignId('user_id')
                  ->nullable() // Si un usuario se da de baja, queremos mantener sus posts, entonces user_id debe aceptar nulos
                  ->constrained()
                  ->onUpdate('set null')
                  ->onDelete('set null'); // Si un usuario se da de baja, su id se vuelve null, pero el posts se mantiene

            $table->foreignId('category_id')
                  ->nullable() // Si una categoría se elimina, queremos mantener sus posts, entonces user_id debe aceptar nulos
                  ->constrained()
                  ->onUpdate('set null')
                  ->onDelete('set null'); // Si una categoría se elimina, su id se vuelve null, pero el posts se mantiene

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
