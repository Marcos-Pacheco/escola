<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use HasFactory,SoftDeletes;
    private $table = 'turmas';
    private $fillable = [
        'descricao',
        'ano',
        'data_criacao'
    ];

    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class,'turma_disciplinas','turma_id','disciplina_id');
    }

    public function docentes()
    {
        return $this->belongsToMany(User::class,'turma_disciplina_docentes', 'docente_id','turma_disciplina_id');
    }
}
