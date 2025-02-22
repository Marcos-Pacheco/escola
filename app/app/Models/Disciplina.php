<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'disciplinas';
    protected $fillable = [
        'descricao',
        'data_criacao'
    ];

    function turmas() {
        return $this->belongsToMany(Turma::class, 'turma_disciplinas','disciplina_id','turma_id');
    }
}
