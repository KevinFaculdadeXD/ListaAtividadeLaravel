@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <h1>{{ $aluno->nome }}</h1>
    <p>Curso: {{ $aluno->curso }}</p>

    @if ($aluno->ativo)
        <p>Status: Ativo</p>
    @else
        <p>Status: Inativo</p>
    @endif
@endsection