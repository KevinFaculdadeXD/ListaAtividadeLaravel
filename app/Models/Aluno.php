<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'curso', 'ativo'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}