<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Cadastrar Aluno
        </h2>
    </x-slot>
 
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">
        <form method="POST" action="{{ route('alunos.store') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1">Nome:</label>
                <input type="text" name="nome" class="border rounded px-3 py-2 text-gray-900 w-full max-w-sm">
            </div>
 
            <div>
                <label class="block mb-1">Curso:</label>
                <input type="text" name="curso" class="border rounded px-3 py-2 text-gray-900 w-full max-w-sm">
            </div>
 
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Salvar</button>
        </form>
    </div>
</x-app-layout>
 