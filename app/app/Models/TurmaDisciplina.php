<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TurmaDisciplina extends Model
{
    use HasFactory,SoftDeletes;
    private $table = 'turma_disciplinas';
    private $fillable = [
        'turma_id',
        'disciplina_id',
        'docente_id'
    ];
}
