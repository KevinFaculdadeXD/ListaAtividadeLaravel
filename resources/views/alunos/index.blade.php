@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
    <h1>Alunos</h1>
    <a href="{{ route('alunos.create') }}">Novo aluno</a>

    <ul>
        @forelse ($alunos as $aluno)
            <li>
                {{ $aluno->nome }} —
                <a href="{{ route('alunos.show', $aluno->id) }}">Ver</a>
            </li>
        @empty
            <li>Nenhum aluno cadastrado.</li>
        @endforelse
    </ul>
@endsection