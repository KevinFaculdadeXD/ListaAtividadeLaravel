<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;   // <- essa linha estava faltando

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Aluno::create([
                'nome'  => fake()->name(),
                'curso' => fake()->randomElement(['ADS', 'Engenharia', 'Direito', 'Medicina']),
                'ativo' => fake()->boolean(80),
            ]);
        }
    }
}