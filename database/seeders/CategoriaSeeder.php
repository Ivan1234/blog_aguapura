<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Tecnología',
            'Política',
            'Salud',
            'Economía',
            'Entretenimiento',
            'Deportes',
            'Educación',
        ];

        foreach ($categorias as $cat) {
            Categoria::create([
                'categoria' => $cat
            ]);
        }

        Categoria::factory()->count(5)->create();
    }
}
