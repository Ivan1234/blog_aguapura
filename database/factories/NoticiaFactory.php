<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
    {
        $titulo = fake()->sentence(6);
        $body = fake()->paragraphs(8, true);
        $summary = fake()->text(200);

        // Cálculo automático del tiempo estimado de lectura (200 palabras por minuto)
        $palabras = str_word_count(strip_tags($body));
        $tiempoLectura = ceil($palabras / 200);

        return [
            // Información principal
            'title' => $titulo,
            'titulo' => fake()->sentence(6),
            'slug' => Str::slug($titulo) . '-' . fake()->unique()->numberBetween(1000, 9999),
            'image' => fake()->imageUrl(1280, 720, 'news'),
            'summary' => $summary,
            'body' => $body,
            'descripcion_imagen' => fake()->sentence(8),

            'galeria' => json_encode(
                collect(range(1, fake()->numberBetween(2, 6)))->map(function () {
                    return fake()->imageUrl(1280, 720, 'news');
                })
            ),

            // Relaciones
            'categoria_id' => Categoria::query()->inRandomOrder()->value('id') ?? 1,
            'autor_id' => null, // o fake()->numberBetween(1, 10) si quieres autores random

            'featured' => fake()->boolean(20),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),

            // SEO
            'palabras_clave' => implode(', ', fake()->words(6)),
            'meta_titulo' => Str::limit($titulo, 70),
            'meta_descripcion' => Str::limit($summary, 160),
            'meta_robots' => 'index, follow',

            // Open Graph
            'og_titulo' => $titulo,
            'og_descripcion' => Str::limit(fake()->paragraph(), 255),
            'og_imagen' => fake()->imageUrl(1280, 720, 'news'),

            // Twitter Cards
            'twitter_titulo' => $titulo,
            'twitter_descripcion' => Str::limit(fake()->paragraph(), 255),
            'twitter_imagen' => fake()->imageUrl(1280, 720, 'news'),

            // Métricas
            'hits' => fake()->numberBetween(0, 5000),
            'tiempo_lectura' => $tiempoLectura,

            // Publicación
            'published_at' => fake()->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
