<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comentario;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(Comentario::factory()->count(4))
            ->create();

        User::factory()
            ->withPersonalTeam()
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        $this->call([
            AlumnoSeeder::class,
        ]);

        Materia::factory(10)->create();
    }
}
