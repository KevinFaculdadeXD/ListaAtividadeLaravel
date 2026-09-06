@extends('layouts.app')

@section('title', 'Novo Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Curso:</label>
        <input type="text" name="curso">

        <button type="submit">Salvar</button>
    </form>
@endsection