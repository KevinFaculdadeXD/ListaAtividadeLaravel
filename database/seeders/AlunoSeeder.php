<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\Curso;
 
class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = Curso::all();
 
        for ($i = 0; $i < 10; $i++) {
            $curso = $cursos->random();
 
            Aluno::create([
                'nome'     => fake()->name(),
                'curso'    => $curso->nome,
                'curso_id' => $curso->id,
                'ativo'    => fake()->boolean(80),
            ]);
        }
    }
}