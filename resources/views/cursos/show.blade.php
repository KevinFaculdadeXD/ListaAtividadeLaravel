<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $curso->nome }}
        </h2>
    </x-slot>
 
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">
        <h2 class="font-semibold mb-2">Alunos matriculados:</h2>
        <ul class="space-y-1">
            @foreach ($curso->alunos as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
 