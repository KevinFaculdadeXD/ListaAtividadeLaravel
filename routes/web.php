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