<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Pagina sobre sla oq kkkkk';
});

Route::get('/alunos', function () {
    return 'Pagina sobre alunos muitos foda';
});

Route::get('/contato', function () {
    return 'meu contato ai 42 6969-6767';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto daora número: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria número: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário foda número: $id";
});

use App\Http\Controllers\AlunoController;

Route::resource('alunos', AlunoController::class);