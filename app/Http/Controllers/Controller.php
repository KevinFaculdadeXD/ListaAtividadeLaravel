<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function create()
{
    $this->authorize('create', Aluno::class);
    return view('alunos.create');
}

public function store(AlunoRequest $request)
{
    $this->authorize('create', Aluno::class);
    Aluno::create($request->validated());
    return redirect()->route('alunos.index');
}

public function update(AlunoRequest $request, $id)
{
    $aluno = Aluno::findOrFail($id);
    $this->authorize('update', $aluno);
    $aluno->update($request->validated());
    return redirect()->route('alunos.show', $aluno->id);
}

public function destroy($id)
{
    $aluno = Aluno::findOrFail($id);
    $this->authorize('delete', $aluno);
    Aluno::destroy($id);
    return redirect()->route('alunos.index');
}
}
