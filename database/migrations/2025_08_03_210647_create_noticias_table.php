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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();

            $table->string('title');                        // Título de la noticia
            $table->string('slug')->unique();               // URL amigable
            $table->string('image')->nullable();            // Imagen destacada
            $table->text('summary');                        // Resumen breve
            $table->longText('body');                       // Cuerpo completo

            $table->foreignId('categoria_id')               // Categoría 
                ->constrained('categorias', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('autor_id')                   // Autor o redactor
                ->nullable()
                ->constrained('users', 'id')
                ->onDelete('set null')
                ->onUpdate('cascade');
                

            $table->boolean('featured')->default(false);    // Si es una noticia destacada
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Estado

            $table->timestamp('published_at')->nullable(); // Fecha y hora de publicación

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
