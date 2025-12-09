<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Noticia::factory()->create([
            'title' => 'Primer Post Destacado',
            'slug' => 'primer-post-destacado',
            'featured' => 1,
            'status' => 'published',
            'published_at' => now()
        ]);

        // Crear varias publicaciones al azar
        Noticia::factory()->count(20)->create();
    }
}
