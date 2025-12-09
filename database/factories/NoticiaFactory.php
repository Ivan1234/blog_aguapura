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

        return [
            'title' => $titulo,
            'slug' => Str::slug($titulo) . '-' . fake()->unique()->numberBetween(1000, 9999),
            'image' => fake()->imageUrl(1280, 720, 'news'),
            'summary' => fake()->text(200),
            'body' => fake()->paragraphs(5, true),
            'categoria_id' => Categoria::query()->inRandomOrder()->value('id') ?? 1,
            'featured' => fake()->boolean(),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
