<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use HasFactory, SoftDeletes;
    private $table = 'disciplinas';
    private $fillable = [
        'descricao',
        'data_criacao'
    ];
}
