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
            $table->string('descripcion_imagen');           //Descripción de la imagen
            $table->json('galeria');                        //Json de Galería
            $table->foreignId('categoria_id')               // Categoría 
                ->constrained('categorias', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('autor_id')                   // Autor o redactor
                ->nullable()
                ->constrained('users', 'id')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->string('titulo', '100');                //Titulo en la pestaña del navegador
            $table->boolean('featured')->default(false);    // Si es una noticia destacada
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Estado

            //SEO
            $table->string('palabras_clave')->nullable();
            $table->string('meta_titulo')->nullable();
            $table->string('meta_descripcion')->nullable();
            $table->string('meta_robots')->nullable()->default('index, follow');

            // Open Graph (Facebook, LinkedIn)
            $table->string('og_titulo')->nullable();
            $table->string('og_descripcion')->nullable();
            $table->string('og_imagen')->nullable();

            // Twitter Cards
            $table->string('twitter_titulo')->nullable();
            $table->string('twitter_descripcion')->nullable();
            $table->string('twitter_imagen')->nullable();

            // Métricas internas
            $table->unsignedBigInteger('hits')->default(0);
            $table->integer('tiempo_lectura')->nullable();

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
