@extends('layouts.app')

@section('content')
    <h1>{{ $curso->nome }}</h1>
    <h2>Alunos matriculados:</h2>
    <ul>
        @foreach ($curso->alunos as $aluno)
            <li>{{ $aluno->nome }}</li>
        @endforeach
    </ul>
@endsection