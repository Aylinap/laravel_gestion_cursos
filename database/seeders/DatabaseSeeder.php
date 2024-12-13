<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CursoSeeder::class,
            AlumnoSeeder::class,
        ]);

       
        $alumnos = Alumno::all();
        Curso::all()->each(function ($curso) use ($alumnos) {
            $curso->alumnos()->attach(
                $alumnos->random(rand(5, 15))->pluck('id')->toArray() 
            );
        });
    }
}
