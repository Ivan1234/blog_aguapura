<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador del Sistema',
            'email' => 'admin@demo.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Crear varios usuarios random
        User::factory()->count(10)->create();
    }
}
