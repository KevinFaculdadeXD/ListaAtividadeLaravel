@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar Aluno</h1>

    <form method="POST" action="{{ route('alunos.update', $aluno->id) }}">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $aluno->nome }}">

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ $aluno->curso }}">

        <button type="submit">Atualizar</button>
    </form>
@endsection