<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Lista de Alunos
        </h2>
    </x-slot>
 
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">
        <a href="{{ route('alunos.create') }}" class="text-blue-600 dark:text-blue-400 underline">Novo aluno</a>
 
        <ul class="mt-4 space-y-1">
            @forelse ($alunos as $aluno)
                <li>
                    {{ $aluno->nome }} —
                    <a href="{{ route('alunos.show', $aluno->id) }}" class="text-blue-600 dark:text-blue-400 underline">Ver</a>
                </li>
            @empty
                <li>Nenhum aluno cadastrado.</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>
 