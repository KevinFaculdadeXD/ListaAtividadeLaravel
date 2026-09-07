<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TEMA 1 - ATV 1: rotas simples
Route::get('/sobre', function () {
    return 'Esta é a página Sobre.';
});

Route::get('/contato', function () {
    return 'Entre em contato: contato@escola.com';
});

// TEMA 1 - ATV 2: rotas com parâmetro
Route::get('/produto/{id}', function ($id) {
    return "Produto número: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria número: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário número: $id";
});

// TEMA 2 - ATV 4: CRUD completo de Alunos (cria alunos.index, alunos.show, etc.)
Route::resource('alunos', AlunoController::class);

// TEMA 9 - relacionamento: ver alunos de um curso
Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return 'Painel administrativo';})->middleware('admin');