<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function show($id)
{
    $curso = Curso::with('alunos')->findOrFail($id);
    return view('cursos.show', compact('curso'));
}
}
