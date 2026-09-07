<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalhes do Aluno
        </h2>
    </x-slot>
 
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">
        <h1 class="text-lg font-semibold">{{ $aluno->nome }}</h1>
        <p>Curso: {{ $aluno->curso }}</p>
 
        @if ($aluno->ativo)
            <p>Status: Ativo</p>
        @else
            <p>Status: Inativo</p>
        @endif
    </div>
</x-app-layout>
 