<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'  => 'required|string|min:3|max:100',
            'curso' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'  => 'O nome do aluno é obrigatório seu boco',
            'nome.min'       => 'O nome precisa ter pelo menos 3 caracteres.',
            'curso.required' => 'Informe o curso do aluno.',
        ];
    }
}